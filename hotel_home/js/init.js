$(window).load(function() { 
  $("#preloader").fadeOut("slow"); 
});

$(document).ready(function () {
    $('textarea').autosize();

    // variable
    var width_page = $(window).width();
    var screen_height = $(window).height();
    var header_height = $('header').height();

    //on resize run function
    function rsizeItems() 
    { 
      //scripts for resolutions smaller than 768px
      var head_nav = $('header nav');
      head_nav.find('ul').css('width', width_page);
      head_nav.mouseover(function(){
        $(this).children().addClass('active');
        head_nav.children().children().children().click(function(e){
          e.preventDefault();
          $(this).parent().parent().removeClass('active');
        });
        
      });
      head_nav.mouseout(function(){
        $(this).children().removeClass('active');
      });

      //height of home_slider
      // $('#home_slider .cycle-slideshow .slide').css('height', screen_height - header_height);




      //lazy load youtube video when video is visible

      $('.lazy_load_video.youtube').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
          var id = $(this).data('youtube-id'),
          iframe = $('<iframe width="560" height="315" frameborder="0" allowfullscreen></iframe>');
          iframe.attr('src', "http://www.youtube.com/embed/" + id + "?showinfo=0");
          $(this).replaceWith(iframe);
        }
        else {
          
        }
      }); 

      //lazy load vimeo video when video is visible
      // $('.lazy_load_video.vimeo').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
      //   if (isInView) {
      //     var id = $(this).data('vimeo-id'),
      //     iframe = $('<iframe frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
      //     iframe.attr('src', "http://player.vimeo.com/video/" + id);
      //     $(this).replaceWith(iframe);
      //   }
      //   else {
          
      //   }
      // }); 





      // map

      var styles = [{  }];

        var styledMap = new google.maps.StyledMapType(styles,
          {name: "Styled Map"});

        var mapOptions = {
          zoom: 15,
          center: new google.maps.LatLng(40.714818,-74.005798),
          scrollwheel: false,

          // disable mapType-top_right corner
          mapTypeControl: false,

          disableDefaultUI:false,
          draggable: true,
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map']
          }
        };
          var map = new google.maps.Map(document.getElementById('map'),
          mapOptions);

          var marker = new google.maps.Marker({
              position: new google.maps.LatLng(40.714818,-74.005798),
              map: map,
              icon: 'images/marker.png' // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
          });

          //this is for infobox
          var boxText = document.createElement("div");
              boxText.innerHTML = "<h1>Hotel *****</h1><p>Location, Country</p>";

          infobox = new InfoBox({
              content: boxText,
              disableAutoPan: false,
              maxWidth: 200,
              pixelOffset: new google.maps.Size(-27,-113),
              zIndex: null,
              boxClass: "infobox",
              boxStyle: {
                  }
          });

          $('#map').click(function(){
            $('.infobox').hide();
            $('#location .map_wrapper .info h2').text("More info")
            $('#location .map_wrapper .info h2').parent().removeClass('active');
          });

          google.maps.event.addListener(marker, 'click', function() {
              infobox.open(map, this);
              map.panTo(loc);
          });

      map.mapTypes.set('map', styledMap);
      map.setMapTypeId('map');

      //lightbox for  gallery - run if resolution is
      if (width_page>500) {
        $("a[rel^='prettyPhoto']").prettyPhoto();
      }
      else {
        $('.gallery_wrap li a').click(function(e){
          e.preventDefault();
        });
      }

    }
    var tOut = false;
    var milSec = 500;
    $(window).resize(function(){
     if(tOut !== false)
        clearTimeout(tOut);
     tOut = setTimeout(rsizeItems, milSec);
    });


    var currentPosDisplay = $('input.datepicker, .select2-drop .select2-results .select2-result-label');
    currentPosDisplay.on("keypress keydown keyup", function(e) {
        e.stopPropagation();
    });

    //contact info
    $('#location .map_wrapper .info h2').click(function(){
      if ($(this).parent().hasClass("active")) {
          $(this).text("More info")
          $(this).parent().removeClass('active');
      }
      else {
          $(this).text("Less info")        
          $(this).parent().addClass('active');
      }
    });

    //transform img to background img of div.slide (more flexibility)
    $('.cycle-slideshow .slide').each(function(){
          var src = $(this).find('img').attr('src');
          $(this).css('backgroundImage', 'url('+ src +')');
          $(this).find('img').hide();
    });

    //show hidden text
    $('#services .container > ul a.read_more, #about .container > ul a.read_more').click(function(e){
      e.preventDefault();
      $(this).hide().next().fadeIn(800);
    });
    $('#services .container > ul a.show_less, #about .container > ul a.show_less').click(function(e){
      e.preventDefault();
      $(this).parent().fadeOut(300).prev().delay(300).fadeIn(800);
    });

    //datepicker
    $(".datepicker").attr("placeholder", "DD/MM/YYYY").datepicker();

    //scroll page
    var top_ofset = $('header').height() - 1;

    //scroll page on click header links
    $('header a, footer a').click(function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top - top_ofset
      }, 1000);
    });

    $('form.order a.btn').click(function(e){
      e.preventDefault();
      $(this).parent().hide();
      $(this).parent().parent().find('.hidden_elements').delay(200).slideDown(500);
      $(this).parent().parent().find('.first_inputs').addClass('wide');
      if (width_page<500) {
        $('html, body').animate({
          scrollTop: $('.hidden_elements').offset().top + 3*top_ofset
        }, 1000);        
      }
    });

    //contact form select option add placeholder text
    $(".select_white").select2({
      placeholder: "Select a subject"
    });

    $('header .select2-container').click(function(){
      $('#select2-drop').addClass('lang_drop');
    });

    //gallery slider
    $(".flexisel").flexisel({
        visibleItems: 4,
        animationSpeed: 100,
        autoPlay: false,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        clone: false,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint:500,
                visibleItems: 1
            },
            landscape: {
                changePoint:600,
                visibleItems: 2
            },
            tablet: {
                changePoint:800,
                visibleItems: 3
            }
        }
    });

    //run animation onView element
    $('#services .container >ul li, #about .container >ul li, .order').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
      if (isInView) {
        $(this).addClass('inview');
      }
      else {
        // $(this).removeClass('inview');
      }
    });




    //validate contact form
    $("form.order").validate({
        
        rules: {
          selectRoom: { 
            required: true
          },
          check_in: {
            required: true,
            dpDate: true 
          },
          check_out: {
            required: true,
            dpDate: true 
          },
          adults: { 
            required: true
          },
          children: { 
            required: false
          },
          email1: {
            required: true,
            email: true
          },
          name1: {
            required: true,
            minlength: 2
          }
        },
        messages: {
          selectRoom: { 
            required: "Please select a room!"
          },
          check_in: { 
            required: "Please select date!"
          },
          check_out: { 
            required: "Please select date!"
          },
          adults: { 
            required: "Required!"
          },
          children: { 
            required: "Required!"
          },
          name1: {
            required: "Please input your name",
            // required: "This field is required",
            minlength: jQuery.format("At least {0} characters required")
          },          
          email1: {
            required: "Please input your email address",
            // required: "This field is required",
            email: "Wrong e-mail address"
          }
        },
        errorClass: "error"
    });    


    //validate contact form
    $("form.contact-form").validate({
        rules: {
          name: {
            required: true,
            minlength: 2
          },
          message: {
            required: true,
            minlength: 2
          },
          comments: {
            required: true,
            minlength: 2
          },
          email: {
            required: true,
            email: true
          },
          subject: {
            required: false
          }
        },
        messages: {
          name: {
            required: "This field is required",
            minlength: jQuery.format("At least {0} characters required")
          },
          comments: {
            required: "This field is required",
            minlength: jQuery.format("At least {0} characters required")
          },
          email: {
            required: "This field is required",
            email: "Wrong e-mail address"
          }            
        },
        errorClass: "error"
    });    

});

