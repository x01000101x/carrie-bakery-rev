<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

      <!-- Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

      <!-- Css -->
      <link rel="stylesheet" href="{{ url('assets/css/nivo-slider.css') }}" type="text/css" />
      <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


      <!-- jS -->
      <script src="{{ url('assets/js/jquery.min.js') }}" type="text/javascript"></script>
      <script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
      <script src="{{ url('assets/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
      <script src="{{ url('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
      <script src="{{ url('assets/js/jquery.nicescroll.js') }}"></script>
      <script src="{{ url('assets/js/jquery.scrollUp.min.js') }}"></script>
      <script src="{{ url('assets/js/main.js') }}" type="text/javascript"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

</head>
<body>

    {{-- <button class="hutu btn btn-danger" type="submit" id="pesanan_id" name="pesanan">Pesan</button> --}}

    <button class="hutu btn btn-danger" type="button" onclick="" id="pesananku" name="pesanan">Pesan</button>

    <div class="col-md-3">
        <div class="blog-sidebar">
            <div class="block">
                <h4>History Pesanan</h4>
                <ul class="media-list" id='history_pesanan'>
                    <h1 id="output_history_pesanan">Tidak ada History</h1>
                    <form action="{{ url('/blabl') }}" method="post">
                        @csrf
                        <input type="hidden" id="getrekt" name="orderanapawe">
                        <button type="button" class="btn btn-primary">Order All</button>
                    </form>
                </ul>
                <div class="container">

                </div>
            </div>
            <script>

                // function testicels(){
                //     if (localStorage.getItem('data') != null){
                //         var konkrit = JSON.parse(localStorage.getItem('data'));
                //         console.log(konkrit.length);
                //         // console.log(konkrit);
                //         for (let i = 0; i < konkrit.length; i++){
                //             var pukimai = konkrit[i];
                //             var hedon = pukimai.replaceAll('"', '');
                //             var luka = hedon.replace(/\\/g, '');
                //             console.log(konkrit[1]);
                //         }
                //     }


                // testicels();

                // history_pesanan += `
                // 			<li class="media">
                // 				<a class="pull-left" href="#">
                // 					<img class="media-object" src="https://cdn-brilio-net.akamaized.net/news/2021/04/01/203113/1200x800-9-jenis-roti-tawar-populer-di-dunia-bikin-ngiler-210401r.jpg" alt="...">
                // 				</a>
                // 				<div class="media-body">

                // 					<a href="" class="media-heading"> ${konkrit[1]}
                // 						<p>
                // 							Selai : ${konkrit}
                // 							<br>
                // 							Toping : ${konkrit[4]}
                //                             <br>
                //                             Jumlah : ${konkrit[5]}</p>

                // 					</a>
                //                     <button class="btn btn-danger" name="myBtn" id="myBtn">hapus</button>

                // 				</div>
                // 			</li>
                // 			`
                // }


                // // console.log(html_blass);
                // document.getElementById('output_history_pesanan').innerHTML = history_pesanan;



                // var testis = localStorage.getItem('data');
                // console.log(testis + " stuber");
                function faaf() {
                    var value = localStorage.getItem('data');

                    if (value != null) {
                        document.getElementById('getrekt').value = value;
                    }
                }


                faaf()

                var history_pesanan = ``

                var parsingData = localStorage.getItem('data' || "[]");
                parsingData = JSON.parse(parsingData)
                console.log(parsingData + " Lucknut");
                var cukimai = sessionStorage.getItem('karanjang');
                console.log(cukimai + " Puki kuda");

                for (let i = 0; i < parsingData.length; i++) {
                    var order = parsingData[i]
                    // console.log(order[1]);

                    console.log(parsingData[6] + "shit");

                    for (let a = 0; a < order[1].length; a++) {
                        var selai = ''
                        var selbe = order[1]
                        selai += selbe + ','
                    }
                    history_pesanan += `
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="${order[6]}" alt="...">
                                </a>
                                <div class="media-body">

                                    <a href="" class="media-heading"> ${order[1]}
                                        <p>
                                            Selai : ${order[3]}
                                            <br>
                                            Toping : ${order[4]}
                                            <br>
                                            Jumlah : ${order[5]}</p>

                                    </a>
                                    <button class="btn btn-danger" name="myBtn" id="myBtn">hapus</button>

                                </div>
                            </li>
                            `
                }


                // console.log(html_blass);
                document.getElementById('history_pesanan').innerHTML = history_pesanan;

                // sessionStorage.removeItem('keranjang_blass');
//                             $(function(){

// $("#aKill").click(function(){
//       $.post("serverpage.php",function(data){
//       // if you want you can show some message to user here
//    });
// });
            </script>

</body>
</html>


<script>

document.getElementById("pesananku").onclick = function(event) {
            // event.preventDefault();
            let testong = sessionStorage.getItem('karanjang');
            // console.log(testong);

            let OrderanObj = JSON.stringify(testong);
            // console.log(OrderanObj);

            if (!testong){
                return;
            }

            localStorage.setItem("data", OrderanObj);
            let faku = JSON.parse(localStorage.getItem("data"));
            console.log(faku);
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
    //     sessionStorage.removeItem('karanjang');
    // })



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


{{-- <script>
    $("#order_pesanan").on("click", function () {
    Cookies.get('the_cookie', 'tes', { expires: 7 });
})
if (Cookies.get('the_cookie')) {
    // Apply rule you want to apply
    $('.hutu').css("display", "none");
};
</script> --}}
