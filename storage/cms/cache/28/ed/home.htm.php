<?php 
class Cms5f5f0cc4c4aab195499764_97203ec3b7922aa366466251f7854a1fClass extends Cms\Classes\PageCode
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
