<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">


    @section('head-style')
    @show

    <style>
</style>
    
</head>
<body>

    @include('layout.partials.navbar')

    <!-- Content -->
    <div class="container">
        @yield('content')
    </div>

    <div class="footer pb-0 mb-0 justify-content-center text-light ">
        <footer>
            <div class="row my-5 justify-content-center py-5">
                <div class="col-11">
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-12   my-auto mx-auto a"><h3 class="text-muted mb-md-0 mb-5 bold-text">Pepper.</h3></div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12"><h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6><ul class="list-unstyled"><li>Home</li><li>About</li><li>Blog</li><li>Portfolio</li></ul></div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12"><h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6><p class="mb-1">605, RATAN ICON BUILDING</p><p>SEAWOODS SECTOR</p> </div>
                    </div>
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-auto  my-md-0 mt-5 order-sm-1 order-3 align-self-end"><p class="social text-muted mb-0 pb-0 bold-text"> <span  class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span> Pepper All Rights Reserved.</small></div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end "><h6 class="mt-55 mt-2 text-muted bold-text"><b>ANIRUDH SINGLA</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> anirudh@gmail.com</small></div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3   "><h6 class="text-muted bold-text"><b>RISHABH SHEKHAR</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> rishab@gmail.com</small></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        (function($) {

            "use strict";

                $('nav .dropdown').hover(function(){
                    var $this = $(this);
                    $this.addClass('show');
                    $this.find('> a').attr('aria-expanded', true);
                    $this.find('.dropdown-menu').addClass('show');
                }, function(){
                    var $this = $(this);
                        $this.removeClass('show');
                        $this.find('> a').attr('aria-expanded', false);
                        $this.find('.dropdown-menu').removeClass('show');
                });

        })(jQuery);
    </script>

	<script>
			(function($) {

			"use strict";

			var fullHeight = function() {

				$('.js-fullheight').css('height', $(window).height());
				$(window).resize(function(){
					$('.js-fullheight').css('height', $(window).height());
				});

			};
			fullHeight();

			var carousel = function() {
				$('.featured-carousel').owlCarousel({
				loop:true,
				autoplay: true,
				margin:30,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				dots: true,
				autoplayHoverPause: false,
				items: 1,
				responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
				}
				});

			};
			carousel();

			})(jQuery);
	</script>


 <!-- Footer JS -->
    @section('footer-js')
        <!-- Default scripts -->
    @show
</body>
</html>
