<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{ url('assets/js/jquery.min.js')}}" type="text/javascript"></script>

    <style>

body{
    margin-top:20px;
    background:#eee;
}




/**    17. Panel
 *************************************************** **/
/* pannel */
.panel {
	position:relative;

	background:transparent;

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;

	-webkit-box-shadow: none;
	   -moz-box-shadow: none;
			box-shadow: none;
}
.panel.fullscreen .accordion .panel-body,
.panel.fullscreen .panel-group .panel-body {
	position:relative !important;
	top:auto !important;
	left:auto !important;
	right:auto !important;
	bottom:auto !important;
}

.panel.fullscreen .panel-footer {
	position:absolute;
	bottom:0;
	left:0;
	right:0;
}


.panel>.panel-heading {
	text-transform: uppercase;

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;
}
.panel>.panel-heading small {
	text-transform:none;
}
.panel>.panel-heading strong {
	font-family:Arial,Helvetica,Sans-Serif;
}
.panel>.panel-heading .buttons {
	display:inline-block;
	margin-top:-3px;
	margin-right:-8px;
}
.panel-default>.panel-heading {
	padding: 15px 15px;
	background:#fff;
}
.panel-default>.panel-heading small {
	color:#9E9E9E;
	font-size:12px;
	font-weight:300;
}
.panel-clean {
	border: 1px solid #ddd;
	border-bottom: 3px solid #ddd;

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;
}
.panel-clean>.panel-heading {
	padding: 11px 15px;
	background:#fff !important;
	color:#000;
	border-bottom: #eee 1px solid;
}
.panel>.panel-heading .btn {
	margin-bottom: 0 !important;
}

.panel>.panel-heading .progress {
	background-color:#ddd;
}

.panel>.panel-heading .pagination {
	margin:-5px;
}

.panel-default {
	border:0;
}

.panel-light {
	border:rgba(0,0,0,0.1) 1px solid;
}
.panel-light>.panel-heading {
	padding: 11px 15px;
	background:transaprent;
	border-bottom:rgba(0,0,0,0.1) 1px solid;
}

.panel-heading a.opt>.fa {
    display: inline-block;
    font-size: 14px;
    font-style: normal;
    font-weight: normal;
    margin-right: 2px;
    padding: 5px;
    position: relative;
    text-align: right;
    top: -1px;
}

.panel-heading>label>.form-control {
	display:inline-block;
	margin-top:-8px;
	margin-right:0;
	height:30px;
	padding:0 15px;
}
.panel-heading ul.options>li>a {
	color:#999;
}
.panel-heading ul.options>li>a:hover {
	color:#333;
}
.panel-title a {
	text-decoration:none;
	display:block;
	color:#333;
}

.panel-body {
	background-color:#fff;
	padding: 15px;

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;
}
.panel-body.panel-row {
	padding:8px;
}

.panel-footer {
	font-size:12px;
	border-top:rgba(0,0,0,0.02) 1px solid;
	background-color:rgba(0255,255,255,1);

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;
}

    </style>

</head>
<body>

    <div class="container bootstrap snippets bootdey">
        <div id="sangiang">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left">
                        <h4><strong>Detail</strong> Pesanan</h4>
                        <ul class="list-unstyled">
                            <li><strong>Nama:</strong> {{ $datas[0]['pembeli'] }}</li>
                            <li><strong>Alamat:</strong> {{ $datas[0]['alamat'] }}</li>
                            <li><strong>No. Telp:</strong> {{ $datas[0]['notelp'] }}</li>
                            <li><strong>Dropship:</strong>
                                @if($datas[0]['dropship'] == null)
                                {{ "Tidak" }}
                                @else
                                {{ "Ya" }}
                                @endif <li>
                                    <li><strong>Nama pengirim (untuk dropshipper):</strong> @if($datas[0]['pengirim'] == null)
                                        {{ "-" }}
                                @else
                                {{ $datas[0]['pengirim'] }}
                                @endif <li>
                                    {{-- Hello --}}
                                    {{-- <li><strong>Last Name:</strong> Doe</li>
                                        <li><strong>Country:</strong> U.S.A.</li>
                                        <li><strong>DOB:</strong> YYYY/MM/DD</li> --}}
                                    </ul>
                                </div>

                                {{-- <div class="col-md-6 col-sm-6 text-right">
                                    <h4><strong>Payment</strong> Details</h4>
                                    <ul class="list-unstyled">
                                        <li><strong>Bank Name:</strong> 012345678901</li>
                                        <li><strong>Account Number:</strong> 012345678901</li>
                            <li><strong>SWIFT Code:</strong> SWITCH012345678CODE</li>
                            <li><strong>V.A.T Reg #:</strong> VAT5678901CODE</li>
                        </ul>

                    </div> --}}

                </div>

                <div class="table-responsive">
                    <table class="table table-condensed nomargin">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                                @endphp
                            @foreach($datas as $key=>$data)
                            <tr>
                                <td>
                                    <div><strong>{{ $data['produk'] }}</strong></div>
                                    <small>
                                        <li>Roti : {{ $data['roti'] }}</li>
                                        <li>Selai : {{ $data['selai'] }}</li>
                                        <li>Toping : {{ $data['toping'] }}</li>

                                    </small>
                                </td>
                                <td>{{ $data['jumlah'] }}</td>
                                <td> @currency($data['harga_satuan']) <td>
                                    <td>@currency($data['harga'])</td>
                                </tr>
                                @php
                                    $total += $data['harga'];
                                    @endphp
                            @endforeach
                            <tr>Total Seluruh : @currency($total)</tr>
                        </tbody>
                    </table>
                </div>

                <hr class="nomargin-top">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h4><strong>Contact</strong> Details</h4>
                        <p class="nomargin nopadding">
                            <strong>Note:</strong>
                            Lid est laborum dolo rumes fugats.
                        </p><br><!-- no P margin for printing - use <br> instead -->

                        <address>
                            PO Box 21132 <br>
                            Vivas 2355 Australia<br>
                            Phone: 1-800-565-2390 <br>
                            Fax: 1-800-565-2390 <br>
                            Email:support@yourname.com
                        </address>
                    </div>

                    <div class="col-sm-6 text-right">
                        <ul class="list-unstyled">
                            <li><strong>Sub - Total Amount:</strong> $2162.00</li>
                            <li><strong>Discount:</strong> 10.0%</li>
                            <li><strong>VAT ($6):</strong> $12.0</li>
                            <li><strong>Grand Total:</strong> $1958.0</li>
                        </ul>
                        <a class="btn btn-default" href="#">MAKE A PAYMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <input type="hidden" id="forbodden" value="{{ json_decode($orderanjson) }}"> --}}

        <div class="panel panel-default text-right">
            <div class="panel-body">
                <form action="/pesan" id="formPesanan" method="POST">
                    @csrf
                    <input type="hidden" id="orderan" name="orderan" value="{{ json_encode($orderanjson) }}">
                    <input type="hidden" id="nama_pemesan" name="nama_pemesan" value="{{ $pemesan  }}">
                    <input type="hidden" id="pesanan_id" name="pesanan_id" value="{{ $pesanan_id  }}">
                    <input type="hidden" id="notelp" name="notelp" value="{{ $notelp }}">
                    <input type="hidden" id="alamat" name="alamat" value="{{ $alamat }}">
                    <input type="hidden" id="myCheck "name="myCheck" value="{{ $myCheck }}">
                    <input type="hidden" id="nama_pengirim" name="nama_pengirim" value="{{ $pengirim }}">
                    <input type="hidden" id="status" name="status" value="booked">




                    {{-- @dd($koks) --}}
                    {{--
                        @foreach ($koks as $kok)
                        @dd($kok);
                        @endforeach --}}

                        @if($koks->status == "booked")
                        <a class="btn btn-warning" href="/shop"><i class="fa fa-pencil-square-o"></i>BACK</a>
                        <a class="btn btn-success" id="printout"><i class="fa fa-print"></i> PRINT INVOICE</a>
                        <button class="btn btn-primary" hidden type="submit"><i class="fa fa-check"></i>SAVE</button>
                        @else
                        <button class="btn btn-primary" id="order_pesanan" type="submit"><i class="fa fa-check"></i>ORDER</button>
                        <a class="btn btn-warning" href="/checkout"><i class="fa fa-pencil-square-o"></i>BACK</a>
                        <a class="btn btn-success" hidden href="page-invoice-print.html" target="_blank"><i class="fa fa-print"></i> PRINT INVOICE</a>
                        @endif

                    </form>



                </div>

        </div>
    </div>




</body>
</html>

<script>
   window.onload = function(){
    document.getElementById("printout").addEventListener("click", () =>{
        const invoice = this.document.getElementById("sangiang");
        console.log(invoice);
        var opt = {
            margin:       1,
            filename:     'carriebakery-invoice.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
        html2pdf().from(invoice).set(opt).save();
    })
   }
</script>

<script>

    console.log(localStorage.getItem('data'));

document.getElementById("order_pesanan").onclick = function(event) {
    event.preventDefault();

            let pesanan_id = document.getElementById("pesanan_id").value;
            // console.log(pesanan_id);

            let pesanans = sessionStorage.getItem('karanjang');
            console.log(pesanans + " Kol");
            let pardapot = JSON.parse(pesanans);

            var today = new Date();
            var date = today.getDate()+"-"+(today.getMonth()+1) + "-" + today.getFullYear();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var dateTime = date+' '+time;

            for (let i = 0; i < pardapot.length; i++) {
                var found = pardapot[i]
                console.log(found);

                found.push(pesanan_id);
                found.push(dateTime);

            }

            // let fairytale = pesanans.push(pesanan_id);
            // console.log(pardapot);

            let OrderanObj = JSON.stringify(pardapot);
            console.log(OrderanObj, " ini setering");
            // console.log(typeof(OrderanObj));

            // console.log(localStorage.getItem('data') + " ,p");

            let older_data = localStorage.getItem('data');
            console.log(older_data + " Kararosin");

            if(older_data == ""){
                console.log('acumalakaaahahha');
            }

            if(older_data !== ""){
                for (let i = 0; i < pardapot.length; i++) {
                    var acumalaka = pardapot[i];
                    let old_data = JSON.parse(localStorage.getItem('data'));
                    old_data.push(acumalaka);
                sessionStorage.removeItem('karanjang');

            }else if(older_data !== null){

                for (let i = 0; i < pardapot.length; i++) {
                    var acumalaka = pardapot[i];
                    let old_data = JSON.parse(localStorage.getItem('data'));
                    old_data.push(acumalaka);
                sessionStorage.removeItem('karanjang');


            }
            // console.log(old_data);
            }
            else{
                localStorage.removeItem("data");
                localStorage.setItem("data", OrderanObj);
                let faku = JSON.parse(localStorage.getItem("data"));
                // console.log(faku + " Hi");
                sessionStorage.removeItem('karanjang');
            }
        }

    // document.getElementById('formPesanan')
    // .addEventListener("submit", function(event){
    //     // event.preventDefault();

    //     var pesanan_id = document.getElementById("pesanan_id").value;


    //     var orderanObj = JSON.parse(document.getElementById("orderan").value);
    //     console.log(orderanObj);
    //     // var b=JSON.stringify(orderanObj);
    //     str = orderanObj.replace(/[\[\]']+/g, '');
    //     console.log(str)
    //     // var masl = [];
    //     kuku = str.split(/[,]+/);
    //     // var jujur = kuku.replace(/['"]+/g, '');
    //     // masl.push(str);
    //     // var kupu = masl.replace(/['"]+/g, '');
    //     console.log(kuku);

    //     // console.log("Hello", orderanObj);

    //     if(!kuku){
    //         return;
    //     }

    //     // var infoOrder = {
    //     //     pesanan: orderanObj
    //     // };

    //     localStorage.setItem("data", JSON.stringify(kuku));
    //     var inchok = JSON.parse(localStorage.getItem("data"));
    //     console.log(inchok);

    //     //delete session keranjang

    // console.log(document.getElementById('orderan').value + " INI RAW");
//     var orderanObject = JSON.parse(document.getElementById('orderan').value);
//     // console.log(orderanObject + " Ini parse");
//     let datas = [
//        orderanObject
// ];
//     // console.log(datas + " Ini apalah");

//     $("#order_pesanan").on("click", function () {
//         localStorage.setItem('data', datas);
//         var parsingData = JSON.parse(localStorage.getItem('data'));
//         console.log(parsingData);
// })
</script>


