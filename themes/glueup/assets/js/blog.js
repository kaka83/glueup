/* window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("blog-bar").style.width = scrolled + "%";
}*/
/*
    
    $(document).ready(function() {
    
    /* Every time the window is scrolled ... 
    $(window).scroll( function(){
       
    
         var winScroll = document.body.scrollTop() || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight() - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  getElementById("myBar").style.width = scrolled + "%";

      
        
    
    });
    
});
*/
/*
$(document).ready(function() {
  var docHeight = $(window).height(),
  scrollPercent;
    
 
  $(window).scroll(function() {
           
    scrollPercent = ($(window).scrollTop() / docHeight) * 100;
    /* if( scrollPercent > 10 ){
        $('.progress-bar').width(scrollPercent + '%');&
     } else {
    $('.progress-bar').animate({'opacity':'1'},300); }*/
    
    /*
      
    });
    });
    */
 $(document).ready(function() {
      var docHeight = $(document).height(),
      windowHeight = $(window).height(),
      scrollPercent;

      $(window).scroll(function() {
        scrollPercent = $(window).scrollTop() / (docHeight - windowHeight) * 100;

        $('.progress-bar').width(scrollPercent + '%');
        });
        });
   