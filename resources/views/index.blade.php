
@extends('layouts.default');

@section('content')
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">

<style>
    .carousel-item .img-fluid {
  width:100%;
  height:50%;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}
.posisi{
    display: flex;
    justify-content: center;
    align-items: center;"
}
</style>

<div class="starter-template">
    <br>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <picture>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <source srcset="https://cdn0-production-images-kly.akamaized.net/J4GXMv6D_qObmilkwpb1c2mBNqo=/0x0:1000x563/1200x675/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3653759/original/046108000_1638766318-shutterstock_1959431266.jpg" media="(min-width: 1400px)">
                            <source srcset="https://cdn0-production-images-kly.akamaized.net/J4GXMv6D_qObmilkwpb1c2mBNqo=/0x0:1000x563/1200x675/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3653759/original/046108000_1638766318-shutterstock_1959431266.jpg" media="(min-width: 768px)">
                            <source srcset="https://cdn0-production-images-kly.akamaized.net/J4GXMv6D_qObmilkwpb1c2mBNqo=/0x0:1000x563/1200x675/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3653759/original/046108000_1638766318-shutterstock_1959431266.jpg" media="(min-width: 576px)">
                            <img srcset="https://cdn0-production-images-kly.akamaized.net/J4GXMv6D_qObmilkwpb1c2mBNqo=/0x0:1000x563/1200x675/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3653759/original/046108000_1638766318-shutterstock_1959431266.jpg" alt="responsive image" class="d-block img-fluid">
                        {{-- <img src="" class="d-block w-100" alt="..."> --}}
                      </div>
                      <div class="carousel-item">
                        <source srcset="https://ik.imagekit.io/10tn5i0v1n/article/60b779ce9bfcd700016b93b1.jpg" media="(min-width: 1400px)">
                            <source srcset="https://ik.imagekit.io/10tn5i0v1n/article/60b779ce9bfcd700016b93b1.jpg" media="(min-width: 768px)">
                            <source srcset="https://ik.imagekit.io/10tn5i0v1n/article/60b779ce9bfcd700016b93b1.jpg" media="(min-width: 576px)">
                            <img srcset="https://ik.imagekit.io/10tn5i0v1n/article/60b779ce9bfcd700016b93b1.jpg" alt="responsive image" class="d-block img-fluid">
                        {{-- <img src="https://bacalagers.com/wp-content/uploads/2021/03/blue-sea-sunset-UXoQ2Z.jpeg" class="d-block w-100" alt="..."> --}}
                      </div>
                      <div class="carousel-item">
                        <source srcset="https://www.masakapahariini.com/wp-content/uploads/2020/10/roti-manis.jpg" media="(min-width: 1400px)">
                            <source srcset="https://www.masakapahariini.com/wp-content/uploads/2020/10/roti-manis.jpg" media="(min-width: 768px)">
                            <source srcset="https://www.masakapahariini.com/wp-content/uploads/2020/10/roti-manis.jpg" media="(min-width: 576px)">
                            <img srcset="https://www.masakapahariini.com/wp-content/uploads/2020/10/roti-manis.jpg" alt="responsive image" class="d-block img-fluid">
                        {{-- <img src="https://bacalagers.com/wp-content/uploads/2021/03/blue-sea-sunset-UXoQ2Z.jpeg" class="d-block w-100" alt="..."> --}}
                      </div>
                    </div>
                    </picture>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </button>
                  </div>
                  <main role="main" class="container">
    <br>

    <br>


<div class="cekKamar" style=" padding: 10 10 10 10; border-radius: 1%">

    <h1 style="text-align: center">Buat Roti Yuk!</h1>
    <br>
    <form action="/pesan" method="post">
        @csrf

        <div class="posisi">

            <button class="btn btn-danger" type="submit">Yuk Buat Sekarang!</button>

        </div>
                </form>
            </div>
            <br>
            <div class="posisi">

                <h1>Tentang Kami</h1>
            </div>
                <p style="text-align: center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto tenetur necessitatibus tempore rerum inventore, eaque minus quae nesciunt omnis? Alias iste nobis illum qui iure. Expedita neque fuga sit aut.</p>
<div class="posisi">
    <h1>Apa Kata Orang?</h1>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="heading-section mb-5">Carousel #05</h2>
            </div>
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
        <div class="testimony-wrap py-4">
          <div class="text">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="testimony-wrap py-4">
          <div class="text">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="testimony-wrap py-4">
          <div class="text">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="testimony-wrap py-4">
          <div class="text">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="testimony-wrap py-4">
          <div class="text">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
              </div>
          </div>
        </div>
      </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
    </div>
</div>
@endsection


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
{{-- <picture>
    <source srcset="https://dummyimage.com/2000x400/007aeb/4196e5" media="(min-width: 1400px)">
    <source srcset="https://dummyimage.com/1400x400/007aeb/4196e5" media="(min-width: 768px)">
    <source srcset="https://dummyimage.com/800x400/007aeb/4196e5" media="(min-width: 576px)">
    <img srcset="https://dummyimage.com/600x400/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
  </picture> --}}
