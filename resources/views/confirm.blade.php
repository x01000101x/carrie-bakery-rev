<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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

        <div class="panel panel-default text-right">
            <div class="panel-body">
                <form action="/pesan" method="POST">
                    @csrf
                    <input type="hidden" name="orderan" value="{{ json_encode($orderanjson) }}">
                    <input type="hidden" name="nama_pemesan" value="{{ $pemesan  }}">
                    <input type="hidden" name="pesanan_id" value="{{ $pesanan_id  }}">

                    <input type="hidden" name="notelp" value="{{ $notelp }}">
                    <input type="hidden" name="alamat" value="{{ $alamat }}">
                    <input type="hidden" name="myCheck" value="{{ $myCheck }}">
                    <input type="hidden" name="nama_pengirim" value="{{ $pengirim }}">
                    <input type="hidden" name="status" value="booked">




                    {{-- @dd($koks) --}}
{{--
                    @foreach ($koks as $kok)
                        @dd($kok);
                    @endforeach --}}

                    @if($koks->status == "booked")
                    <a class="btn btn-warning" href="/shop"><i class="fa fa-pencil-square-o"></i>BACK</a>
                    <a class="btn btn-success" href="/download-invoice" target="_blank"><i class="fa fa-print"></i> PRINT INVOICE</a>
                    <button class="btn btn-primary" hidden type="submit"><i class="fa fa-check"></i>SAVE</button>
                    @else
                    <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>ORDER</button>
                    <a class="btn btn-warning" href="/checkout"><i class="fa fa-pencil-square-o"></i>BACK</a>
                    <a class="btn btn-success" hidden href="page-invoice-print.html" target="_blank"><i class="fa fa-print"></i> PRINT INVOICE</a>
                    @endif

                </form>



            </div>
        </div>
    </div>




</body>
</html>


