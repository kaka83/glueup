<?php 
class Cms5f5f144df229a842802178_299d4a1f5bbf75ed0719e702107c6123Class extends Cms\Classes\PageCode
{
public function onStart(){    

    // or you can get file object from your post or record 
    // and get its absolute path and use it `getPath()`
    //$imagePath = 'https://yoursite/image.jpeg';
    $baseUrl = url(Config::get('cms.storage.media.path'));
    //$imagePath = getPath('app/media/glueup-membership.png');
    $imagePath = $baseUrl . '/meta/glueup-hello-meta.png';
    $this['fbImage'] = $imagePath; // image absolute path
}
}
