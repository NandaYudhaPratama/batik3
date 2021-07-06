<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Toko Batik</title>
  </head>
  <body>

    <div class="container">
        <div class="row" style="margin-top:160px">
            <div class="col-sm">

            </div>
            <div class="col-sm card h-100 shadow p-3 bg-white rounded">
                <form name="loginForm" method="get" action="{{url('/blog')}}">
                    <div style="margin-left:auto;margin-right:auto; width:25%;padding-bottom:20px; padding-top:20px;">
                        <img src="{{ asset('img/profil.png')}}" height="90px" width="90px">

                    </div>
                    <div class="form-floating mb-3">
                        <input style=" border-radius: 50px;" name="Email" class="form-control" id="floatingInput" placeholder="name@example.com" style="background: transparent;">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input style="border-radius: 50px;" name="Password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary" onclick="return check(this.form)" value="Login">
                </form>
            </div>
            <div class="col-sm">

            </div>

        </div>
        <script language="javascript">
            function check(form) {

                if (form.Email.value == "admin@gmail.com" && form.Password.value == "123") {
                    return true;
                }
                else {
                    alert("Email atau Password yang anda masukkan salah!")
                    return false;
                }
            }
        </script>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

