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
      $user = Apiato::call('User@FindUserByPhoneNumberTask',[$request-> phone_number]);

      if ($user == null ){
        $user = Apiato::call('User@CreateUserByPhoneNumberTask',[$request-> phone_number]);
      }
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

      $Signin = Apiato::call('Authentication@SigninTask',[$SigninData]);
      //return $Signin;

      $Token = $this->GetTmpToken($Signin->getHashedKey()); //Apiato::call('Login@GetTokenTask',[$Login->getHashedKey()]);
      $VerifyCode = mt_rand(10000, 99999);
      return array_filter(["Token" =>  $Token,"VerifyCode " => $VerifyCode   ]);
      // $var = Apiato::call('Container@Task', [$arg1, $arg2, ...]);
    }
}
