<?php 
class Cms5f5f1d61b8ef1406018681_d7178c62678a9c3820d2d7a7f171ba71Class extends Cms\Classes\PageCode
{
public function onStart(){    

    // or you can get file object from your post or record 
    // and get its absolute path and use it `getPath()`
    //$imagePath = 'https://yoursite/image.jpeg';
    $baseUrl = url(Config::get('cms.storage.media.path'));
    //$imagePath = getPath('app/media/glueup-membership.png');
    $imagePath = $baseUrl . '/meta/glueup-logo-meta.png';
    $this['fbImage'] = $imagePath; // image absolute path
}
}
