<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 13:53:42 GMT -->
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
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/dashuipro/assets/images/favicon/favicon.ico') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Libs CSS -->
<link href="{{ asset('template/dashuipro/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('template/dashuipro/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('template/dashuipro/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">



<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('template/dashuipro/assets/css/theme.min.css') }}">
    <title>Bank Digital</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">

        <div class="header">
  <!-- navbar -->
  @include('partials.navbar')

  @include('partials.sidebar')


        <!-- Page content -->
        <div id="app-content">
                <!-- Container fluid -->

                <div class="app-content-area">
                    <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
                    <div class="container-fluid mt-n22 ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <!-- Page header -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="mb-2 mb-lg-0">
                                        <h2 class="mb-0  text-white">Register</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row  -->
                        <div class="row">
                            <div class="">
                                <!-- card  -->
                                <div class="card">
                                    <!-- card header  -->
                                    {{-- <div class="card-header">
                                        <h4 class="float-start mb-0">Tambah Ekstrakulikuler</h4>
                                        <a href="/admin/ekstrakulikuler" class="btn float-end btn-sm btn-secondary">
                                            Kembali
                                        </a>

                                    </div> --}}
                                    <!-- table  -->
                                    <div class="card-body">
                                        <form action="/admin/dashboard" method="">
                                            <!-- Input -->
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label" for="textInput">Nama</label>
                                                  <input type="text" class="form-control" placeholder="Masukan disini" aria-label="Nama">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label" for="textInput">NISN</label>
                                                  <input type="text" class="form-control" placeholder="Masukan disini" aria-label="nisn">
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col">
                                                    <label class="form-label" for="textInput">Kelas</label>
                                                  <input type="text" class="form-control" placeholder="Masukan disini" aria-label="kelas">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label" for="textInput">Jurusan</label>
                                                  <input type="text" class="form-control" placeholder="Masukan disini" aria-label="jurusan">
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col">
                                                    <label class="form-label" for="textInput">PIN</label>
                                                  <input type="password" id="pasword" class="form-control" aria-describedby="passwordHelpBlock" placeholder="PIN harus berisi 6 Angka">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label" for="textInput">Password</label>
                                                    <input type="password" id="pasword" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Pasword minimal 8-20 karakter mengandung huruf dan angka.">
                                                </div>
                                              </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="textInput">Jenis Kelamin</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Jenis Kelamin</option>
                                                    <option value="1">Laki-Laki</option>
                                                    <option value="2">Perempuan</option>
                                                  </select>
                                           </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="textInput">Tempat Tanggal Lahir</label>
                                                <input type="text" name="tgl_lahir" id="textInput" class="form-control" placeholder="Masukkan disini">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="textInput">Nomor Telepon</label>
                                                <input type="text" name="telepon" id="textInput" class="form-control" placeholder="Masukkan disini">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlTextarea1">Alamat</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-sm btn-primary">Buat</button>
                                             </div>

                                        </form>
                                    </div>


                                    </div>
                                </div>
                                    <!-- card footer  -->
                                    <div class="card-footer text-center">

                                        <a href="#!">

                                             <!-- right alignment -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Scripts -->

    <!-- Libs JS -->
<script src="{{ asset('template/dashuipro/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('template/dashuipro/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/dashuipro/assets/libs/feather-icons/dist/feather.min.js') }}"></script>
<script src="{{ asset('template/dashuipro/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>




<!-- Theme JS -->
<script src="{{ asset('template/dashuipro/assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('template/dashuipro/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/dashuipro/assets/js/vendors/chart.js') }}"></script>








</body>


<!-- Mirrored from dashui.codescandy.com/dashuipro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 13:54:32 GMT -->
</html>
