/*

General JS

*/

$(function () {
      "use strict";

      /*-----------------------------------
       * FIXED  MENU - HEADER
       *-----------------------------------*/
      function menuscroll() {
            var $navmenu = $(".nav-menu");
            if ($(window).scrollTop() > 80) {
                  $navmenu.addClass("is-scrolling");
                  $navmenu.addClass("position-fixed");
            } else {
                  $navmenu.removeClass("is-scrolling");
                   $navmenu.removeClass("position-fixed");
            }
      }
      menuscroll();
      $(window).on("scroll", function () {
            menuscroll();
      });
      /*-----------------------------------
       * NAVBAR CLOSE ON CLICK
       *-----------------------------------*/

      $(".navbar-nav > li:not(.dropdown) > a").on("click", function () {
            $(".navbar-collapse").collapse("hide");
      });
      /*
       * NAVBAR TOGGLE BG
       *-----------------*/
      var siteNav = $("#navbar");
      siteNav.on("show.bs.collapse", function (e) {
            $(this).parents(".nav-menu").addClass("menu-is-open");
      });
      siteNav.on("hide.bs.collapse", function (e) {
            $(this).parents(".nav-menu").removeClass("menu-is-open");
      });
});
$('body').scrollspy({ target: '#navbar-example3' })
  /*-----------------------------------
     * ONE PAGE SCROLLING
     *-----------------------------------
    // Select all links with hashes
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[data-toggle="tab"]').on('click', function(event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
      /*-----------------------------------
       * ONE PAGE SCROLLING
       *-----------------------------------*/
      // Select all links with hashes
      /*$('a[href*="#"]')
            .not('[href="#"]')
            .not('[href="#0"]')
            .not('[data-toggle="tab"]')
            .on("click", function (event) {
                  // On-page links
                  if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
                        // Does a scroll target exist?
                        if (target.length) {
                              // Only prevent default if animation is actually gonna happen
                              event.preventDefault();
                              $("html, body").animate(
                                    {
                                          scrollTop: target.offset().top,
                                    },
                                    1000,
                                    function () {
                                          // Callback after animation
                                          // Must change focus!
                                          var $target = $(target);
                                          $target.focus();
                                          if ($target.is(":focus")) {
                                                // Checking if the target was focused
                                                return false;
                                          } else {
                                                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                                                $target.focus(); // Set focus again
                                          }
                                    }
                              );
                        }
                  }
            });
      /*-----------------------------------
       * OWL CAROUSEL
       *-----------------------------------*/
      /*var $testimonialsDiv = $(".testimonials");
      if ($testimonialsDiv.length && $.fn.owlCarousel) {
            $testimonialsDiv.owlCarousel({
                  items: 1,
                  nav: true,
                  dots: false,
                  navText: ['<span class="ti-arrow-left"></span>', '<span class="ti-arrow-right"></span>'],
            });
      }

      var $galleryDiv = $(".img-gallery");
      if ($galleryDiv.length && $.fn.owlCarousel) {
            $galleryDiv.owlCarousel({
                  nav: false,
                  center: true,
                  loop: true,
                  autoplay: true,
                  dots: true,
                  navText: ['<span class="ti-arrow-left"></span>', '<span class="ti-arrow-right"></span>'],
                  responsive: {
                        0: {
                              items: 1,
                        },
                        768: {
                              items: 3,
                        },
                  },
            });
      }
      $(".counter-stat").counterUp({
            delay: 10,
            time: 1000,
      });
}); /* End Fn */
$(document).ready(function () {
   var url_from =  window.location.href;
    
     if (url_from.length !== 0){
        $(".form-group #url_from").val( url_from );}
     else {
        var url_from = $('#url_from').val();
        $(".form-group #url_from").val( url_from );
     }
});    
$(document).ready(function () {
    $("#success").on("hidden.bs.modal", function () {
          // remove d-flex
          $("#success").removeClass("d-flex");
          $("#contact-paygage").removeClass("modal");
          //$('[data-target="#paygage-modal"]').attr('data-target','#success');
          $(".btn").attr("data-target", "#success");
    });
});    

$(document).ready(function () {
      /* Every time the window is scrolled ... */
      $(window).scroll(function () {
            /* Check the location of each desired element */
            $(".hideme").each(function (i) {
                  var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                  var bottom_of_window = $(window).scrollTop() + $(window).height();

                  /* If the object is completely visible in the window, fade it it */
                  if (bottom_of_window > bottom_of_object) {
                        $(this).animate({ opacity: "1" }, 300);
                        /* $(this).animate({'padding-top':'0'},300);*/
                  }
            });
      });
});

$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});
$(document).ready(function(){
	     var defWording =  $(".modal-body #general-modal-title").text();
	//	alert(defWording);
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const $different = $(".different");
const showClass = "show";
 
$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
        $this.find($different).addClass('active');
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($different).attr("aria-selected", "false");
        $this.find($dropdownMenu).removeClass(showClass);
        $this.find($different).removeClass('active');
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
});

/*jQuery('button').click( function() {
	const $this = $(this);
    $this('.collapse').collapse('hide');
});*/

$(document).on("click", "#emailtomodal", function () {
		window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
 'formLocation': 'modal',
 'event': 'form_opened'
});

     var email = $('#email').val();
     if (email.length !== 0){
        $(".modal-body .form-group #email").val( email );}
     else {
        var email = $('#email-bottom').val();
        $(".modal-body .form-group #email").val( email );
     }
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
$(document).on("click", "#pricing-button", function () {
     // var solution = $('#solution1').val();
     var solution = $(this).parent().find(':input').val();
     //alert(solution);
     if (solution.length !== 0){
        $(".modal-body .form-group #solution").val( solution );}
     else {
        var solution = $('#solution').val();
        $(".modal-body .form-group #solution").val( solution );
     }
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});

$(document).on("click", "#office-button", function () {
     // var solution = $('#solution1').val();
     var office = $(this).parent().find(".link-title").text();
     //alert(solution);
     if (office.length !== 0){
        $(".modal-body #general-modal-title").text( "Contact our office in " + office );
        $('input[name=office]').val( office );}
        //$(".modal-body .form-group #office").val( office );}
     else {
        //var office = $('#solution').val();
        //$(".modal-body .form-group #solution").val( office );
     }
     
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
$(document).on("click", "#comming-soon-button", function () {
     // var solution = $('#solution1').val();
     var office = $(this).parent().find(".link-title").text();
     //alert(solution);
     if (office.length !== 0){
        //$(".modal-body #general-modal-title").text( "Contact our office in " + office );
        //$('input[name=office]').val( office );}
        //$(".modal-body .form-group #office").val( office );}
        $(".modal-body #pricing-title").text( "Donations Management is coming soon!");
        $(".modal-body #pricing-subtitle").text( "Register your interest and we will contact you as soon as the new features become available." );
        $(".modal-body .form-group #solution").val( 'Donation Management Suite' );}
     else {
        //var office = $('#solution').val();
        $(".modal-body #pricing-title").text( "Donations Management is coming to soon!");
        $(".modal-body #pricing-subtitle").text( "Register your interest and we will contact you as soon as the new features become available." );
        $(".modal-body .form-group #solution").val( 'Donation Management Suite' );
        //$(".modal-body .form-group #solution").val( office );
     }
     
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});

    
$(document).on('show.bs.modal', '.modal', function () {
    var zIndex = 1111 + (10 * $('.modal:visible').length);
    $(this).css('z-index', zIndex);
    /*setTimeout(function() {
        $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
    }, 0);*/
});
$(document).on('hidden.bs.modal', '.modal', function () {
    var zIndex = 1 + (10 * $('.modal:visible').length);
    $(this).css('z-index', zIndex);
      // $(".modal-body #general-modal-title").text( defWording );
});
/*
$(document).on('hidden.bs.modal', function (e) {
    var target = $(e.target);
    target.removeData('bs.modal')
    .find(".modal-body").html('');
});*/

/*****************typewriter*****************
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
*/
$(document).ready(function() {

  if ($(window).width() > 786) {
    $('.alert').hide().delay(750).slideDown(400);
  };
  $('.close_btn').click(function() {
    $('.close_btn').fadeOut(200);
    $('.alert').slideUp(400);
  });

});

// The function actually applying the offset
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 200);
  }
}

// Captures click events of all <a> elements with href starting with #
$(document).on('click', 'a[href^="#"]', function(event) {
  // Click events are captured before hashchanges. Timeout
  // causes offsetAnchor to be called after the page jump.
  window.setTimeout(function() {
    offsetAnchor();
  }, 0);
});

// Set the offset when entering page with hash present in the url
//window.setTimeout(offsetAnchor, 0);


/*
$(document).ready(function () {
	// get the name
	var name = document.getElementById('white-paper-name'),
	whitepaperName = name.textContent;
	// get the url
	var url = document.getElementById('white-paper-url'),
	whitepaperUrl = url.textContent;
	
//	if (solution.length !== 0){
//        $(".modal-body #general-modal-title").text( "Contact our office in " + solution );}
//     else {
//        var solution = $('#solution').val();
//        $(".modal-body .form-group #solution").val( solution );
//     }
     

 	if (whitepaperName.length !== 0){
 		$('input[name="whitepapertitle"]').val(whitepaperName);}
        //$(".form-group #whitepapertitle").val( whitepaperName );}
        
     else {
        var whitepaperName = $('#whitepapertitle').val();
        $(".form-group #whitepapertitle").val( whitepaperName );
        alert(whitepaperName);
     }
    if (whitepaperUrl.length !== 0){
    	$('input[name="whitepaperlink"]').val(whitepaperUrl);}
       // $(".form-group #white-paper-link").val( whitepaperUrl );}
        
     else {
        var whitepaperUrl = $('#white-paper-link').val();
        $(".form-group #white-paper-link").val( whitepaperUrl );
        	alert(whitepaperUrl);
     }
     
});
*/

$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});