<?php

namespace App\Containers\Login\Actions;

use App\Containers\Login\Models\Login;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;
use Cartalyst\Stripe\Api\Api;
//use Apiato\Core\Traits;

use Illuminate\Support\Facades\Config;
use App\Containers\Login\Traits\JwtTrait;

class LoginAction extends Action
{
  use JwtTrait;

  //    use HashIdTrait;
  //$request-> phone_number
  //$data = $request->all('phone_number');

    public function run(DataTransporter $request)
    {
      //$brands = $this->printThis("Nike");
      //$Token = $this->Token(11);
      //dd($Token);


      $user = Apiato::call('User@FindUserByPhoneNumberTask',[$request-> phone_number]);
      //print_r($user);
      //return;
      //$login = Apiato::call('Login@LoginTask', [$data]);
      if ($user == null ){
        $user = Apiato::call('User@CreateUserByPhoneNumberTask',[$request-> phone_number]);
      }//$user->getHashedKey()
      //      "token_type":"sd",
      //"user_id":"sd",
      //"is_active":"sd",
      //"ip":"sd",
      //"exp_date":"sd"
      //      "uuid":"sd",
      //	"mac_address":"sd",
      //	"platform":"sd",
      //	"user_agent":"sd",
      //	"public_key":"sd",
      //	"device":"sd"
//            $Login = new Login();
//            $Login->user_id = 1;
//            $Login->is_active=1;
//            $Login->ip='255.255.255.255';
//            $Login->exp_date='231231123';
//            $Login->uuid=$request->uuid;
//            $Login->mac_address=$request->mac_address;
//            $Login->platform=$request->platform;
//            $Login->user_agent=$request->user_agent;
//            $Login->public_key=$request->public_key;
//            $Login->device=$request->device;

      //createLogin

      $exp_time= Config::get('Jwt-container.JWT_EXPTMP')+time();
      $exp_date = date("Y-m-d H:i:s", $exp_time);
      $LoginData = [
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
      $LoginData = array_filter($LoginData);

      $Login = Apiato::call('Login@LoginTask',[$LoginData]);

      //echo $Login->getHashedKey();

      //print_r($LoginData);


      $Token = $this->GetTmpToken($Login->getHashedKey()); //Apiato::call('Login@GetTokenTask',[$Login->getHashedKey()]);
      $VerifyCode = mt_rand(10000, 99999);
      //echo $Token;
//      $user->[0]->getHashedKey();
      //echo $Token;
      //GetTokenTask
//print_r($user);
      //echo  json_decode($user);
//        dd($user);
//        $data = $request->sanitizeInput([
//          // add your request data here
//
//        ]);
//        $Login = Apiato::call('User@CreateUserByPhoneNumberTask',$data);
      //print_r($Token->getPayload());
//      var_dump($Token->getPayload());
      return array_filter(["Token" =>  $Token,"VerifyCode " => $VerifyCode   ]);
    }
}
