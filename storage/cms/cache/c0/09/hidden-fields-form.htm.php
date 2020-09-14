<?php 
use RainLab\Translate\Classes\Translator;use RainLab\Translate\Components;use Raccoon\GeoLocation\Facades\Geo;use October\Rain\Router\Router as RainRouter;use Cms\Classes\ComponentBase;class Cms5f5f1d4d39c26907235379_80451075d84bc7ea9533507eb604e99dClass extends Cms\Classes\PartialCode
{



//
//
protected $redirect;

protected $translator;
public function onStart() {
if ( isset($_GET['utm_source']) ) {
       $this['utmSource'] = $_GET['utm_source']; 
    } else {
      //  echo 'the parameter utm_source is missing';
    }
if ( isset($_GET['utm_medium']) ) {
       $this['utmMedium'] = $_GET['utm_medium'];
    } else {
      //  echo 'the parameter utm_source is missing';
    }
if ( isset($_GET['utm_campaign']) ) {
       $this['utmCampaign'] = $_GET['utm_campaign'];
    } else {
      //  echo 'the parameter utm_source is missing';
    }
if ( isset($_GET['utm_term']) ) {
       $this['utmTerm'] = $_GET['utm_term'];
    } else {
      //  echo 'the parameter utm_source is missing';
    }
if ( isset($_GET['utm_content']) ) {
       $this['utmContent'] = $_GET['utm_content'];
    } else {
      //  echo 'the parameter utm_source is missing';
    }


    $this->translator = Translator::instance();
    $this['url_from'] = $this->currentPageUrl();

$ipAddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);   
$geoLocation = Geo::getLocation($ipAddress);  
	$this['Location'] = $geoLocation->countryCode; 
	$this['country'] = $geoLocation->countryName;
	$this['ip_Address'] = $geoLocation->ipAddress; 
	$this['Location_Name'] = $geoLocation->countryName; 
	$this['City'] = $geoLocation->cityName; 
	
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
