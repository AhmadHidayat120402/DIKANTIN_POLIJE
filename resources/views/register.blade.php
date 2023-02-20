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
            <h1 class="text-white fw-bold text-center">Registration Form</h1>
            <form method="POST" action="/register" class="cover-login">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" placeholder="Ahmad Hidayat" required value="{{ old('name') }}">
                    {{-- <i class='bx bx-user-circle icon-username'></i> --}}
                    <label for="name">Name </label>
                    @error('name')
                        <div class="valid-feedback">
                            {{ 'The name must be valid name' }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                        id="username" placeholder="Ahmad12" required value="{{ old('username') }}">
                    {{-- <i class='bx bx-user-circle icon-username'></i> --}}
                    <label for="username">Username</label>
                    @error('username')
                        <div class="valid-feedback">
                            {{ 'The username must be valid username' }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"
                        id="floatingInput" placeholder="name@example.com"required value="{{ old('email') }}">
                    {{-- <i class='bx bx-user-circle icon-username   '></i> --}}
                    <label for="floatingInput">Email Address</label>
                    @error('email')
                        <div class="valid-feedback">
                            {{ 'The email must be valid email address' }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"
                        id="floatingPassword" placeholder="Password" required>
                    <span class="eye" onclick="myFunction()">
                        <i id="hide1" class="fa-sharp fa-solid fa-eye icon-password2"></i>
                        <i id="hide2" class="fa-sharp fa-solid fa-eye-slash icon-password"></i>
                    </span>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="valid-feedback">
                            {{ 'The password must be valid password' }}
                        </div>
                    @enderror
                </div>

                <button class="btn-block btn btn-lg rounded-pill btn-login mt-5" type="submit">Register</button>

            </form>
            <div class="container-register mt-3">
                <p class="text-center register p-1">Sudah Register ?<a href="/" class="text-decoration-none">
                        <span class=" fw-bold">Silahkan
                            Login !</span></a>
                </p>
            </div>
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
