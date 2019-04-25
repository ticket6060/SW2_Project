<!DOCTYPE html>
<html lang="en">

<head>
    <title>About</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="images/logo.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="/">Home</a>

                            </li>

                            <li>
                                <a href="Concerts">Concerts</a>
                            </li>

                            <li>
                                <a href="Movies">Movies</a>
                            </li>

                            <li>
                                <a href="Theater">Theater</a>
                            </li>

                            <li class="active-menu">
                                <a href="about">About</a>
                            </li>

                            <li>
                                <a href="contact">Contact</a>
                            </li>                           
                            <li>
                                <a href="outlet">Outlet Locations</a>
                                <ul class="sub-menu">
                                    <li><a href="outlet">Haram</a></li>
                                    <li><a href="outlet">Fisal</a></li>
                                    <li><a href="outlet">6TH Of October</a></li>
                                    <li><a href="outlet">EL-maadi</a></li>
                                    <li><a href="outlet">Helwan</a></li>
                                    <li><a href="outlet">5th setetlment</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                    <div class="menu-desktop">
                     <ul class="main-menu"> 
                      <?php if(auth()->guard()->check()): ?>
                            <li><?php echo e(Auth::user()->name); ?></li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout<a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        </form>
                            </li>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>

                        <li><a href="login"> login</a></li>
                        <li><a href="register"> register </a></li>
                        <?php endif; ?>
                            </ul>
                    </div>
                    </div>
              </nav>
            </div>
        </div>
        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/download.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			About
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							About US
						</h3>

						<p class="stext-113 cl6 p-b-26">The company is aimed at supplying entertainment houses, venue owners, event organizers and planners, with an easy and feasible solution to sell and market their tickets/invitations. The services provided do not end there; 6060 also provides consultation and fraud protection as well as spectator entry monitoring and surveillance.
                        In today's world where technological breakthroughs dominate our lives, it has become important that entertainment houses and event venues adopt such technological innovations in running their businesses.
                        These technologies lead to quicker, more accurate and obviously easier ways for these entities to reach their audience and vice versa. 6060 sees it as a duty that they provide their clients the most convenient way to find their places in the events they want to attend. 6060 also helps clients find the suitable audience for their events, books the tickets for them, as well as delivers it to the spectators when needed.
						</p>

						<p class="stext-113 cl6 p-b-26">
							Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. 
						</p>

						<p class="stext-113 cl6 p-b-26">
							Any questions? Let us know in our stores ,check it from locations outlet , NY 6060 or call us on (+02) 01123786931
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/logo.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="Concerts.html" class="stext-107 cl7 hov-cl1 trans-04">
								Concerts
							</a>
                        </li>

                        <li class="p-b-10">
                            <a href="Movies.html" class="stext-107 cl7 hov-cl1 trans-04">
								Movies
							</a>
                        </li>

                        <li class="p-b-10">
                            <a href="Theater.html" class="stext-107 cl7 hov-cl1 trans-04">
								Theater
							</a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="outlet.html" class="stext-107 cl7 hov-cl1 trans-04">
								Outlets
							</a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know in our stores ,check it from locations outlet , NY 6060 or call us on (+02) 01123786931
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
</body>
</html>
<?php /* C:\Users\Asmaa\project6060\project6060\resources\views/about.blade.php */ ?>