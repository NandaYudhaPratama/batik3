


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login Form with floating placeholder and light button</title>
  <link rel="stylesheet" href="{{ asset('/LoginAdmin/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-box">
  <h2>Login</h2>
  <form name="loginForm" method="get" action="{{url('/blog')}}">
    <div class="user-box">
      <input type="text" name="Email" required="">
    </div>
    <div class="user-box">
      <input type="password" name="Password" required="">
    </div> 
    <input type="submit" class="btn btn-primary" onclick="return check(this.form)" value="Login">
</input>
  </form>
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

<!-- partial -->
  
</body>
</html>
