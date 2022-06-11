        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <title>Hello, world!</title>
        <style type="text/css">
                #topingbin {
                  transform: rotate(90deg);
                  width: 270px;
                  margin-top: 100px;
                }

                #topingbin .item {
                  transform: rotate(-90deg);
                }

                #topingbin .owl-nav {
                  display: flex;
                  justify-content: space-between;
                  position: absolute;
                  width: 100%;
                  top: calc(50% - 33px);
                }

                #slaybin {
                  transform: rotate(90deg);
                  width: 270px;
                  margin-top: 100px;
                }

                #slaybin .item {
                  transform: rotate(-90deg);
                }

                #slaybin .owl-nav {
                  display: flex;
                  justify-content: space-between;
                  position: absolute;
                  width: 100%;
                  top: calc(50% - 33px);
                }
        </style>

        <div class="container">
            <div class="row">
                <div class="col-md-12" style="height: 80vh;">
                <div class="inalan">
                    <div class="row">
                        <!-- toping -->
                        <div class="col-3">
                            <div id="topingbin" class="owl-carousel owl-theme">
                                @foreach($topings as $key=>$toping)
                                <div class="item">
                                    <img src="{{url('/storage/'.$toping->toping_gambar)}}" class="img-fluid" onclick="iponi('{{url('/storage/'.$toping->toping_gambar)}}','img3','valimg{{$key}}','toping')">
                                    <input type="hidden" id="valimg{{$key}}" value="{{$toping->toping_nama}}">                                        
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="./2.png" id="img1" style="position:absolute;  min-width: 40vw;height: 80vh; max-width: 40vw;max-height: 80vh;">
                            <input type="hidden" id="selai_select" value="none">
                            <img src="./1.png" id="img2" style="position:absolute;  min-width: 40vw;height: 80vh; max-width: 40vw;max-height: 80vh;">
                            <input type="hidden" id="roti_select" value="none">
                            <img src="./3.png" id="img3" style="position:absolute;  min-width: 40vw;height: 80vh; max-width: 20%;max-height: 50%; object-fit: scale-down;">
                            <input type="hidden" id="toping_select" value="none">
                        </div>
                        <!-- selai -->
                        <div class="col-3">
                            <div id="slaybin" class="owl-carousel owl-theme">   
                                @foreach($selais as $selai)
                                <div class="item">
                                    <img src="{{url('/storage/'.$selai->selai_gambar)}}" class="img-fluid" onclick="iponi(`{!!url('/storage/'.$selai->selai_gambar)!!}`,'img1','selaivalimg{{$key}}','selai')">
                                    <input type="hidden" id="selaivalimg{{$key}}" value="{{$selai->selai_nama}}">                                        
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-3"></div>
                <div class="col-4">
                    <!-- roti -->
                    <div id="rotibin" class="owl-carousel owl-theme">
                        @foreach($rotis as $roti)
                        <div class="item">
                            <img src="{{url('/storage/'.$roti->roti_gambar)}}" class="img-fluid" onclick="iponi('{{url('/storage/'.$roti->roti_gambar)}}','img2','rotivalimg{{$key}}','roti')">
                            <input type="hidden" id="rotivalimg{{$key}}" value="{{$roti->roti_nama}}">                                        
                        </div>
                        @endforeach
                        <div class="item">
                            <img src="https://cdn-brilio-net.akamaized.net/news/2021/04/01/203113/1200x800-9-jenis-roti-tawar-populer-di-dunia-bikin-ngiler-210401r.jpg" class="img-fluid" onclick="iponi('https://cdn-brilio-net.akamaized.net/news/2021/04/01/203113/1200x800-9-jenis-roti-tawar-populer-di-dunia-bikin-ngiler-210401r.jpg','img2')">
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
        <!-- owl corosel cdn -->
        <script>
            iponi = (url, pin,race,tipe) => {
                setTimeout(() => {
                    document.getElementById(pin).src = url;
                    document.getElementById(pin).classList.toggle('animate__hinge');
                    document.getElementById(pin).classList.toggle('animate__bounceInLeft');
                }, 3000);
                    document.getElementById(pin).classList.toggle('animate__bounceInLeft');
                    document.getElementById(pin).classList.toggle('animate__hinge');

                    var cal=document.getElementById(race).value
                    console.log(cal,race);
                    document.getElementById(tipe+'_select').value=cal
                    var owq=document.getElementById(tipe+'_select').value
                    console.log(owq,tipe);
            }

            function ortian(params) {
                var ras=[]
                ras=[
                    document.getElementById('roti_select').value,
                ]
            }
            		// Keranjang
            var sessionkaranjang=sessionStorage.getItem("karanjang");
            var karan=[]
            if (sessionkaranjang!=null) {
                karan=JSON.parse(sessionkaranjang)                
            }
            function pastin() {
                var kmb_r=document.getElementById('roti_select').value
                var kmb_s=document.getElementById('selai_select').value
                // kmb_s=JSON.parse(kmb_s)
                var kmb_t=document.getElementById('toping_select').value
                // kmb_t=JSON.parse(kmb_t)
                var tmb=[
                    kmb_r,kmb_s,kmb_t
                ]
                if (kmb_s.length<1) {
                    alert('pilihlah 1 roti, Selai, Toping')
                }else{
                    karan.push(tmb)
                    sessionStorage.setItem('karanjang',JSON.stringify(karan))
                    location.replace('{{url('/shop')}}');
                }
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            $('#topingbin').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
                }
            })
            $('#slaybin').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
                }
            })
            $('#rotibin').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
                }
            })
        </script>