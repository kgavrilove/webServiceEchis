<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Вход в систему</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/autorize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body class="main-bg">
<!-- Login Form -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 col-md-6 col-sm-6">
            <div class="card shadow p-3">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Авторизация</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="password" />
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" class="form-check-input" id="remember" />
                            <label for="remember" class="form-label">Запомнить меня</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class=" loginBtn btn text-light main-bg">Войти</button>
                        </div>
                        <div class="hint d-flex justify-content-center">
                            <span>Вы здесь впервые? <a href="#">Зарегистрироваться</a></span>
                        </div>

                        <div class="sublink d-flex justify-content-center">
                            <a href="#">Забыли пароль?</a>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
