<?php

namespace App\Containers\Notification\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\StrTrait;
use Illuminate\Support\Facades\Config;
use Kavenegar;

class SendVerifyCodeSmsTask extends Task
{
    use StrTrait;
//    use Kavenegar;
    public function __construct()
    {

    }

    public function run( $phone_number,  $VerifyCode)
    {

      $VerifyCode = $this->ConvertـNumbersـtoـFarsi($VerifyCode);
      try{
        $sender = Config::get('notification-container.SMS_SENDER');
        $message = $VerifyCode;
        $receptor = $phone_number;
        $result = Kavenegar\KavenegarApi::Send($sender,$receptor,$message);
        return $result;
        // خورجی درخواست که یک توکن می باشد
      }
      catch(\Kavenegar\Exceptions\ApiException $e){
        // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
        return $e->errorMessage();
      }
      catch(\Kavenegar\Exceptions\HttpException $e){
        // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
        return $e->errorMessage();
      }
    }
}
