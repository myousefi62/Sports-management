<?php

namespace App\Ship\Traits;

use DateTime;
use Illuminate\Support\Facades\Config;

/**
 * Class DocsGeneratorTrait
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
trait StrTrait
{
  /**
   * تبدیل اعداد انگلیسی به فارسی
   * @param $Number
   * @return mixed
   */
  public function ConvertـNumbersـtoـFarsi($Number)
  {
    $en_num = array('0','1','2','3','4','5','6','7','8','9');
    $fa_num = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
    return  str_replace($en_num, $fa_num, $Number);

  }

  /**
   * تبدیل اعداد فارسی به انگلیسی
   * @param $Number
   * @return mixed
   */
  public function ConvertـNumbersـtoـEnglish($Number)
  {
    $en_num = array('0','1','2','3','4','5','6','7','8','9');
    $fa_num = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
    return  str_replace($fa_num, $en_num, $Number);

  }
}
