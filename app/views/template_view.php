<!doctype html>
<html>
<head>
    <!--    <meta charset="UTF-8">-->
    <!--    <meta name="viewport"-->
    <!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
    <!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->

    <title>Магазин</title>
    <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../css/default.css" rel="stylesheet" type="text/css">

</head>

<body>
<header>
    <h1>Zagolovoc</h1>
</header>

<nav>
    <a class="buttonChangeColor" href="">Главная</a>
    <a class="buttonChangeColor" href="salespeople">Покупатели</a>
    <a class="buttonChangeColor" href="main">Продавци</a>
    <a class="buttonChangeColor" href="">Заказы</a>

</nav>

<main>
    <?
    include 'app/views/' . $content_view;
    ?>
</main>
<!--   <salespeople>-->
<!--       --><? //
//        include 'app/views/'.$content_view;
//       ?>
<!--   </salespeople>-->

<footer>
    <h1>hihihihihi</h1>
</footer>

</body>

</html>
