<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrie Bakery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="{{ url('assets/css/nivo-slider.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ url('assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


	<!-- jS -->
	<script src="{{ url('assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('assets/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
	<script src="{{ url('assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('assets/js/jquery.nicescroll.js')}}"></script>
	<script src="{{ url('assets/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{ url('assets/js/main.js')}}" type="text/javascript"></script>



</head>
<style>

    .partner-img {
        /* float: left; */
        width:  150px;
        height: 65px;
        object-fit: cover;
    }

    /* owl carousel*/
    .shadow-effect {
        background: #fff;
        padding: 20px;
        border-radius: 40px;
        text-align: center;
        border:1px solid #ECECEC;
        box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
    }
    #customers-testimonials .shadow-effect p {
        font-family: inherit;
        font-size: 17px;
        line-height: 1.5;
        margin: 0 0 17px 0;
        font-weight: 300;
    }
    .testimonial-name {
        margin: -17px auto 0;
        display: table;
        width: auto;
        background: green;
        padding: 9px 35px;
        border-radius: 120px;
        text-align: center;
        color: #fff;
        box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
    }
    #customers-testimonials .item {
		    text-align: center;
		    padding: 30px;
		    opacity: 1;
		    -webkit-transform: scale3d(0.8, 0.8, 1);
		    transform: scale3d(0.8, 0.8, 1);
		    -webkit-transition: all 0.3s ease-in-out;
		    -moz-transition: all 0.3s ease-in-out;
		    transition: all 0.3s ease-in-out;
		}
		/* #customers-testimonials .owl-item.active.center .item {
            opacity: 1;
		    -webkit-transform: scale3d(1.0, 1.0, 1);
		    transform: scale3d(1.0, 1.0, 1);
		} */
		.owl-carousel .img-circle {
            transform-style: preserve-3d;
		    /* max-width: 90px; */
            width:  90px;
        height: 100px;
        object-fit: cover;
        margin: 0 auto 17px;
    }
    #customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
    #customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
		    background: green;
		    transform: translate3d(0px, -50%, 0px) scale(0.7);
		}
        #customers-testimonials.owl-carousel .owl-dots{
            display: inline-block;
            width: 100%;
            text-align: center;
        }
        #customers-testimonials.owl-carousel .owl-dots .owl-dot{
            display: inline-block;
        }
		#customers-testimonials.owl-carousel .owl-dots .owl-dot span {
            background: green;
		    display: inline-block;
		    height: 20px;
		    margin: 0 2px 5px;
		    transform: translate3d(0px, -50%, 0px) scale(0.3);
		    transform-origin: 50% 50% 0;
		    transition: all 250ms ease-out 0s;
		    width: 20px;
		}

        .gambar {
            /* float: left; */
            width:  200px;
            height: 300px;
            object-fit: cover;
        }

        .carrie{
            width:  300px;
            height: 130px;
            object-fit: cover;
        }

        .tengah{
            text-align: center;
            color: black;

	}

    .footer-carrie{
        width:  130px;
        height: 50px;
        object-fit: cover;
    }

    </style>
<body>

@yield('content')

<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">

                                <img class="footer-carrie" src="{{ url('assets/images/produk/carriebakery.jpeg')}}" alt="">

						</a>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</p>
						<h4 class="connect-heading">CONNECT WITH US</h4>
						<ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<i class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	<!-- End Of /.social-icon -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block">
						<h4>GET IN TOUCH</h4>
						<p ><i class="fa fa-map-marker"></i> <span>Pakuan Hill </span>Livistona B 22, Bogor, Jawa Barat</p>
						<p> <i class="fa fa-phone"></i> <span>Phone:</span> (+62) 40 123 456 </p>

						<p> <i class="fa fa-mobile"></i> <span>Mobile:</span> (+62) 40 654 123 651</p>

						<p class="mail"><i class="fa fa-envelope"></i>Email: <span>info@sitename.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-4">
					<div class="block">
						<h4>OUR LOCATION </h4>
						<div class="media">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="600" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=pakuan%20hill%20cluster%20livistona&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                {{-- <a href="https://123movies-to.org">123 movies</a> --}}
                                <br>
                                <style>.mapouter{position:relative;text-align:right;height:200px;width:600px;}</style>
                                <a href="https://www.embedgooglemap.net">google maps widget html</a>
                                <style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:600px;}</style>
                                </div>
                                </div>
						</div>	<!-- End Of /.media -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->





<!-- FOOTER-BOTTOM Start
    ================================================== -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="cash-out pull-left">
                        <li>
                            <a href="#">
                                <img src="{{ url('assets/images/American-Express.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ url('assets/images/PayPal.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ url('assets/images/Maestro.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ url('assets/images/Visa.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ url('assets/images/Visa-Electron.png')}}" alt="">
                            </a>
                        </li>
                    </ul>
                    <p class="copyright-text pull-right">Carrie Bakery @2022 Designed by <a style="color: blue" href="https://startcode.id">StartCode</a> All Rights Reserved</p>
                </div>	<!-- End Of /.col-md-12 -->
            </div>	<!-- End Of /.row -->
        </div>	<!-- End Of /.container -->
    </div>	<!-- End Of /.footer-bottom -->
</footer> <!-- End Of Footer -->

<a id="back-top" href="#"></a>
</body>
</html>

