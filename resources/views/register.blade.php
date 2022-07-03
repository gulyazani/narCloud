<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Nar Data Center</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="assets/img/nardc.png" alt="logo" width="200"  class="shadow-light">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Kayıt Ol!</h4></div>

                        <div class="card-body">
                            <form method="POST">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="frist_name">Ad</label>
                                        <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Soyad</label>
                                        <input id="last_name" type="text" class="form-control" name="last_name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Parola</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Parola Tekrarı</label>
                                        <input id="password2" type="password" class="form-control" name="password-confirm">
                                    </div>
                                </div>

                                <div class="form-divider">
                                    Kurumsal Detay
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">

                                        <label for="password2" class="d-block">Telefon Numarası</label>
                                        <input id="password2" type="text" class="form-control" name="password-confirm">
                                    </div>
                                    <div class="form-group col-6">

                                        <label  class="d-block">Vergi Numarası</label>
                                        <input id="password2" type="text" class="form-control" name="password-confirm">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Şirket Adı</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Şirket Adresi</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">Tüm Koşul Ve Şartları Kabul Ediyorum</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Kayıt Ol
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="assets/modules/jquery.min.js"></script>
<script src="assets/modules/popper.js"></script>
<script src="assets/modules/tooltip.js"></script>
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="assets/js/page/auth-register.js"></script>

<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
