<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sing In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body class="main-bg">
<!-- Login Form -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 col-md-6 col-sm-6">
            <div class="card shadow p-3">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Sign in</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" />
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" class="form-check-input" id="remember" />
                            <label for="remember" class="form-label">Remember</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class=" loginBtn btn text-light main-bg">Sign in</button>
                        </div>
                        <div class="hint d-flex justify-content-center">
                            <span>Something wrong? <a href="#">Change password</a></span>
                        </div>

                        <div class="sublink d-flex justify-content-center">
                            <a href="#">k.gavrilove</a>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
<style>
    :root {
        --main-bg: #38a2f8;
    }
    body {
        background-image: url("https://i.redd.it/1h7q60ab96t31.jpg");
    }
    input:focus, button:focus {
        border: 1px solid var(--main-bg);
        box-shadow: none;
    }
    .form-check-input:checked {
        background-color: green !important;
        border-color: green !important;
    }
    .card, .btn, input {
        border-radius: 0 !important;
    }
    .card {
        border-radius: 20px !important;
    }
    .btn {
        transition: 0.3s all ease-in-out;
        background-color: #38a2f8;
    }
    button:hover {
        background-color: #385bf8;
        transition: 0.3s all ease-in-out;
    }
    .hint {
        color: #c2bfbf;
    }
    .sublink {
        color: #c2bfbf;
    }
    .card-body a {
        text-decoration: none;
        color: #c2bfbf;
        transition: 0.3s all ease-in-out;
    }
    .card-body a:hover {
        color: #1a34a8;
    }

</style>
