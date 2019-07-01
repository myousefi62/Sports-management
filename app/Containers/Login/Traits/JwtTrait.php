<?php

namespace App\Containers\Login\Traits;

use DateTime;
use Illuminate\Support\Facades\Config;

use App\Containers\Login\Data\Repositories\LoginRepository;
use App\Ship\Parents\Tasks\Task;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Key;
//use Lcobucci\JWT\Signer\Keychain; // just to make our life simpler
use Lcobucci\JWT\Signer\Hmac\Sha256;
//use PhpParser\Node\Stmt\Return_;


//use Lcobucci\JWT\Signer\Rsa\Sha256;

/**
 * Class JwtTrait
 * Class JwtTrait
// * iss یا issuer: صادر کننده توکن در این قسمت مشخص میشه، برای مثال مقدارش می‌تونه "hesabfun.com" باشه.
// * sub یا subject: در اینجا موضوع اصلی توکن مطرح میشه، مثلا موضوع توکن ما شناسایی کاربرانه، پس یوزر آیدی کاربر توش قرار میدیم تا متوجه بشیم کسی که توکن برامون ارسال کرده کیه.
// * aud یا audience: در این قسمت مشخص می‌کنیم این توکن باید کجا مورد استفاده قرار بگیره، این مواقعی کاربرد داره که شما چندتا سرور داشته باشید و همه از یک کلید خصوصی برای امضا استفاده می‌کنند. برای مثال مقدارش می‌تونه "https://blog.hesabfun.com" باشه.
// * exp یا expiration: در این قسمت مشخص میکنیم توکن تا چه زمانی اعتبار داره، این تاریخ بصورت Unix time مشخص می‌کنیم.
// * nbf یا not before: در این قسمت مشخص می‌کنیم توکن از چه تاریخی به بعد باید مورد مورد پردازش قرار بگیره، یعنی ممکنه توکن زودتر ایجاد کنیم ولی فعلا اجازه استفاده از اون نداشته باشند.
// * iat یا issuedAt: تاریخ ایجاد توکن به صورت Unix time اینجا قرار میدیم، بیشتر برای اینکه متوجه بشیم توکن جدیده یا نه استفاده میشه.
// * jti یا jwt id: آیدی منحصر به فرد برای هر توکن، اگه سیستم مدیریت توکن تلگرام دیده باشید متوجه میشید میتونه همچین استفاده‌ای داشته باشه، بهتره برای بلاک کردن، کل توکن تو دیتابیس قرار ندید و به هرکدوم یه آیدی بدید اینجوری دیتابیس سبک‌تری دارید.
 * @author  Mohammad yousefi  <mahmoud@zalt.me>
 */
trait JwtTrait
{

  public function GetTmpToken($id):string
  {

    $signer = new Sha256();
    $time = time();

    //    Return  Config::get('Jwt-container.secret');
    //    Return  Config('Jwt-container.secret');
    //    $iss = \config('Jwt-container.JWT_ISS');

    $iss = Config::get('Jwt-container.JWT_ISS');
    $sub= Config::get('Jwt-container.JWT_SUB');
    $aud= Config::get('Jwt-container.JWT_AUD');
    $exp= Config::get('Jwt-container.JWT_EXPTMP')+$time;
    $nbf= Config::get('Jwt-container.JWT_NBF')+$time;
    $iat= $time;
    $jti= $id;
    $JWT_SECRET= Config::get('Jwt-container.JWT_TMPSECRET');

    $token = (new Builder())
      ->relatedTo($sub,true)// Configures the subject that the token was subject (sub claim)
      ->issuedBy($iss,true) // Configures the issuer (iss claim)
      ->permittedFor($aud,true) // Configures the audience (aud claim)
      ->identifiedBy($jti, true) // Configures the id (jti claim), replicating as a header item
      ->withClaim('Type', 'tmp') // Configures a new claim, called "uid"
      ->issuedAt($iat,true) // Configures the time that the token was issue (iat claim)
      ->canOnlyBeUsedAfter($nbf,true) // Configures the time that the token can be used (nbf claim)
      ->expiresAt($exp,true) // Configures the expiration time of the token (exp claim)
      ->getToken($signer,new Key($JWT_SECRET) ); // Retrieves the generated token//new Key('fslhggi26315592@*')

    Return  $token;
  }
}
