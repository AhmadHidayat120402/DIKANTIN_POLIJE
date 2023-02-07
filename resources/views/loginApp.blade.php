<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
</head>

<body>
    <main class="form-signin d-flex justify-content-center align-items-center">
        <div class="p-4 bungkus">
            <form method="POST" action="" class="cover-login">
                @csrf
                <h1 class="text-white fw-bold text-center">Sign In</h1>
                <h1 class="h3 mt-4 mb-1 font-weight-bold text-center text-white">Sign In to your account</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput"
                        placeholder="username" required name="username">
                    <i class='bx bx-user-circle icon-username   '></i>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword"
                        placeholder="Password" required name="password">
                    <span class="eye" onclick="myFunction()">
                        <i id="hide1" class="fa-sharp fa-solid fa-eye icon-password2"></i>
                        <i id="hide2" class="fa-sharp fa-solid fa-eye-slash icon-password"></i>
                    </span>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="mt-5  align-items-center justify-content-center">
                    <button class="btn-block btn btn-lg rounded-pill btn-login" type="submit">Login</button>
                </div>
                <div>
                    <p class="text-center mt-2 forgot"><a href="#"
                            class="text-white text-decoration-none text-center">Forgot Password</a></p>
                </div>
            </form>
        </div>
        <img src="/img/bg-polije.png" alt="" class="bg-polije img-fluid">
        <img src="/img/polije.png" alt="" class="polije img-fluid">
    </main>

    <script>
        function myFunction() {
            var x = document.getElementById("floatingPassword");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            } else {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
