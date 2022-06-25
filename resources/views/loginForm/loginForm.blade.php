<!DOCTYPE html>
<html dir="rtl" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />

    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:title" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:description" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Koki - داشبورد مدیریت رستوران </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100" >

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="{{ asset('images/logo-full.png') }}"
                                                alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">ورود به حساب</h4>
                                    <div id="messageLogin">
                                    </div>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>رایانامه</strong></label>
                                            <input type="email" onkeyup="loginFormEmailValidation(this)" name="email"
                                                class="form-control" value="" placeholder="ghasem@soleimani.ir">
                                            <div id="emailLoginFormValidationMessage" class="invalid-feedback">
                                                ...
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong> رمز عبور </strong></label>
                                            <input type="password" onkeyup="loginFormPasswordValidation(this)"
                                                name="password" class="form-control" value="" placeholder="Password">
                                            <div id="passwordLoginFormValidationMessage" class="invalid-feedback">
                                                ...
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="basic_checkbox_1">
                                                    <label class="custom-control-label" for="basic_checkbox_1">اطلاعات
                                                        من یادت باشه </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">رمزعبورت رو فراموش کردی ؟</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button onclick="loginToAccount(this)" type="button"
                                                class="btn btn-primary btn-block">ورود</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>حساب کاربری نداری ؟ مشکلی نداره از <a class="text-primary"
                                                href="page-register.html"> اینجا </a>میتونی ثبت نام کنی .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>
    <script src="{{ asset('js/login/validationLoginForm.js') }}"></script>
    <script src="{{ asset('js/login/loginToAccount.js') }}"></script>

</body>

</html>
