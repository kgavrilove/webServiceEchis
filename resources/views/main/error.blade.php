<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public\css\404.css">
    <title>404</title>
</head>
<body>
<div class="container">
    <h1>404</h1>
    <p>
        Добро пожаловать на страницу 404!<br /> Вы находитесь здесь, потому что ввели <br />адрес страницы, которая уже не существует<br /> или была перемещена по другому адресу .
    </p>
    <small>Вернуться на <a href="#"  target="_blank">главную страницу</a> или <a href="#" target="_blank">сообщить</a> нам .</small>

</div>

<footer>
    <p>
        error :<i class="fa fa-heart"></i>
        <a target="_blank" href="">text</a>
    </p>
</footer>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');

    body, html {
        margin: 0;
        overflow: hidden;
        position: relative;
    }

    body {
        align-items: center;
        background: linear-gradient(88deg, #150ffd, #ea0e50, #ea0eb1, #ea1a0e, #0e6aea, #eb3480,#7c0fc6,#5f059b);
        color: #fff;
        background-size: 1600% 1600%;
        display: flex;
        flex-direction: column;
        font-family: 'Open Sans',sans-serif;
        justify-content: center;
        height: 100vh;
        text-align: center;
        -webkit-animation: bgAnimation 46s ease infinite;
        animation: bgAnimation 46s ease infinite;
    }


    @-webkit-keyframes bgAnimation {
        0%{background-position:14% 0%}
        50%{background-position:87% 100%}
        100%{background-position:14% 0%}
    }
    @keyframes bgAnimation {
        0%{background-position:14% 0%}
        50%{background-position:87% 100%}
        100%{background-position:14% 0%}
    }



    .container h1 {
        font-size: 10em;
        margin: 0 0 0 0;
        background-color: #222;
        color: white;
        font-family: 'Roboto',sans-serif;

    }

    .container p {
        font-size: 1.2em;
        line-height: 26px;
    }

    .container small {
        opacity: 0.7;
    }

    .container a {
        color: #eee;
    }

    footer {
        background-color: #222;
        color: #fff;
        bottom: 0;
        position: fixed;
        left: 0;
        right: 0;
        letter-spacing: 1px;
        text-align: center;
    }

    footer p {
        font-size: 1em;
        margin: 5px 0;
    }

    footer i {
        color: red;
    }

    footer a {
        color: #3C97BF;
        text-decoration: none;
    }
</style>
