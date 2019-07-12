<?php

namespace App\Containers\Notification\Traits;
use App\Ship\Traits\StrTrait;
use Illuminate\Support\Facades\Config;
use Kavenegar;


trait SendSmsTrait
{
  use StrTrait;
public function SendVerifyCode($phone_number,  $VerifyCode){
  $VerifyCode = $this->ConvertـNumbersـtoـFarsi($VerifyCode);
  //try{
    $sender = Config::get('notification-container.SMS_SENDER');
    $message = $VerifyCode;
    $receptor = $phone_number;
    $result = Kavenegar\KavenegarApi::Send($sender,$receptor,$message);
    return $result;
    // خورجی درخواست که یک توکن می باشد
  //}
  //catch (){
  //  return 1;
  //}

}

}
