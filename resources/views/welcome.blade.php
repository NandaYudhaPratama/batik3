
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Dual Sliding Landing page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{('/LandingPage/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="one-half left">
    <h1>Login User</h1>
    <a href="{{ route('login') }}" class="cta">Click Here</a>
  </div>
  <div class="one-half right">
    <h1>Login Admin</h1>
    <a href="{{url('/admin')}}" class="cta">Click Here</a>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="{{('/LandingPage/script.js')}}"></script>

</body>
</html>
