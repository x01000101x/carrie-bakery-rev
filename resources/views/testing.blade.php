<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

</head>
<body>

    {{-- <button class="hutu btn btn-danger" type="submit" id="pesanan_id" name="pesanan">Pesan</button> --}}

    <button class="hutu btn btn-danger" type="button" onclick="" id="pesananku" name="pesanan">Pesan</button>


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
