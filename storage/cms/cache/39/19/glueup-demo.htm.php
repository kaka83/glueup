<?php 
use RainLab\Translate\Classes\Translator;
use RainLab\Translate\Components;
use Raccoon\GeoLocation\Facades\Geo;
use October\Rain\Router\Router as RainRouter;
use Cms\Classes\ComponentBase;
class Cms5f5f127b1dff8104700024_0a047c3c058a8e9b8eb199c17c2305cfClass extends Cms\Classes\LayoutCode
{
////protected $redirect;

protected $translator;
public function onStart() {
    $this->translator = Translator::instance();
    

$ipAddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);   
$geoLocation = Geo::getLocation($ipAddress);  
	$this['Location'] = $geoLocation->countryCode; 
  if ($geoLocation->countryCode == 'CN') {
     
    // $this->page['activeLocale'] = 'cn';
    // if (!$locale = post('locale')) {
    //        return;
    //    }
    // if (empty($oldLocale)) {
      $locale = 'cn';
    // $this->translator->setLocale($locale);
    // if (!$locale = post('locale')) {
       //     return;
       // }
       // if (!$locale = post('locale')) {
        //       return;
         //  }
        // Remember the current locale before switching to the requested one
    $this->oldLocale = $this->translator->getLocale();
         
       $this['SelectedLanguage'] = $this->activeLocale = $this->translator->setLocale($locale);
    $this->translator->setLocale($locale);
    header("Location: https://glueup.com/cn");
        //$this->page['activeLocale'] = $this->activeLocale = $this->translator->setLocale($locale);
        //$this['SelectedLanguage'] = $this->activeLocale = $this->translator->setLocale($locale);
         
        // $pageUrl = $this->withPreservedQueryString($this->makeLocaleUrlFromPage($locale), $locale);
        // if ($this->property('forceUrl')) {
         //   return Redirect::to($this->translator->getPathInLocale($pageUrl, $locale));
        // }

       // return Redirect::to($pageUrl);
    
    
    
    // die();
 } else {
     $this['SelectedLanguage'] = $this->activeLocale = $this->translator->getLocale();
 }
 

}

/*
APAC:
'AF', 'AU', 'AW', 'AZ', 'BD', 'BH', 'KH', 'CN', 'CX', 'CC', 'FJ', 'FK', 'FM', 'FO', 'HK', 'ID', 'IN', 'JP', 'KG', 'KP', 'KR', 'KZ', 'LA', 'LK', 'MO', 'MG', 'MY', 'MN', 'MM', 'NP', 'NZ', 'OM', 'PH', 'PK', 'PW', 'QA', 'SG', 'SY', 'TW', 'TJ', 'TH', 'TM', 'AE', 'UZ', 'VU', 'VN'
 
EMEA:
'AL', 'DZ', 'BF', 'BW', 'CM', 'CF', 'TD', 'CG', 'CI', 'CD', 'DJ', 'EG', 'TP', 'GQ', 'ER', 'ET', 'GA', 'GM', 'GH', 'IR', 'JO', 'KE', 'LR', 'LS', 'LY', 'MZ', 'NA', 'NE', 'NG', 'RU', 'RW', 'SN', 'SL', 'SO', 'ZA', 'SD', 'SR', 'SJ', 'SZ', 'TZ', 'TL', 'TG', 'TK', 'TO', 'TT', 'TN', 'TR', 'TC', 'TV', 'UA', 'UG', 'EH', 'YE', 'ZM', 'ZW'
 
USA:
'AX', 'AS', 'AI', 'AD', 'AO', 'AN', 'AG', 'AQ', 'AM', 'AT', 'BA', 'BB', 'BE', 'BG', 'BI', 'BJ', 'BM', 'BN', 'BT', 'BV', 'BV', 'BZ', 'CA', 'CV', 'CK', 'CR', 'HR', 'CY', 'CZ', 'DK', 'DM', 'EE', 'FI', 'FR', 'FX', 'GF', 'PF', 'DE', 'GI', 'GB', 'GD', 'GE', 'GR', 'GL', 'GS', 'HT', 'HU', 'IE', 'IL', 'IO', 'IQ', 'IT', 'KW', 'KY', 'LB', 'LC', 'LI', 'LT', 'LU', 'LV', 'MK', 'MT', 'MA', 'MC', 'MD', 'MV', 'NC', 'NL', 'NO', 'PL', 'CS', 'PT', 'RO', 'SA', 'WS', 'SH', 'VC', 'SM', 'ST', 'SC', 'SK', 'SI', 'SB', 'SE', 'CH', 'UK', 'US', 'UM', 'VA', 'VG', 'VI'
 
LATAM:
'AR', 'BO', 'BR', 'BS', 'CL', 'CO', 'CU', 'DO', 'EC', 'SV', 'GN', 'GT', 'GU', 'GW', 'GY', 'HN', 'JM', 'MX', 'NI', 'PA', 'PE', 'PG', 'PR', 'PY', 'ES', 'UY', 'VE'
*/

//function getFacadeAccessor() {
//$geoLocation = Geo::getLocation($ipAddress);
//print '<pre>';
//var_dump('testibggg');
//var_dump($geoLocation);
//print '</pre>';
//if ($geoLocation->countryCode === 'CN') {
//    header("Location: https://www.glueup.com");
// } else {
//    header("Location: https://www.glueup.cn");
 //    }   
//}
}
