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

    <button class="hutu btn btn-danger" type="submit" id="pesanan_id" name="pesanan">Pesan</button>

</body>
</html>

<script>
    $("#order_pesanan").on("click", function () {
    Cookies.get('the_cookie', 'tes', { expires: 7 });
})
if (Cookies.get('the_cookie')) {
    // Apply rule you want to apply
    $('.hutu').css("display", "none");
};
</script>
