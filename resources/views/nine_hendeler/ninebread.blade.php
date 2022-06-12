    <div style="margin: 1% 1% 1% 1%;">
        <div class="row">
            <div class="col-12 col-md-3">
                <h3 data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Pilih Selai</h3>
                <div class="row owl-carousel owl-theme" id="hititemlist">
                    @foreach($selais as $key=>$selai)
                    <div class="col-12 col-md-6 mb-2 item text-center" onclick="selt('binsel{{$key+1}}')">
                        <div class="card" id="binsel{{$key+1}}">
                            <img src="{!!url('/storage/'.$selai->selai_gambar)!!}" height="100px" class="card-img-top" id="binsel{{$key+1}}img">
                            <div class="card-body">
                                <p class="card-title btn btn-outline-dark">{{$selai->selai_nama}}</p>
                                <input type="hidden" id="binsel{{$key+1}}value" value="{{$selai->selai_nama}}">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-12 col-md-7 mb-5">
                <div class="card row">
                    <div class="col-12" id="rotina"
                        style="background: url('{{url('lgarin211.github.io/rotisobek6.jpg')}}');background-repeat: no-repeat; background-size: contain; min-height: 250px; ">
                        <div class="container d-flex justify-content-center">
                            <img class="mt-5" id="fastoping" src="./image-removebg-preview.png" height="100px"
                                style="object-fit: scale-down; position: absolute;">
                        </div>
                        <div class="row" id="itemshow">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2">
                <h3 data-bs-toggle="tooltip" title="Silahkan Pilih Toping untuk Rotimu">Pilih Toping</h3>
                </p>
                <div class="row owl-carousel owl-carousel2" id="lwp">

                    @foreach($topings as $key=>$toping)
                        <div class="col-12 col-md-12 item" onclick="topingpass('toping{{$key+1}}')">
                            <div class="card" id="toping{{$key+1}}" data-bs-toggle="tooltip" title="{!! $toping->toping_deskripsi !!}">
                                <img src="{!!url('/storage/'.$toping->toping_gambar)!!}" height="100px" class="card-img-top" id="toping{{$key+1}}img">
                                <div class="card-body">
                                    <p class="card-title btn btn-outline-dark">{{$toping->toping_nama}}</p>
                                    <input type="hidden" id="toping{{$key+1}}value" value="{{$toping->toping_nama}}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 1% 10% 1% 10%;">
            <input type="hidden" name="kombinasi_rasa" id="kombinasi_rasa" value="">
            <input type="hidden" name="kombinasi_toping" id="kombinasi_toping" value="">
            <a class="col-12 btn btn-primary" onclick="pastin()">Pesan</a>
    </div>


