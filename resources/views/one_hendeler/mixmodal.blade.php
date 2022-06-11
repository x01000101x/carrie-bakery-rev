<div class="container">
<div class="card text-center">
    <div class="card-body">
        <div class="container mt-4 mb-2 row">
            <div class="card col-5">
                <button type="button" class="btn-close" aria-label="Close" onclick="pqw('selai-1')"></button>
                <img id="selai-1"
                    src="https://yt3.ggpht.com/-5VnD39Towrnbg9H0ShlvLHrD0RfphyYzZX7bsACa6OOtCHm5-1s5tHViOk06RnRGkeGRaNdOg=s900-c-k-c0x00ffffff-no-rj"
                    class="mb-2 img-fluid">
                <input type="hidden" id="mix-1" value="none">
            </div>
            <div class="col-2 d-flex">
                <div class="container align-self-center">
                    <h3>MIX</h3>
                </div>
            </div>
            <div class="card col-5">
                <button type="button" class="btn-close" aria-label="Close" onclick="pqw('selai-2')"></button>
                <img id="selai-2"
                    src="https://yt3.ggpht.com/-5VnD39Towrnbg9H0ShlvLHrD0RfphyYzZX7bsACa6OOtCHm5-1s5tHViOk06RnRGkeGRaNdOg=s900-c-k-c0x00ffffff-no-rj"
                    class="mb-2 img-fluid">
                <input type="hidden" id="mix-2" value="none">
            </div>
        </div>
        <div class="container">
            <div class="mt-1 mb-1 owl-carousel" id="umami">
            @foreach($selais as $key=>$selai)
            <div class="item">
                <div class="card" onclick="oqaw('alpashow-{{$key}}','{{$selai->selai_nama}}')">
                    <img src="{{url('/storage/'.$selai->selai_gambar)}}"
                        class="card-img-top" alt="ow" id="alpashow-{{$key}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$selai->selai_nama}}</h5>
                        <!-- <p class="card-text">Some quick example of the card's content.</p> -->
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
        <div class="card-footer text-muted">
            Kombinasikan Selai Sesukamu
        </div>
    </div>
</div>
</div>  