/*

General JS

*/
$(document).ready(function () {
      // Hide all panels

      images = $(".accordion__img > div").hide();

      // Show first panel at start
      $(".firstshow").show();
      // On click of a panel title
      
      $(".accordion").on('click', function () {
            let panel = $(this),
                  tabName = panel.attr("tab-name"),
                  //      tab = $(this).parent(),
                  tab = $(this),
                  tabs = $(".accordion");
            image = $(".accordion__img > div").find("#" + tabName + "-img");
            (tabName = panel.attr("tab-name")), (image = $("#" + tabName + "-img"));

            // Slide Up all other panels
            panel.parent().parent().parent().find(".accordion__body").slideUp();
            // panel.parents().find(".accordion__body").slideUp();
            // remove active
            panel.parent().parent().parent().find(".active").removeClass("active");
            // hide image
            panel.parent().parent().parent().find(".accordion__img > div").hide();

            // Slide Down target panel, and target image.
            panel.find(".accordion__body").slideDown();
            tab.addClass("active");
            image.fadeIn();
            $(this).next().slideDown(600);

            return false;
      });
});
/*

General JS


$(document).ready(function () {
      // Hide all panels

      images = $(".accordion__img > img").hide();

      // Show first panel at start
      $(".firstshow").show();
      // On click of a panel title
      
      $(".accordion").on('click', function () {
            let panel = $(this),
                  tabName = panel.attr("tab-name"),
                  //      tab = $(this).parent(),
                  tab = $(this),
                  tabs = $(".accordion");
            image = panel.find("#" + tabName + "-img");
            (tabName = panel.attr("tab-name")), (image = $("#" + tabName + "-img"));

            // Slide Up all other panels
            panel.parent().parent().parent().find(".accordion__body").slideUp();
            // panel.parents().find(".accordion__body").slideUp();
            // remove active
            panel.parent().parent().parent().find(".active").removeClass("active");
            // hide image
            panel.parent().parent().parent().find(".accordion__img > img").hide();

            // Slide Down target panel, and target image.
            panel.find(".accordion__body").slideDown();
            tab.addClass("active");
            image.fadeIn();
            $(this).next().slideDown(600);

            return false;
      });
});
*/
