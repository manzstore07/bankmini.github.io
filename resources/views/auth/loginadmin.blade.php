<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/horizontal/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 13:56:45 GMT -->
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Codescandy">

 <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-M8S4MT3EYG');
 </script>


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/dashuipro/assets/images/favicon/favicon.ico')}}">


<!-- Libs CSS -->
<link href="{{ asset('template/dashuipro/assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset('template/dashuipro/assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('template/dashuipro/assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">



<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('template/dashuipro/assets/css/theme.min.css')}}">
  <title>Login-Bank-Mini</title>
</head>

<body>
  <!-- container -->
  <main class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle d-none ">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>

           </a>
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <h4 class="d-flex justify-content-center mb-9">BANK MINI SMKN 1 PUSAKANAGARA</h4>
              <a href="../index.html"><img src="{{ asset('template/dashuipro/assets/images/brand/logo/logo-2.svg')}}" class="d-flex justify-content-center mb-7 text-inverse" alt="Image"></a>
            </div>
            <!-- Form -->
            <form action="/prosses_login" method="POST">
              <!-- Username -->
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">nip</label>
                <input type="text" id="nip" class="form-control" name="nip" placeholder="Email address here" required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="Masukan PIN" required="">
              </div>
              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">


              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="sign-up.html" class="fs-5">Belum Punya Akun?</a>
                  </div>
                  <div>
                    <a href="forget-password.html" class="text-inherit fs-5">Lupa Pasword?</a>
                  </div>

                </div>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Scripts -->
  <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>




<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
</body>


<!-- Mirrored from dashui.codescandy.com/dashuipro/horizontal/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 13:56:45 GMT -->
</html>
