<?php 
use RainLab\Translate\Classes\Translator;
use RainLab\Translate\Components;
use Raccoon\GeoLocation\Facades\Geo;
use October\Rain\Router\Router as RainRouter;
use Cms\Classes\ComponentBase;
class Cms5f5f1d4d03d2a431971970_9e5064aa0c731ca586aabc45833d12f5Class extends Cms\Classes\LayoutCode
{
////protected $redirect;

protected $translator;
public function onStart() {
    $this->translator = Translator::instance();
    
$ipAddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);   
$geoLocation = Geo::getLocation($ipAddress);  
	$this['Location'] = $geoLocation->countryCode; 
	$this['ip_Address'] = $geoLocation->ipAddress; 
	$this['Location_Name'] = $geoLocation->countryName; 
	$this['City'] = $geoLocation->cityName; 
	$this['country'] = $geoLocation->countryName;	
  if ($geoLocation->countryName == 'China') {
    header("Location: https://www.glueup.cn/zh");
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

  /**
   * @return false if not cached or modified, true otherwise.
   * @param bool check_request set this to true if you want to check the client's request headers and "return" 304 if it makes sense. will only output the cache response headers otherwise.
   **/     
  protected function sendHTTPCacheHeaders($cache_file_name, $check_request = false)
  {
    $mtime = @filemtime($cache_file_name);

    if($mtime > 0)
    {
      $gmt_mtime = gmdate('D, d M Y H:i:s', $mtime) . ' GMT';
      $etag = sprintf('%08x-%08x', crc32($cache_file_name), $mtime);

      header('ETag: "' . $etag . '"');
      header('Last-Modified: ' . $gmt_mtime);
      header('Cache-Control: private');
      // we don't send an "Expires:" header to make clients/browsers use if-modified-since and/or if-none-match

      if($check_request)
      {
        if(isset($_SERVER['HTTP_IF_NONE_MATCH']) && !empty($_SERVER['HTTP_IF_NONE_MATCH']))
        {
          $tmp = explode(';', $_SERVER['HTTP_IF_NONE_MATCH']); // IE fix!
          if(!empty($tmp[0]) && strtotime($tmp[0]) == strtotime($gmt_mtime))
          {
            header('HTTP/1.1 304 Not Modified');
            return false;
          }
        }

        if(isset($_SERVER['HTTP_IF_NONE_MATCH']))
        {
          if(str_replace(array('\"', '"'), '', $_SERVER['HTTP_IF_NONE_MATCH']) == $etag)
          {
            header('HTTP/1.1 304 Not Modified');
            return false;
          }
        }
      }
    }

    return true;
  }
}
