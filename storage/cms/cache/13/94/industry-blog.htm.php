<?php 
use RainLab\Blog\Models\Post as BlogPost;class Cms5f5f0d8caa731506911874_53afc13d5dcf5b3111112ca13a87810cClass extends Cms\Classes\PartialCode
{

public function onStart(){
    //This is where you list the categories you want to display
    //$categories = ['success-stories', 'event-management'];
    $event = $this->event;
    $posts = [];
    
    foreach(BlogPost::all() as $blog){
        $catList = [];
        foreach($blog->categories as $cat){
            $catList[] = $cat->slug;
        }
       // var_dump($catList);
        //if( in_array('event',$catList ) && in_array($event,$catList) ){
        	        if( in_array($event,$catList) && !(in_array('success-stories',$catList)) ){
                array_push($posts, $blog);
                //break;
        }
    }
    
   $this['filteredPosts'] = $posts;
}
   //
   ///
   ////
    //This is where you list the categories you want to display
    //$categories = ['success-stories', 'event-management'];
    /*
    $wp1 = $this->wp1;
    $posts2 = [];
    
    foreach(BlogPost::all() as $blog){
        $catList = [];
        foreach($blog->categories as $cat){
            $catList[] = $cat->slug;
        }
       // var_dump($catList);
        if( in_array('whitepaper',$catList ) && in_array($wp1,$catList) ){
                array_push($posts2, $blog);
                break;
        }
    }
    
   $this['filteredPosts2'] = $posts2;
   //
   ///
   ////
    //This is where you list the categories you want to display
    //$categories = ['success-stories', 'event-management'];
    $wp2 = $this->wp2;
    $posts3 = [];
    
    foreach(BlogPost::all() as $blog){
        $catList = [];
        foreach($blog->categories as $cat){
            $catList[] = $cat->slug;
        }
       // var_dump($catList);
        if/*( !in_array('whitepaper',$catList ) && !*//*(in_array($wp2,$catList) ){
                array_push($posts3, $blog);
                break;
        }
    }
    
   $this['filteredPosts3'] = $posts3;
}
/*
public function onEnd(){
    //This is where you list the categories you want to display
    $categories = ['success-stories', 'event-management'];
    $posts = [];
    
    foreach(BlogPost::all() as $blog){
        $catList = [];
        foreach($blog->categories->take(1) as $cat){
            $catList[] = $cat->slug;
        }
       // var_dump($catList);
        if( in_array('associations',$catList ) && in_array('whitepaper',$catList) ){
                array_push($posts, $blog);
                break;
        }
    }
    
   $this['filteredPostsWP'] = $posts;
}*/
}
