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
					<h1>ORDER</h1>
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
		<div class="container">
			<div class="row">
				<div class="col-md-9">

					 <div class="products-heading">
						<h2>ORDER</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">



    @foreach ($produks as $produk)
    <img id="thumb" name="thumb" style="width: 200px; height:200px; display:block; margin: 0 auto; border: black 5px solid" value="{{$produk->produk_gambar}}" src=" {{ Voyager::image($produk->produk_gambar); }}" alt="">
                            <h1 style="text-align: center">{{ $produk->produk_nama }}</h1>
                            <div class="form-group">
                                <input type="text" name="gambar" value="{{ $produk->produk_gambar }}" hidden>
                            </div>

                            <div class="form-group">
                                <label for="produk_nama">Nama Produk</label>
                                <input type="text" name="produk_nama" class="form-control" id="produk_nama" value="{{ $produk->produk_nama }}" disabled>
                                <input type="hidden" name="produk_id" class="form-control" id="produk_id"  value="{{ $produk->id }}">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>
                            @endforeach

                            <div class="form-group">
                                <label for="roti">Roti</label>
                                <select class="form-control fong" id="roti" name="roti" required>
                                    <option selected>Pilih roti</option>
                                    @foreach ($rotis as $roti)
                                    @if ($roti->roti_nama == "Tidak ada")
                                    <option hidden value="{{ $roti->roti_nama }}">{{ $roti->roti_nama }}</option>
                                    @else
                                    <option value="{{ $roti->roti_nama }}">{{ $roti->roti_nama }}</option>
                                    @endif
                                    @endforeach


                                </select>
                            </div>
                        <div class="form-group">
                            <label for="selai">Selai</label>
                            <select class="form-control fong" id="selai" name="selai" required>
                                  <option selected disabled hidden>Pilih selai</option>
                                  @foreach ($selais as $selai)
                                  @if ($selai->selai_nama == "Tidak ada")
                                  <option hidden id="selai_id" value="{{ $selai->selai_nama }}">{{ $selai->selai_nama }}</option>
                                  @else
                                  <option id="selai_id" value="{{ $selai->selai_nama }}">{{ $selai->selai_nama }}</option>
                                  @endif
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="toping">Toping</label>
                                <select class="form-control fong" id="toping" name="toping" required>
                                    <option selected>Pilih toping</option>
                                    <option>Tidak ada</option>
                                    @foreach ($topings as $toping)

                                    <option id="toping_id" value="{{ $toping->toping_nama }}">{{ $toping->toping_nama }}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" name="jumlah" min="1" class="form-control fong" id="jumlah" aria-describedby="jumlah" required>
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>

                            <p id="demo"></p>

                            <button onclick="pastin()" class="btn btn-success">Masukkan ke keranjang</button>
                            <a href="/shop" class="btn btn-danger">Batal</a>


                            <br><br>
                            {{-- <ul>
                              <li>
                                  <div class="products">
                                      <a href="#">
										<img class="gambar" src="{{  url('assets/images/produk/kepang-bou.jpg')}}" alt="">
									</a>
									<a href="#">
                                        <h4>Roti Kepang</h4>
									</a>
									<p class="price">Rp. 20,000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Beli</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img class="gambar" src="{{  url('assets/images/produk/roti-tawar-bpu.jpeg')}}" alt="">
									</a>
									<a href="#">
										<h4>Roti Tawar</h4>
									</a>
									<p class="price">Rp. 20,000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Beli</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img class="gambar" src="{{  url('assets/images/produk/roti-imut-bou.jpeg')}}" alt="">
									</a>
									<a href="#">
										<h4>Roti Imut</h4>
									</a>
									<p class="price">Rp. 20,000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Beli</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="{{  url('assets/images/product-image-8.jpg')}}" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Add To Cart</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="{{  url('assets/images/product-image-8.jpg')}}" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Add To Cart</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					           <div class="products">
									<a href="#">
										<img src="{{  url('assets/images/product-image-8.jpg')}}" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Add To Cart</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <!--  ... -->
					    </ul> --}}
					</div>	<!-- End of /.products-grid -->

					<!-- Pagination -->

					{{-- <div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	<li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li>
						  	<li><a href="#">»</a></li>
						</ul>	<!-- End of /.pagination -->
					</div>
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Catagories</h4>
							<div class="list-group">
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Italian Foods
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Traditional Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Indian Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Spanish Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Thai FoodN
								</a>
							</div>
						</div>
						<div class="block">
							<img src="{{  url('assets/images/food-ad.png')}}" alt="">
						</div>
						<div class="block">
							<h4>Latest Food Items</h4>
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="{{  url('assets/images/post-img.png')}}" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">Lamb leg roast
							      		<p>Lorem ipsum dolor sit amet.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="{{  url('assets/images/post-img-2.png')}}" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading"> Lamingtons
							      		<p>Lorem ipsum dolor.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="{{  url('assets/images/post-img-3.png')}}" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      		Anzac Salad
							      		<p>Lorem ipsum dolor sit.</p>

							      		</a>
							    	</div>
							  	</li>
							  </ul>
						</div> --}}

						{{-- <div class="block">
							<h4>Food Tag</h4>
							<div class="tag-link">
								<a href="">BALLET</a>
								<a href="">CHRISTMAS</a>
								<a href="">ELEGANCE</a>
								<a href="">ELEGANT</a>
								<a href="">SHOPPING</a>
								<a href="">SHOP</a>
							</div>
						</div> --}}
				</div>	<!-- End of /.col-md-3 -->

			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
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
							<li
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

<script>
//     const inputs = document.querySelectorAll('.fong ');

// for (const input of inputs) {
//   input.setAttribute('required', '');
// }
</script>

<script>

    function myFunction() {
    document.getElementById("jumlah").required = true;
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("nama_pengirim");
  //Get the output from label
  var label = document.getElementById("label_pengirim");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
    label.style.display = "block";

  } else {
    text.style.display = "none";
    label.style.display = "none";

  }
}
</script>

<script>
    var sessionkaranjang = sessionStorage.getItem("karanjang");
    var idk = []
   if (sessionkaranjang != null) {
       idk = JSON.parse(sessionkaranjang)
    }
    //         if($("#selai").checkValidity()) {
    //  document.getElementById('selai').submit();
    // }

    function pastin() {
        var a = document.getElementById("jumlah").value;
        var b = document.getElementById("selai").value;
        var c = document.getElementById("toping").value;
        var d = document.getElementById("roti").value;
        var e = document.getElementById("thumb").src;


        if(!a || b == "Pilih selai" || c == "Pilih toping" || d == "Pilih roti"){
            alert("Please Fill All Required Fields");
      return false;

        }else{

            //    document.getElementById("jumlah").required = true;
            //    document.getElementById("selai").required = true;
            //    document.getElementById("toping").required = true;
    //    document.getElementById("roti").required = true;

    var produk_id = document.getElementById('produk_id').value
    var produk_nama = document.getElementById('produk_nama').value
    var roti = document.getElementById('roti').value
    var selai = document.getElementById('selai').value
    var toping = document.getElementById('toping').value
    var jumlah = document.getElementById('jumlah').value
    var thumb = document.getElementById('thumb').src



    var tmb = [
        produk_id,
           produk_nama, roti, selai, toping, jumlah, thumb
       ]
       console.log(tmb);
       idk.push(tmb)
       sessionStorage.setItem('karanjang', JSON.stringify(idk))
       location.replace("{{url('/shop')}}");
    }
}

</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
