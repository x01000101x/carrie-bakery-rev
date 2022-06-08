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
		    /* border-radius: 40px; */
		    text-align: center;
	/* border:1px solid #ECECEC; */
		    /* box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02); */
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
		        	<li class="active"><a href="#">HOME</a></li>
					<li><a href="{{ url('shop'); }}">SHOP</a></li>
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


	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
				    	<img src="{{ url('assets/images/slider.jpg')}}" alt="" />
				    	<img src="{{ url('assets/images/slider1.jpg')}}" alt=""/>
				    	<img src="{{ url('assets/images/slider2.jpg')}}" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->



	<!-- FEATURES Start
    ================================================== -->

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fa fa-map" aria-hidden="true"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Alamat</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
								<i class="fa fa-foursquare"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Social Media</h4>
						    	<p>Instagram : carrie_bakery_official Facebook: carrie_bakery_official <br> TikTok : maylindebora</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class=" fa fa-phone"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Call Us</h4>
						    	<p>WA : +62 813-8509-9236 <br>Telp : (02511) 7561766<br></p>
						  </div>	<!-- End of /.media-body -->
						</div>	<!-- End of /.media -->
					</div>	<!-- End of /.block -->
				</div> <!-- End of /.col-md-4 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->


		<!-- TENTANG KAMI Start
    ================================================== -->

	<section id="tentang-kami">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>TENTANG KAMI</h2>
						</div>
						<div class="row" style="display: grid;
						place-items: center">
						  	<div class="col-sm-2 col-md-7">
								  <div class="tengah">
									  <h1>Hello World</h1>
									  <p>Kami adalah produsen roti sehat dan kaya serat yang berfokus pada aneka roti wortel dan gandum yang berlokasi di daerah Bogor, Jawa Barat, Indonesia. Kami juga menyediakan camilan aman bagi keluarga yang berfokus pada <i>Indonesian traditional culinary</i></p>
										</div>
										</div>	<!-- End of /.col-sm-6 col-md-4 -->
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

	<!-- BEST SELLER Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>BEST SELLER</h2>
						</div>
						<div class="row">
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
										<img class="gambar" src="{{ url('assets/images/produk/roti-tawar-bpu.jpeg')}}" alt="...">
										<h3>Roti Wortel</h3>
									</a>
							      	<div class="caption">
							        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
							        	<p>
							        		<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
							        			<span>Beli </span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
                                        <img class="gambar" src="{{ url('assets/images/produk/kepang-bou.jpg')}}" alt="...">
										<h3>Roti Kepang</h3>
									</a>
							      	<div class="caption">
							        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
							        	<p>
							        		<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
							        			<span>Beli</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
                                        <img class="gambar" src="{{ url('assets/images/produk/roti-imut-bou.jpeg')}}" alt="...">
										<h3>Roti Imoet</h3>
									</a>
							      	<div class="caption">
								        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
								        <p>
								        	<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
								        		<span>Beli</span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


    <!-- MAIN GAME Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12" >
					<div class="block" >
						<div class="block-heading">
							<h2>Order menu sesuai selera kamu</h2>
						</div>
						<div class="row" style="display: grid;
						place-items: center">

						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="blog-single.html">
                                        <img class="gambar" src="https://cdn.substack.com/image/fetch/f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fbucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com%2Fpublic%2Fimages%2F0466831d-680e-43e3-9e8b-dd0799bcc1e6_400x400.jpeg" alt="...">

                                            <li>

                                                <ul>
                                                    <h3>
                                                    Pilih Rotinya <img style="width: 50px; height: 50px" src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/check-mark_2714-fe0f.png" alt="">

                                                </h3>
                                            </ul>
                                            <ul>
                                                <h3>
                                                    Pilih Rasa Atau Topingnya <img style="width: 50px; height: 50px" src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/check-mark_2714-fe0f.png" alt="">

                                                </h3>
                                            </ul>
                                            <ul>
                                                <h3>
                                                    Submit ke Mr.Chef <img style="width: 50px; height: 50px" src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/check-mark_2714-fe0f.png" alt="">

                                                </h3>
                                            </ul>
                                        </li>

                                        </a>
							      	<div class="caption">
							        	<p>Di Carrie Bakery kamu bisa menjadi diri kamu sendiri dengan memillih jenis roti, rasa, waktu terima yang kamu mau.</p>
							        	<p>
							        		<a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
							        			<span>Order sekarang</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->

						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->





		<!-- PRODUCTS Start
    ================================================== -->

	{{-- <section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>NEW PRODUCTS</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="{{ url('assets/images/product-image.jpg')}}" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="{{ url('assets/images/product-image-2.jpg')}}" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="{{ url('assets/images/product-image-3.jpg')}}" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="{{ url('assets/images/product-image-4.jpg')}}" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="{{ url('assets/images/product-image-5.jpg')}}" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="{{ url('assets/images/product-image-6.jpg')}}" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="{{ url('assets/images/product-image-7.jpg')}}" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="{{ url('assets/images/product-image-8.jpg')}}" alt="">
						</a>
						<a href="single-product.html">
							<h4>Amazing Italian Sauces</h4>
						</a>
						<p class="price">From: £69.99</p>
						<div >
							<a class="view-link shutter" href="#">
							<i class="fa fa-plus-circle"></i>Add To Cart</a>
						</div>
					</div>	<!-- End of /.products -->
				</div> <!-- End Of /.Col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section --> --}}



		<!-- KATA ORANG
    ================================================== -->

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Komen CB Lovers</h2>
						</div>
					</div>	<!-- End of /.block -->
				<!-- TESTIMONIALS -->
<section class="testimonials">
	<div class="container">

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="{{ url('assets/images/partner/leonardimage.jpg')}}" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">Firewall <br> Bogor, 24 Mar 2022</div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="{{ url('assets/images/partner/prili.jpg')}}" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">Prili Ratuconsignment</div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="{{ url('assets/images/partner/jokowi-roti.jpg')}}" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">Pakde</div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">IAN OWEN</div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            {{-- <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">MICHAEL TEDDY</div>
            </div>
            <!--TESTIMONIAL 5 -->
            <div class="item">
                <div class="shadow-effect">
                  <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                  <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                </div>
                <div class="testimonial-name">MICHAEL TEDDY</div>
              </div> --}}
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
	</section>	<!-- End of Section -->


		<!-- CALL TO ACTION Start
    ================================================== -->

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Our Partners</h2>
						</div>
					</div>	<!-- End of /.block -->
					<div id="owl-example" class="owl-carousel">
						<div> <img class="partner-img" src="{{ url('assets/images/partner/paxel.png')}}" alt=""></div>
						<div> <img class="partner-img" src="{{ url('assets/images/partner/logo-grabfood.png')}}" alt=""></div>
						<div> <img class="partner-img" src="{{ url('assets/images/partner/Gofood-logo.png')}}" alt=""></div>
                        <div> <img class="partner-img" src="{{ url('assets/images/company-4.png')}}" alt=""></div>
						<div> <img class="partner-img" src="{{ url('assets/images/company-5.png')}}" alt=""></div>
						<div> <img class="partner-img" src="{{ url('assets/images/company-6.png')}}" alt=""></div>
						<div> <img class="partner-img" src="{{ url('assets/images/company-8.png')}}" alt=""></div>
						<div> <img class="partner-img" src="{{ url('assets/images/company-9.png')}}" alt=""></div>
					</div>	<!-- End of /.Owl-Slider -->
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
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
						<p> <i class="fa fa-phone"></i> <span>Phone:</span> 0251-756-1766  </p>

						<p> <i class="fa fa-mobile"></i> <span>Mobile:</span> (+62) 813-8509-9236 </p>

						<p class="mail"><i class="fa fa-envelope"></i>Email: <span>produsenrotiwortel@gmail.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-4">
					<div class="block">
						<h4>OUR LOCATION </h4>
						<div class="media">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="600" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=carrie%20bakery&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
						<p class="copyright-text pull-right">Carrie Bakery @2022 by <a style="color: blue" href="https://startcode.id">StartCode</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->
				</div>	<!-- End Of /.row -->
			</div>	<!-- End Of /.container -->
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->

	<a id="back-top" href="#"></a>
</body>
</html>


<script>
    jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});
</script>
