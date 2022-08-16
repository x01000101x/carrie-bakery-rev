<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrie Bakery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- sugastart -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <style>
        .mt-10 {
            margin-top: 10rem !important;
        }

        .proxbon {
            height: 80vh;
        }
    </style>
	<!-- sugaend -->

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="{{ url('assets/css/nivo-slider.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ url('assets/css/owl.carousel.css')}}">
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
            width:  300px;
            height: 250px;
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

</head>
<body>

<!-- TOP HEADER Start
    ================================================== -->

	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>POWERED BY <strong>StartCode</strong></p>
				</div>

			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->


	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Carrie Bakery</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="#" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<h4>Enter your e-mail address to create an account.</h4>
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="E-mail address"  type="text" id="email_create" name="email_create" value="" class="account_input">
					                    </span>
									</p>
									<p class="submit">
										<button class="btn btn-primary">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
			      		<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>
	</section>  <!-- End of /Section -->



	<!-- LOGO Start
    ================================================== -->

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img class="carrie" src="{{ url('assets/images/produk/carriebakery.jpeg')}}" alt="logo">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->




	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li><a href="{{ url('/'); }}">HOME</a></li>
					<li class="active"><a href="{{ url('shop'); }}">SHOP</a></li>
					{{-- <li><a href="blog.html">BLOG</a></li>
					<li><a href="blog-single.html">ARTICLE</a></li>
					<li class="dropdown">
						<a href="#">
							PAGES
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						   <li><a  href="#">Action</a></li>
						    <li><a  href="#">Another action</a></li>
						    <li><a  href="#">Something else here</a></li>
						    <li><a  href="#">Separated link</a></li>
						</ul> --}}
					</li> <!-- End of /.dropdown -->


		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->



	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Shop</h1>
					<p>A Bunch Of Products</p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="#">Home</a></li>
					  	<li class="active">Shop</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->



	<!-- PRODUCTS Start
    ================================================== -->

	<section id="shop">
        @include('nine_hendeler/ninebread')
	</section>	<!-- End of Section -->











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
								<a class="plus-icon" href="#">
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
	<!-- sugastart -->
	    <!-- foot -->

		<script>
        var nika = screen.availWidth
        if (nika >= 700) {
            document.getElementById('lwp').classList.toggle("owl-carousel2");
            document.getElementById('lwp').classList.toggle("owl-carousel");
            document.getElementById('hititemlist').classList.toggle("owl-carousel");
            document.getElementById('fastoping').classList.toggle("mt-10");
            document.getElementById('rotina').classList.toggle("proxbon");
        }
        var selainame=[];
        var selaiimg=[];
        function selt(id) {
            if (selainame.length<6) {
                selainame.push(document.getElementById(id + 'value').value)
                selaiimg.push(document.getElementById(id + 'img').src);
            }
            console.log(selainame,selaiimg,selainame.length,selaiimg.length);
            claw()
			roso()
        }
        function hitall() {
            var rasa = []
            var hititem = selainame
            for (let i = 0; i < hititem.length; i++) {
                rasa[i] = hititem[i];
            }
        }
		function roso() {
            kom_rasa = JSON.stringify(selainame);
            document.getElementById('kombinasi_rasa').value = kom_rasa;

            kom_toping = JSON.stringify(toping);
			// alert(toping)
            document.getElementById('kombinasi_toping').value = kom_toping;

        }
        function pwt(id) {
            selaiimg.splice(id, 1);
            selainame.splice(id, 1);
            claw();
        }
        function claw() {
            var clawimg = ''
            var hititem = selaiimg;
            for (let i = 0; i < hititem.length; i++) {
                clawimg += `
                <div class="col-4 mb-4 mt-4">
                    <button type="button" class="btn-close" onclick="pwt(${i})"></button>
                    <img src="${hititem[i]}" class="img-fluid rounded" height="100px">
                </div>
                `
            }
            document.getElementById('itemshow').innerHTML = clawimg;
        }
        var toping = 'none'
        function topingpass(id) {
            toping = document.getElementById(id + 'value').value
            var topingimg = document.getElementById(id + 'img').src
            document.getElementById('fastoping').src = topingimg
			roso()
        }
		// Keranjang
		var sessionkaranjang=sessionStorage.getItem("karanjang");
        var karan=[]
        if (sessionkaranjang!=null) {
            karan=JSON.parse(sessionkaranjang)
        }
        function pastin() {
            var kmb_r='Sobek'
            var kmb_s=document.getElementById('kombinasi_rasa').value
            kmb_s=JSON.parse(kmb_s)
            var kmb_t=document.getElementById('kombinasi_toping').value
            kmb_t=JSON.parse(kmb_t)
            var tmb=[
                '3',"Roti Sobek","Sobek",kmb_s,kmb_t,'10',"http://localhost:8000/storage/produks/June2022/KesMOLi9akLQRNuJ3Igs.jpeg"
            ]
            if (kmb_s.length<6) {
                alert('pilihlah 6 Kombinasi Selai dan 1 Kombinasi Toping')
            }else{
                karan.push(tmb)
                sessionStorage.setItem('karanjang',JSON.stringify(karan))
                location.replace('{{url('/shop')}}');
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            navigationText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
        $('.owl-carousel2').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
	<!-- sugaend -->
</body>
</html>
