<?php

namespace App\Containers\Authentication\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authentication\Traits\JwtTrait;



use App\Containers\Authentication\Models\Signin;
use App\Ship\Parents\Requests\Request;
use App\Ship\Transporters\DataTransporter;
use Cartalyst\Stripe\Api\Api;
//use Apiato\Core\Traits;

use Illuminate\Support\Facades\Config;

class SigninAction extends Action
{
  use JwtTrait;
  public function run(DataTransporter $request)
    {
      //یافتن کاربر با اسن شماره تلفن در سیستم
      $user = Apiato::call('User@FindUserByPhoneNumberTask',[$request-> phone_number]);
      // درصورت عدم وجود کاربر کاربری با اسن شماره تماس به شکل موقت ایجاد می گردد
      if ($user == null ){
        $user = Apiato::call('User@CreateUserByPhoneNumberTask',[$request-> phone_number]);
      }
      // ایجاد تاریخ انقضاء درخواست ورود متناسب با زمان معتبر بود توکن
      $exp_time= Config::get('Jwt-container.JWT_EXPTMP')+time();
      $exp_date = date("Y-m-d H:i:s", $exp_time);
      $SigninData = [
        'user_id'     => $user->id,
        'is_active'   =>1,
        'ip'          =>'255.255.255.255',
        'exp_date'    =>$exp_date,
        'uuid'        =>$request->uuid,
        'mac_address' =>$request->mac_address,
        'platform'    =>$request->platform,
        'user_agent'  =>$request->user_agent,
        'public_key'  =>$request->public_key,
        'device'      =>$request->device,
        'token_type'  =>1
      ];
      $SigninData = array_filter($SigninData);
      // ثبت درخواست ورود جهت برسی صلاحیت کاربر
      $Signin = Apiato::call('Authentication@SigninTask',[$SigninData]);
      //return $Signin;
      // ایجاد توکن در بازه زمانی اعتبار توکن
      $Token = $this->GetTmpToken($Signin->getHashedKey()); //Apiato::call('Login@GetTokenTask',[$Login->getHashedKey()]);
      $VerifyCode = mt_rand(10000, 99999);
      // ثبت اطلاعات درخواست جهت تایدد ورود
//      'user_id',
//      'signin_id',
//      'phone_number',
//      'verify_code',
//      'status_id',
//      'exp_date',
//      'ip'
      $VerifyUSerData = [
        'user_id'       => $user->id,
//        'signin_id'   =>$Signin->id,
//        'phone_number'=>$request-> phone_number,
//        'verify_code' =>$VerifyCode,
//        'status_id'   =>1,
//        'exp_date'    =>$exp_date,
//        'ip'          =>'255.255.255.255'
      ];
      $VerifyUSerData = array_filter($VerifyUSerData);
//      return $VerifyUSerData;
      $VerifyUSer = Apiato::call('Authentication@CreateVerifyUserTask',[$VerifyUSerData ]);
      //return $VerifyUSer;
      // خورجی درخواست که یک توکن می باشد
      return array_filter(["Token" =>  $Token,"VerifyCode " => $VerifyCode   ]);
      // $var = Apiato::call('Container@Task', [$arg1, $arg2, ...]);
    }
}
