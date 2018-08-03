
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Gym Trainer a Sports Category Bootstrap Responsive Website Template | Home :: gylayouts</title>
  <!-- custom-theme -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- //custom-theme -->
<title>{{ config('app.customerpaneltitle') }}</title>



        <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{url('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
      

  <!-- Owl-carousel-CSS -->
  
  <!-- Testimonials-slider-css-files -->
  <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}" type="text/css" media="all">

  <link href="{{url('frontend/css/owl.theme.default.css')}}" rel="stylesheet">
  <!-- //Testimonials-slider-css-files -->
  <!--Main Menu-->
    <link href="{{url('frontend/css/stellarnav.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{url('frontend/css/jquery-ui.css')}}">
  <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{url('frontend/css/responsive.css')}}" rel="stylesheet" type="text/css" media="all" />
  <!-- font-awesome-icons -->
  <link href=" {{url('frontend/css/font-awesome.css')}}" rel="stylesheet">
  <!-- //font-awesome-icons -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

<body>
  <header>
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">

              <div class="all-links">
                              Welcom {{Auth::user()->name}}
                            <ul>
                                 <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
         
                            </ul>
                          
                
                <!-- <div class="reg-area">
                  <a class="srch-icon"> <i class="fa fa-search"></i><i class="fa fa-times"></i></a>
                  <div class="srch-box">
                    <input type="text" placeholder="search">
                    <input type="button" value="Search">
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="myHeader" class="heder-bottom">
              @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="logo text-left">
                <a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}">
                                <ul> 
                            </a>
              </div>
            </div>
                  
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div id="main-nav" class="stellarnav">
                <ul>

                <li class="{{ Request::segment(2) === 'bbl' ? 'active' : null }}">
                        <a href="{{url('customer/bbl')}}">Home</a>
                      </li>

                      <li class="{{ Request::segment(2) === 'about-us' ? 'active' : null }}">
                        <a href="{{url('customer/about-us')}}">About Us</a>
                      </li>
               <li class="{{ Request::segment(2) === 'pricing' ? 'active' : null }}">
                        <a href="{{url('customer/pricing')}}">Pricing</a>
                      </li>
                     <li class="{{ Request::segment(2) === 'services' ? 'active' : null }}">
                        <a href="{{url('customer/services')}}">Services</a>
                      </li>
                    <li class="{{ Request::segment(2) === 'exercise' ? 'active' : null }}">
                        <a href="{{url('customer/exercise')}}">Exercise</a>
                      </li>

  <li class="{{ Request::segment(2) === 'contact-us' ? 'active' : null }}">
                        <a href="{{url('customer/contact-us')}}">Contact Us</a>
                      </li>

 <li class="{{ Request::segment(2) === 'testimonial' ? 'active' : null }}">
                        <a href="{{url('customer/testimonial')}}">Testimonial</a>
                      </li>

                      <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}">
                        <a href="{{url('customer/profile')}}/{{Auth::user()->id}}">My Profile</a>
                      </li>

                </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
    </header>




  <div class="inner-padding">
    <div class="container">
      <div class="hstry-box">
      <ul class="tabs">
        <li class="active bb" rel="tab5"><i class="fa fa-check"></i> Booking Form</li>
        
      </ul>
      <div class="tab_container">
          <!-- #tab1 -->
           @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
          <h3 class="d_active tab_drawer_heading" rel="tab5">Tab 5</h3>
          <div id="tab5" class="tab_content">
            <div class="form-box">
                
                <h4 class="ed-p">Booking Form</h4>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">

                  <form action="{{route('customer.slotinsert')}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="slotform">


                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <input type="hidden" name="idd" id="id" value="{{$purchases_id}}">

                  <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label>Trainer Name<small>*</small></label>
                              <select class="form-control" name="id">
                                <option value=""> Please select a name</option>
                                 @foreach($data as $mydata)
                                <option value="{{$mydata->id}}"> {{$mydata->name}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                          <label>Date:<small>*</small></label><input type="text" id="datepicker" name="date" class="form-control">



                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group" >
                              <label>Time <small>*</small></label>
                              <select class="form-control" name="time">
                                <option value="">Time</option>
                                <option value="13:00">1 p.m</option>
                                <option value="14:00">2 p.m</option>
                                <option value="15:00">3 p.m</option>
                                <option value="17:00">5 p.m</option>
                                <option value="18:00">6 p.m</option>
                              </select>
                            </div>
                        </div>


                       
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <input name="form_botcheck" class="form-control" value="" type="hidden">
                          <button type="submit" name="submit" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Please wait...">Save</button>
                        </div>
                </div>
              </form>
            </div>
                </div>
              </div>
          </div>

        
      </div>
      </div>
      <!-- .tab_container -->
    </div>
  </div>
 


<div class="footer">
    <div class="f-bg-gyl">
        <div class="col-md-3 gylayouts_footer_grid">
          <h2>Subscribe <span>Newsletter</span></h2>
          <p>By subscribing to our mailing list you will always get latest news from us.</p>
          <form action="#" method="post">
            <input type="email" name="Email" placeholder="Enter your email..." required="">
            <button class="btn1"><i class="fa fa-envelope" aria-hidden="true"></i></button>
            <div class="clearfix"> </div>
          </form>
          
        
        </div>
        <div class="col-md-4 gylayouts_footer_grid">
          <h3>Recent <span>Works</span></h3>
           <ul class="con_inner_text midimg">
            <li><a href="#"><img src="{{asset('frontend/images/banner22.jpg')}}" alt="" class="img-responsive" /></a></li>
              <li><a href="#"><img src="{{asset('frontend/images/banner33.jpg')}}" alt="" class="img-responsive" /></a></li>
            <li><a href="#"><img src="{{asset('frontend/images/banner44.jpg')}}" alt="" class="img-responsive" /></a></li>
            <li><a href="#"><img src="{{asset('frontend/images/banner11.jpg')}}" alt="" class="img-responsive" /></a></li>
            <li><a href="#"><img src="{{asset('frontend/images/banner22.jpg')}}" alt="" class="img-responsive" /></a></li>
              <li><a href="#"><img src="{{asset('frontend/images/banner33.jpg')}}" alt="" class="img-responsive" /></a></li>
             <li><a href="#"><img src="{{asset('frontend/images/banner11.jpg')}}" alt="" class="img-responsive" /></a></li>
            <li><a href="#"><img src="{{asset('frontend/images/banner44.jpg')}}" alt="" class="img-responsive" /></a></li>
             </ul>
          
        </div>
        <div class="col-md-2 gylayouts_footer_grid">
          <h3>Our <span>Links</span> </h3>
            <ul class="links">
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{route('about')}}">About</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Mail Us</a></li>
            </ul>
        </div>
        <div class="col-md-3 gylayouts_footer_grid">
          <h2>Contact <span>Us</span></h2>
              <ul class="con_inner_text">
              <li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, <label> New York City.</label></li>
              <li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
              <li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
            </ul>

          <ul class="social_agileinfo">
            <li><a href="#" class="gy_facebook"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="#" class="gy_twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gy_instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" class="gy_google"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>


        <div class="clearfix"> </div>
          
      </div>
      <p class="copyright">© 2018 Body By Lekan. All Rights Reserved |Powered by <a href="http://softcliquesoftware.in/" target="_blank">Softclique Software Services LLP</a></p>
      <!--scroll to top button-->
        <a id="back2Top" title="Back to top" href="#"><i class="fa fa-hand-o-up"></i></a>

  </div>
  <!-- //footer -->





















<!-- js -->
  <script type="text/javascript" src="{{url('frontend/js/jquery-2.1.4.min.js')}}"></script>
  <!-- //js -->
<script src="{{asset('backend/assets/js/jquery.validate.min.js')}}"></script>
  <!-- Slider script -->
  <script src="{{url('frontend/js/responsiveslides.min.js')}}"></script>

 <script src="{{url('frontend/js/jquery-ui.js')}}"></script>
 
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        manualControls: '#slider3-pager',
      });
    });
  </script>

  <script>

  $(function () {
    $( "#datepicker" ).datepicker({
  dateFormat: "yy-mm-dd"
});
  } );

  </script>
  <script type="text/javascript" src="{{url('frontend/js/bootstrap-3.1.1.min.js')}}"></script>

  <!-- for testimonials slider-js-file-->
      <script src="{{url('frontend/js/owl.carousel.js')}}"></script>

  <script>
    $(document).ready(function() { 
    $('#price-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
      items: 3,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    }); 
</script>


<script>
$(document).ready(function() { 
    $('#team-slider').owlCarousel({
        loop:true,
      autoplay: true,
        margin:30,
        nav:true,
      items: 4,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
});
  </script>
<!-- for testimonials slider-js-script-->
<!-- stats -->
  <script src="{{url('frontend/js/jquery.waypoints.min.js')}}"></script>


  <script src="{{url('frontend/js/jquery.countup.js')}}"></script>

  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats -->
  <script src="{{url('frontend/js/stellarnav.min.js')}}"></script>
  

  <script>
    $(document).ready(function(){
      jQuery('#main-nav').stellarNav();
    });  
  </script>
  <script>
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
    }
  </script>
  
  <script>
      /*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
    </script>
<script>
    $(document).ready(function(){
      $(".fa-search").click(function(){
            $(".fa-search").hide();
            $(".fa-times").show();
            $(".srch-box").show();
        });

        $(".fa-times").click(function(){
          $(".fa-times").hide();
          $(".fa-search").show();
          $(".srch-box").hide();
        });
    });  
  </script>


  <script src="{{url('frontend/js/accotab.js')}}"></script>
    <script>
     $(document).ready(function(){
    $(".cm-cls").click(function(){
    $(".login-wrapper").fadeToggle("slow", "linear");
        $(".login-wrapper").hide("slow", "linear");
    $(".reg-wrapper").fadeToggle("slow", "linear");
     $(".reg-wrapper").show("slow", "linear");
    
    });
    $(".cmr-cls").click(function(){
    $(".reg-wrapper").fadeToggle("slow", "linear");
        $(".reg-wrapper").hide("slow", "linear");
    $(".login-wrapper").fadeToggle("slow", "linear");
     $(".login-wrapper").show("slow", "linear");
    
    }); 
     });
  </script>
    <script src="{{url('frontend/js/accotab.js')}}"></script>




<script>
    $(document).ready(function(){  
$('#slotform').validate({  
  /// rules of error 
  rules: {
    "date": {
    required: true
    },

"id": {
    required: true
    },
"time":
    {
    required: true
    }

  },

  messages: {
    "date":{
    required: 'Please enter date'
  },
"id":{
    required: 'Please select trainer name'
  },
"time":{
    required: 'Please select time'
  }



  }
  });

    });  
  </script>






  <!--Fontawesome script-->
  <!--<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>-->
</body>

</html>













