<!DOCTYPE html>
<html dir="rtl">

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
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/LineIcons.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('images/logo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('images/logo-text.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span
                        class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">یادداشت ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">هشدارها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">چت</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">لیست چت</h6>
                                    <p class="mb-0">نمایش همه</p>
                                </div>
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">الف</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/1.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>آرمان محمدی</span>
                                                <p>آنلاین</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/2.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>آیدا میرزایی</span>
                                                <p>آخرین بازدید 7 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/3.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>الهام رفیعی</span>
                                                <p>آنلاین</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/4.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>آتنا نصیری</span>
                                                <p>آخرین بازدید 30 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">ب</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/5.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>بهاره شمس</span>
                                                <p>آخرین بازدید 50 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/1.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>بردیا احمدی </span>
                                                <p>آنلاین</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/2.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>کیمیا نجفی</span>
                                                <p>آخرین بازدید 7 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">د</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/3.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>دریا حسینی</span>
                                                <p>آنلاین</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/4.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>دنیا خادمی</span>
                                                <p>آخرین بازدید 30 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">ج</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/5.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جیدا عبادی</span>
                                                <p>آخرین بازدید 50 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/1.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جلال احمدی</span>
                                                <p>آنلاین</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/2.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جاثمین نظری</span>
                                                <p>آخرین بازدید 7 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/3.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جانان زندی</span>
                                                <p>آنلاین</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">ر</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/4.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>رها اکبری</span>
                                                <p>آخرین بازدید 30 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('images/avatar/5.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>ریحانه هاشمی</span>
                                                <p>آخرین بازدید 50 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:;" class="dz-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(13.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1" />
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(20.000001, 11.999997) scale(-1, -1) rotate(-90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">چت با کیمیا</h6>
                                    <p class="mb-0 text-success">آنلاین</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i
                                                class="fas fa-user-circle text-primary me-2"></i> مشاهده پروفایل</li>
                                        <li class="dropdown-item"><i class="fas fa-users text-primary me-2"></i>
                                            افزودن به دوستان صمیمی</li>
                                        <li class="dropdown-item"><i class="fas fa-plus text-primary me-2"></i>
                                            افزودن به گروه</li>
                                        <li class="dropdown-item"><i class="fas fa-ban text-primary me-2"></i> مسدود
                                            کردن</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/1.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        سلام کیمیا چطوری ؟
                                        <span class="msg_time">8:40</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        سلام خوبم ممنون تو چطوری ؟
                                        <span class="msg_time_send">8:55 </span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/2.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('') }}images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        منم خوبم، میخواستم بهم یه مشورت بدی ، وقت داری ؟
                                        <span class="msg_time">9:00 </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        آره وقتم آزاده ، چیشده ؟
                                        <span class="msg_time_send">9:05</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/2.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('') }}images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        میخوام کارم رو توسعه بدم ، به نظرت برای فروش بیشتر چه فاکتورهایی مهمه؟
                                        <span class="msg_time">9:07</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        تا حالا با مشاورهای کسب و کار صحبت کردی ؟
                                        <span class="msg_time_send">9:10</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/2.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/1.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        نه هنوز
                                        <span class="msg_time">9:12</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/1.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        سلام کیمیا چطوری ؟
                                        <span class="msg_time">8:40</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        سلام خوبم ممنون تو چطوری ؟
                                        <span class="msg_time_send">8:55 </span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/2.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/1.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        منم خوبم، میخواستم بهم یه مشورت بدی ، وقت داری ؟
                                        <span class="msg_time">9:00 </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        آره وقتم آزاده ، چیشده ؟
                                        <span class="msg_time_send">9:05</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/2.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('') }}images/avatar/1.jpg"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        میخوام کارم رو توسعه بدم ، به نظرت برای فروش بیشتر چه فاکتورهایی مهمه؟
                                        <span class="msg_time">9:07</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        تا حالا با مشاورهای کسب و کار صحبت کردی ؟
                                        <span class="msg_time_send">9:10</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/2.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{ asset('images/avatar/1.jpg') }}"
                                            class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        نه هنوز
                                        <span class="msg_time">9:12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="چیزی بنویس ..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i
                                                class="fas fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">اعلان ها</h6>
                                    <p class="mb-0">نمایش همه</p>
                                </div>
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">شخصی</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">ام</div>
                                            <div class="user_info">
                                                <span>امروز تولد امیده </span>
                                                <p class="text-primary">امروز </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">اجتماعی</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">مح<i class="icon fa-birthday-cake"></i>
                                            </div>
                                            <div class="user_info">
                                                <span>محصولات جدید</span>
                                                <p>نیگی یگانه یک دیدگاه جدید ارسال کرد</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">شخصی</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">ال<i class="icon fas fa-user-plus"></i>
                                            </div>
                                            <div class="user_info">
                                                <span>الهام رفیعی</span>
                                                <p>آنلاین</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">آت<i class="icon fas fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>آتنا نصیری</span>
                                                <p>آخرین بازدید 30 دقیقه پیش</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">یادداشت ها</h6>
                                    <p class="mb-0">یادداشت جدیدی بنویس</p>
                                </div>
                                <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>ارسال سفارشات جدید ...</span>
                                                <p>10 مهر 1400</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;" class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                        class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>آماده کردن فیلم های تبلیفاتی برای یوتیوب</span>
                                                <p>10 مهر 1400</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;" class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                        class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>عکاسی از آیتم های جدید ...</span>
                                                <p>10 مهر 1400</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;" class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                        class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>آتنا نصیری</span>
                                                <p>10 مهر 1400</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;" class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:;" class="btn btn-danger btn-xs sharp"><i
                                                        class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                داشبورد
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:;" role="button"
                                    data-bs-toggle="dropdown">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z"
                                            fill="#3E4954" />
                                    </svg>
                                    <span class="badge light text-white bg-primary">12</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3"
                                        style="height:380px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50"
                                                            src="{{ asset('images/avatar/1.jpg') }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">دانیال عبادی برای شما یک عکس فرستاد
                                                        </h6>
                                                        <small class="d-block">29 مهر 1400 -12:45</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">
                                                        مح
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">4 محصول جدید اضافه شد</h6>
                                                        <small class="d-block">29 مهر 1400 -12:45</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fas fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">یادآوری : بررسی گزارشات ماهانه !
                                                        </h6>
                                                        <small class="d-block">29 مهر 1400 -12:45</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50"
                                                            src="{{ asset('images/avatar/1.jpg') }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">دانیال عبادی برای شما یک عکس فرستاد
                                                        </h6>
                                                        <small class="d-block">29 مهر 1400 -12:45</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">
                                                        مح
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">4 محصول جدید اضافه شد</h6>
                                                        <small class="d-block">29 مهر 1400 -12:45</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fas fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">یادآوری : بررسی گزارشات ماهانه !
                                                        </h6>
                                                        <small class="d-block">29 مهر 1400 -12:45</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="javascript:;">مشاهده تمام اعلان ها<i
                                            class="ti-arrow-left"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:;">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.4604 0.848846H3.31682C2.64742 0.849582 2.00565 1.11583 1.53231 1.58916C1.05897 2.0625 0.792727 2.70427 0.791992 3.37367V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.414 2.64742 17.6803 3.31682 17.681C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5226V20.3168C4.15843 20.6214 4.24112 20.9204 4.39768 21.1817C4.55423 21.4431 4.77879 21.6571 5.04741 21.8008C5.31602 21.9446 5.61861 22.0127 5.92292 21.998C6.22723 21.9833 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.681H17.187C17.7383 17.68 18.2742 17.4993 18.7136 17.1664C19.1531 16.8334 19.472 16.3664 19.6222 15.8359L22.8965 4.05007C22.9998 3.67478 23.0152 3.28071 22.9413 2.89853C22.8674 2.51634 22.7064 2.15636 22.4707 1.8466C22.2349 1.53684 21.9309 1.28565 21.5822 1.1126C21.2336 0.93954 20.8497 0.849282 20.4604 0.848846ZM21.2732 3.60301L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8274C17.5496 15.938 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5226C5.84091 17.8532 5.57467 17.2115 5.10133 16.7381C4.62799 16.2648 3.98622 15.9985 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.37367C2.47534 3.15051 2.56406 2.93652 2.72186 2.77871C2.87966 2.62091 3.09365 2.5322 3.31682 2.53206H20.4604C20.5905 2.53239 20.7187 2.56274 20.8352 2.62073C20.9516 2.67872 21.0531 2.7628 21.1318 2.86643C21.2104 2.97005 21.2641 3.09042 21.2886 3.21818C21.3132 3.34594 21.3079 3.47763 21.2732 3.60301Z"
                                            fill="#3E4954" />
                                        <path
                                            d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z"
                                            fill="#3E4954" />
                                        <path
                                            d="M13.4161 10.1065H5.84161C5.6184 10.1065 5.40433 10.1952 5.2465 10.353C5.08867 10.5109 5 10.7249 5 10.9481C5 11.1714 5.08867 11.3854 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3854 14.2577 11.1714 14.2577 10.9481C14.2577 10.7249 14.169 10.5109 14.0112 10.353C13.8534 10.1952 13.6393 10.1065 13.4161 10.1065Z"
                                            fill="#3E4954" />
                                    </svg>
                                    <span class="badge light text-white bg-primary">5</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:;" role="button" data-bs-toggle="dropdown">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.625 5.125H21.75V1.625C21.75 1.47262 21.7102 1.32289 21.6345 1.19062C21.5589 1.05835 21.45 0.948128 21.3186 0.870868C21.1873 0.793609 21.0381 0.751989 20.8857 0.750126C20.7333 0.748264 20.5831 0.786224 20.4499 0.86025L13 4.99909L5.55007 0.86025C5.41688 0.786224 5.26667 0.748264 5.11431 0.750126C4.96194 0.751989 4.8127 0.793609 4.68136 0.870868C4.55002 0.948128 4.44113 1.05835 4.36547 1.19062C4.28981 1.32289 4.25001 1.47262 4.25 1.625V5.125H3.375C2.67904 5.12576 2.01181 5.40257 1.51969 5.89469C1.02757 6.3868 0.750764 7.05404 0.75 7.75V10.375C0.750764 11.071 1.02757 11.7382 1.51969 12.2303C2.01181 12.7224 2.67904 12.9992 3.375 13H4.25V22.625C4.25076 23.321 4.52757 23.9882 5.01969 24.4803C5.51181 24.9724 6.17904 25.2492 6.875 25.25H19.125C19.821 25.2492 20.4882 24.9724 20.9803 24.4803C21.4724 23.9882 21.7492 23.321 21.75 22.625V13H22.625C23.321 12.9992 23.9882 12.7224 24.4803 12.2303C24.9724 11.7382 25.2492 11.071 25.25 10.375V7.75C25.2492 7.05404 24.9724 6.3868 24.4803 5.89469C23.9882 5.40257 23.321 5.12576 22.625 5.125ZM20 5.125H16.3769L20 3.1125V5.125ZM6 3.1125L9.62311 5.125H6V3.1125ZM6 22.625V13H12.125V23.5H6.875C6.64303 23.4997 6.42064 23.4074 6.25661 23.2434C6.09258 23.0793 6.0003 22.857 6 22.625ZM20 22.625C19.9997 22.857 19.9074 23.0793 19.7434 23.2434C19.5794 23.4074 19.357 23.4997 19.125 23.5H13.875V13H20V22.625ZM23.5 10.375C23.4997 10.607 23.4074 10.8294 23.2434 10.9934C23.0794 11.1574 22.857 11.2497 22.625 11.25H3.375C3.14303 11.2497 2.92064 11.1574 2.75661 10.9934C2.59258 10.8294 2.5003 10.607 2.5 10.375V7.75C2.5003 7.51803 2.59258 7.29564 2.75661 7.13161C2.92064 6.96758 3.14303 6.8753 3.375 6.875H22.625C22.857 6.8753 23.0794 6.96758 23.2434 7.13161C23.4074 7.29564 23.4997 7.51803 23.5 7.75V10.375Z"
                                            fill="#3E4954" />
                                    </svg>
                                    <span class="badge light text-white bg-secondary">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-3">
                                    <div id="DZ_W_Gifts" class="widget-timeline dz-scroll style-1">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="javascript:;">
                                                    <span>10 دقیقه پیش </span>
                                                    <h6 class="mb-0">واریز <strong class="text-primary">
                                                            500 دلار </strong> درآمد این ماه از یوتیوب .</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge info">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:;">
                                                    <span>20 دقیقه پیش </span>
                                                    <h6 class="mb-0"><strong class="text-info"> 4
                                                        </strong>سفارش جدید ثبت شد</h6>
                                                    <p class="mb-0">مجموع فاکتور در کل 152,500 تومان است</p>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:;">
                                                    <span>30 دقیقه پیش </span>
                                                    <h6 class="mb-0">علی حسینی یک محصول از شما با قیمت
                                                        <strong class="text-warning"> 255,300 تومان </strong>خرید
                                                    </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge success">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:;">
                                                    <span>15 دقیقه پیش </span>
                                                    <h6 class="mb-0">پیج جدید فروشگاه در اینستاگرام راه
                                                        اندازی شد </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge warning">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:;">
                                                    <span>20 دقیقه پیش </span>
                                                    <h6 class="mb-0">یک پست جدید در وبلاگ قرار گرفت</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge dark">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:;">
                                                    <span>20 دقیقه پیش </span>
                                                    <h6 class="mb-0">یک پست جدید در وبلاگ قرار گرفت</h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-bs-toggle="dropdown">
                                    <div class="header-info">
                                        <small>مدیر ارشد</small>
                                        <span>آرزو حسینی</span>
                                    </div>
                                    <img src="{{ asset('images/profile/10.jpg') }}" width="20" alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">پروفایل</span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">صندوق ورودی</span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">خروج</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-dashboard-1"></i>
                            <span class="nav-text">داشبورد</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.html">داشبورد</a></li>
                            <li><a href="analytics.html">تجزیه و تحلیل</a></li>
                            <li><a href="review.html">نظرات</a></li>
                            <li><a href="order.html">سفارش</a></li>
                            <li><a href="order-list.html">لیست سفارش</a></li>
                            <li><a href="customer-list.html">لیست مشتریان</a></li>
                            {{-- <li onclick="showCreateFoodList(this)"><a href="javascript:void()">ایجاد غذای جدید</a></li> --}}
                            <li><a href="{{ route('seller.dashboard.showCreateFoodList') }}">ایجاد غذای جدید</a></li>
                            <li onclick="showRestaurants(this)"><a href="javascript:void()">ساخت منوی غذایی رستوران</a></li>
                            <li onclick="showRestaurantsForAddPersent()"><a href="javascript:void()">ایجاد تخفیف روی غذا</a></li>
                            <li onclick="showRestaurantsForEditInformations()"><a href="javascript:void()">ویرایش اطلاعات رستوران</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-app"></i>
                            <span class="nav-text">برنامه های کاربردی</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">پروفایل</a></li>
                            <li><a href="post-details.html">جزئیات پست</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">ایمیل</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">ارسال ایمیل</a></li>
                                    <li><a href="email-inbox.html">صندوق ورودی</a></li>
                                    <li><a href="email-read.html">خوانده شده</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">تقویم</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">فروشگاه</a>
                                <ul aria-expanded="false">
                                    <li><a href="javascript:void()" onclick="getStores()">فروشگاهها</a></li>
                                    <li><a href="ecom-product-list.html">لیست محصولات</a></li>
                                    <li><a href="ecom-product-detail.html">جزئیات محصول</a></li>
                                    <li><a href="ecom-product-order.html">سفارشات</a></li>
                                    <li><a href="ecom-checkout.html">سبد خرید</a></li>
                                    <li><a href="ecom-invoice.html">صورت حساب</a></li>
                                    <li><a href="ecom-customers.html">مشتریان</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-bar-chart-1"></i>
                            <span class="nav-text">نمودارها</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-star"></i>
                            <span class="nav-text">بوتسترپ</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">اکاردیون</a></li>
                            <li><a href="ui-alert.html">آلرت ها</a></li>
                            <li><a href="ui-badge.html">نشان ها</a></li>
                            <li><a href="ui-button.html">انواع دکمه</a></li>
                            <li><a href="ui-modal.html">مودال و pop-up</a></li>
                            <li><a href="ui-button-group.html">گروه دکمه</a></li>
                            <li><a href="ui-list-group.html">گروه لیست</a></li>
                            <li><a href="ui-media-object.html">مطلب با عکس</a></li>
                            <li><a href="ui-card.html">کارت</a></li>
                            <li><a href="ui-carousel.html">اسلایدر Carousel</a></li>
                            <li><a href="ui-dropdown.html">منوی دراپ دان</a></li>
                            <li><a href="ui-popover.html">منوی پاپ آور</a></li>
                            <li><a href="ui-progressbar.html">نوار پیشرفت</a></li>
                            <li><a href="ui-tab.html">تب</a></li>
                            <li><a href="ui-typography.html">تایپوگرافی</a></li>
                            <li><a href="ui-pagination.html">صفحه بندی</a></li>
                            <li><a href="ui-grid.html">گرید</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-plugin"></i>
                            <span class="nav-text">پلاگین ها</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.html">Select 2</a></li>
                            <li><a href="uc-nestable.html">Nestedable</a></li>
                            <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="map-jqvmap.html">Jqv Map</a></li>
                            <li><a href="uc-lightgallery.html">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-network"></i>
                            <span class="nav-text">ویجت ها</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-form"></i>
                            <span class="nav-text">فرم ها</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">اجزای فرم</a></li>
                            <li><a href="form-wizard.html">ویزارد</a></li>
                            <li><a href="form-ckeditor.html">ویرایشگر Ck</a></li>
                            <li><a href="form-pickers.html">انتخابگر ها</a></li>
                            <li><a href="form-validation-jquery.html">اعتبارسنجی فرم</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-table"></i>
                            <span class="nav-text">جدول</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">بوتسترپ</a></li>
                            <li><a href="table-datatable-basic.html">دیتاتیبل</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-landing-page"></i>
                            <span class="nav-text">صفحات</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="page-register.html">ثبت نام</a></li>
                            <li><a href="page-login.html">ورود</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">انواع خطا</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">خطای 400</a></li>
                                    <li><a href="page-error-403.html">خطای 403</a></li>
                                    <li><a href="page-error-404.html">خطای 404</a></li>
                                    <li><a href="page-error-500.html">خطای 500</a></li>
                                    <li><a href="page-error-503.html">خطای 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">صفحه قفل</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="plus-box">
                    <p class="fs-13 font-w300 mb-4">با استفاده از دکمه ی زیر میتونی منوها رو تنظیم کنی و تعدادشون رو
                        بیشتر کنی</p>
                    <a class="btn bg-white text-black btn-rounded d-block" href="javascript:;">+ افزودن منو</a>
                </div>
                <div class="copyright">
                    <p class="fs-14 font-w200"><strong class="font-w400">Koki - داشبورد مدیریت رستوران </strong>
                        © 2022 تمامی حقوق محفوظ است</p>
                    <p> توسعه با <span class="heart"></span> توسط آرزو حسینی </p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid" id="mainDiv">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body">
                                    <h2 class="text-black">56 <span class="text-success fs-14"
                                            dir="ltr">+4%</span></h2>
                                    <p class="mb-0 text-black">منوها</p>
                                </div>
                                <svg width="36" height="28" viewBox="0 0 36 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.75 6.75H30.0064L30.2189 4.62238C30.2709 4.10111 30.2131 3.57473 30.0493 3.07716C29.8854 2.57959 29.6192 2.12186 29.2676 1.73348C28.9161 1.3451 28.4871 1.03468 28.0082 0.822231C27.5294 0.609781 27.0114 0.500013 26.4875 0.5H7.0125C6.48854 0.500041 5.9704 0.609864 5.49148 0.822391C5.01256 1.03492 4.58348 1.34543 4.23189 1.73392C3.88031 2.12241 3.61403 2.58026 3.45021 3.07795C3.28639 3.57564 3.22866 4.10214 3.28075 4.6235L5.2815 24.6224C5.31508 24.9222 5.38467 25.2168 5.48875 25.5H1.75C1.41848 25.5 1.10054 25.6317 0.866116 25.8661C0.631696 26.1005 0.5 26.4185 0.5 26.75C0.5 27.0815 0.631696 27.3995 0.866116 27.6339C1.10054 27.8683 1.41848 28 1.75 28H31.75C32.0815 28 32.3995 27.8683 32.6339 27.6339C32.8683 27.3995 33 27.0815 33 26.75C33 26.4185 32.8683 26.1005 32.6339 25.8661C32.3995 25.6317 32.0815 25.5 31.75 25.5H28.0115C28.1154 25.2172 28.1849 24.9229 28.2185 24.6235L28.881 18H31.75C32.7442 17.9989 33.6974 17.6035 34.4004 16.9004C35.1035 16.1974 35.4989 15.2442 35.5 14.25V10.5C35.4989 9.50577 35.1035 8.55258 34.4004 7.84956C33.6974 7.14653 32.7442 6.75109 31.75 6.75ZM9.0125 25.5C8.70243 25.501 8.40314 25.3862 8.17327 25.1782C7.9434 24.9701 7.79949 24.6836 7.76975 24.375L5.7685 4.37575C5.75109 4.20188 5.7703 4.0263 5.82488 3.86031C5.87946 3.69432 5.96821 3.5416 6.0854 3.412C6.2026 3.28239 6.34564 3.17877 6.50532 3.10781C6.665 3.03685 6.83777 3.00013 7.0125 3H26.4875C26.6622 3.00012 26.8349 3.03681 26.9945 3.10772C27.1541 3.17863 27.2972 3.28218 27.4143 3.4117C27.5315 3.54123 27.6203 3.69386 27.6749 3.85977C27.7295 4.02568 27.7488 4.20119 27.7315 4.375L25.7308 24.3762C25.7007 24.6848 25.5566 24.971 25.3267 25.1788C25.0967 25.3867 24.7975 25.5012 24.4875 25.5H9.0125ZM33 14.25C32.9998 14.5815 32.868 14.8993 32.6337 15.1337C32.3993 15.368 32.0815 15.4998 31.75 15.5H29.1311L29.7561 9.25H31.75C32.0815 9.2502 32.3993 9.38196 32.6337 9.61634C32.868 9.85071 32.9998 10.1685 33 10.5V14.25Z"
                                        fill="#EA4989" />
                                </svg>
                            </div>
                            <div class="card-body p-0">
                                <canvas id="widgetChart1" height="75"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body">
                                    <h2 class="text-black">785 <span class="text-success fs-14"
                                            dir="ltr">+2.7%</span></h2>
                                    <p class="mb-0 text-black">سفارشات</p>
                                </div>
                                <svg width="32" height="31" viewBox="0 0 32 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4 30.5H22.75C23.7442 30.4989 24.6974 30.1035 25.4004 29.4004C26.1035 28.6974 26.4989 27.7442 26.5 26.75V16.75C26.5 16.4185 26.3683 16.1005 26.1339 15.8661C25.8995 15.6317 25.5815 15.5 25.25 15.5C24.9185 15.5 24.6005 15.6317 24.3661 15.8661C24.1317 16.1005 24 16.4185 24 16.75V26.75C23.9997 27.0814 23.8679 27.3992 23.6336 27.6336C23.3992 27.8679 23.0814 27.9997 22.75 28H4C3.66857 27.9997 3.3508 27.8679 3.11645 27.6336C2.88209 27.3992 2.7503 27.0814 2.75 26.75V9.25C2.7503 8.91857 2.88209 8.6008 3.11645 8.36645C3.3508 8.13209 3.66857 8.0003 4 8H15.25C15.5815 8 15.8995 7.8683 16.1339 7.63388C16.3683 7.39946 16.5 7.08152 16.5 6.75C16.5 6.41848 16.3683 6.10054 16.1339 5.86612C15.8995 5.6317 15.5815 5.5 15.25 5.5H4C3.00577 5.50109 2.05258 5.89653 1.34956 6.59956C0.646531 7.30258 0.251092 8.25577 0.25 9.25V26.75C0.251092 27.7442 0.646531 28.6974 1.34956 29.4004C2.05258 30.1035 3.00577 30.4989 4 30.5Z"
                                        fill="#EA4989" />
                                    <path
                                        d="M25.25 0.5C24.0138 0.5 22.8055 0.866556 21.7777 1.55331C20.7498 2.24007 19.9488 3.21619 19.4757 4.35823C19.0027 5.50027 18.8789 6.75693 19.1201 7.96931C19.3612 9.1817 19.9565 10.2953 20.8306 11.1694C21.7046 12.0435 22.8183 12.6388 24.0307 12.8799C25.243 13.1211 26.4997 12.9973 27.6417 12.5242C28.7838 12.0512 29.7599 11.2501 30.4466 10.2223C31.1334 9.19451 31.5 7.98613 31.5 6.75C31.498 5.093 30.8389 3.50442 29.6672 2.33274C28.4955 1.16106 26.907 0.501952 25.25 0.5ZM25.25 10.5C24.5083 10.5 23.7833 10.2801 23.1666 9.86801C22.5499 9.45596 22.0692 8.87029 21.7854 8.18506C21.5016 7.49984 21.4273 6.74584 21.572 6.01841C21.7167 5.29098 22.0739 4.6228 22.5983 4.09835C23.1228 3.5739 23.7909 3.21675 24.5184 3.07206C25.2458 2.92736 25.9998 3.00162 26.685 3.28545C27.3702 3.56928 27.9559 4.04993 28.368 4.66661C28.78 5.2833 29 6.00832 29 6.75C28.9989 7.74423 28.6034 8.69742 27.9004 9.40044C27.1974 10.1035 26.2442 10.4989 25.25 10.5Z"
                                        fill="#EA4989" />
                                    <path
                                        d="M6.5 13H12.75C13.0815 13 13.3995 12.8683 13.6339 12.6339C13.8683 12.3995 14 12.0815 14 11.75C14 11.4185 13.8683 11.1005 13.6339 10.8661C13.3995 10.6317 13.0815 10.5 12.75 10.5H6.5C6.16848 10.5 5.85054 10.6317 5.61612 10.8661C5.3817 11.1005 5.25 11.4185 5.25 11.75C5.25 12.0815 5.3817 12.3995 5.61612 12.6339C5.85054 12.8683 6.16848 13 6.5 13Z"
                                        fill="#EA4989" />
                                    <path
                                        d="M5.25 16.75C5.25 17.0815 5.3817 17.3995 5.61612 17.6339C5.85054 17.8683 6.16848 18 6.5 18H17.75C18.0815 18 18.3995 17.8683 18.6339 17.6339C18.8683 17.3995 19 17.0815 19 16.75C19 16.4185 18.8683 16.1005 18.6339 15.8661C18.3995 15.6317 18.0815 15.5 17.75 15.5H6.5C6.16848 15.5 5.85054 15.6317 5.61612 15.8661C5.3817 16.1005 5.25 16.4185 5.25 16.75Z"
                                        fill="#EA4989" />
                                </svg>
                            </div>
                            <div class="card-body p-0">
                                <canvas id="widgetChart2" height="75"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body">
                                    <h2 class="text-black">56 <span class="text-danger fs-14" dir="ltr">-3%</span>
                                    </h2>
                                    <p class="mb-0 text-black">مشتریان</p>
                                </div>
                                <svg width="32" height="36" viewBox="0 0 32 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.25 19.25C12.2389 19.25 13.2056 18.9568 14.0279 18.4074C14.8501 17.8579 15.491 17.0771 15.8694 16.1634C16.2478 15.2498 16.3469 14.2445 16.1539 13.2746C15.961 12.3046 15.4848 11.4137 14.7855 10.7145C14.0863 10.0152 13.1954 9.539 12.2255 9.34608C11.2555 9.15315 10.2502 9.25217 9.33658 9.6306C8.42295 10.009 7.64206 10.6499 7.09265 11.4722C6.54325 12.2944 6.25 13.2611 6.25 14.25C6.25129 15.5757 6.77849 16.8467 7.71589 17.7841C8.65329 18.7215 9.92431 19.2487 11.25 19.25ZM11.25 11.75C11.7445 11.75 12.2278 11.8966 12.6389 12.1713C13.05 12.446 13.3705 12.8365 13.5597 13.2933C13.7489 13.7501 13.7984 14.2528 13.702 14.7377C13.6055 15.2227 13.3674 15.6681 13.0178 16.0178C12.6681 16.3674 12.2227 16.6055 11.7377 16.702C11.2528 16.7984 10.7501 16.7489 10.2933 16.5597C9.83648 16.3705 9.44603 16.0501 9.17133 15.6389C8.89662 15.2278 8.75 14.7445 8.75 14.25C8.75089 13.5872 9.01457 12.9519 9.48322 12.4832C9.95187 12.0146 10.5872 11.7509 11.25 11.75Z"
                                        fill="#EA4989" />
                                    <path
                                        d="M30.78 22.4625C31.1926 21.9098 31.4683 21.2672 31.5844 20.5873C31.7005 19.9074 31.6537 19.2097 31.4477 18.5514L30.6542 15.9696C30.2817 14.7451 29.5243 13.6733 28.4946 12.9132C27.4648 12.1531 26.2174 11.7452 24.9375 11.75H19.3286C18.9971 11.75 18.6792 11.8817 18.4447 12.1161C18.2103 12.3505 18.0786 12.6685 18.0786 13C18.0786 13.3315 18.2103 13.6495 18.4447 13.8839C18.6792 14.1183 18.9971 14.25 19.3286 14.25H24.9375C25.6823 14.2474 26.4081 14.485 27.0072 14.9274C27.6064 15.3698 28.0471 15.9935 28.2639 16.706L29.0574 19.2866C29.1449 19.5713 29.1645 19.8725 29.1145 20.1661C29.0645 20.4597 28.9463 20.7374 28.7694 20.977C28.5925 21.2166 28.3619 21.4114 28.096 21.5456C27.8302 21.6799 27.5366 21.7499 27.2387 21.75H15.7776C15.7422 21.75 15.7126 21.7671 15.6776 21.7701C15.5936 21.7669 15.5125 21.75 15.4272 21.75H7.58975C6.20068 21.7449 4.84702 22.1879 3.72969 23.0132C2.61236 23.8385 1.79094 25.0021 1.38737 26.3312L0.454122 29.3625C0.236133 30.0719 0.187609 30.8225 0.312449 31.554C0.437289 32.2856 0.732013 32.9776 1.17293 33.5746C1.61385 34.1715 2.18866 34.6567 2.85116 34.9911C3.51366 35.3255 4.24538 35.4998 4.9875 35.5H18.0286C18.7708 35.4999 19.5026 35.3256 20.1651 34.9912C20.8277 34.6569 21.4026 34.1717 21.8435 33.5748C22.2845 32.9778 22.5793 32.2857 22.7041 31.5542C22.829 30.8226 22.7805 30.0719 22.5625 29.3625L21.6299 26.3315C21.3936 25.5767 21.0217 24.8713 20.5322 24.25H27.2387C27.9283 24.2532 28.6088 24.0928 29.2243 23.7821C29.8399 23.4714 30.373 23.0192 30.78 22.4625ZM19.8327 32.089C19.6254 32.3726 19.3538 32.6031 19.0402 32.7614C18.7266 32.9198 18.3799 33.0015 18.0286 33H4.9875C4.63649 32.9999 4.2904 32.9175 3.97705 32.7594C3.6637 32.6012 3.39184 32.3717 3.18334 32.0894C2.97484 31.807 2.83552 31.4796 2.77658 31.1336C2.71764 30.7876 2.74073 30.4326 2.844 30.0971L3.77662 27.0661C4.02439 26.2489 4.52922 25.5335 5.21609 25.0261C5.90296 24.5188 6.7352 24.2466 7.58912 24.25H15.4266C16.2805 24.2466 17.1128 24.5188 17.7996 25.0261C18.4865 25.5335 18.9913 26.2489 19.2391 27.0661L20.1717 30.0971C20.2769 30.4323 20.301 30.7877 20.2421 31.134C20.1831 31.4804 20.0429 31.8078 19.8327 32.0894V32.089Z"
                                        fill="#EA4989" />
                                    <path
                                        d="M21.875 9.24999C22.7403 9.24999 23.5861 8.9934 24.3056 8.51267C25.0251 8.03194 25.5858 7.34866 25.917 6.54923C26.2481 5.74981 26.3347 4.87014 26.1659 4.02148C25.9971 3.17281 25.5804 2.39326 24.9686 1.78141C24.3567 1.16955 23.5772 0.752876 22.7285 0.584066C21.8798 0.415256 21.0002 0.501896 20.2008 0.833029C19.4013 1.16416 18.7181 1.72492 18.2373 2.44438C17.7566 3.16384 17.5 4.0097 17.5 4.875C17.5014 6.03489 17.9628 7.14688 18.7829 7.96705C19.6031 8.78722 20.7151 9.2486 21.875 9.24999ZM21.875 3C22.2458 3 22.6083 3.10997 22.9167 3.31599C23.225 3.52202 23.4654 3.81485 23.6073 4.15747C23.7492 4.50008 23.7863 4.87708 23.714 5.24079C23.6416 5.6045 23.463 5.9386 23.2008 6.20082C22.9386 6.46304 22.6045 6.64162 22.2408 6.71397C21.8771 6.78631 21.5001 6.74918 21.1575 6.60727C20.8149 6.46535 20.522 6.22503 20.316 5.91669C20.11 5.60835 20 5.24584 20 4.875C20.0006 4.37789 20.1983 3.9013 20.5498 3.54979C20.9013 3.19829 21.3779 3.00056 21.875 3Z"
                                        fill="#EA4989" />
                                </svg>
                            </div>
                            <div class="card-body p-0">
                                <canvas id="widgetChart3" height="75"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body">
                                    <h2 class="text-black">61,200<small class="size">تومان </small>
                                        <span class="text-danger fs-14" dir="ltr">-3.7%</span>
                                    </h2>
                                    <p class="mb-0 text-black">درآمد</p>
                                </div>
                                <svg width="20" height="36" viewBox="0 0 20 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z"
                                        fill="#EA4989" />
                                </svg>
                            </div>
                            <div class="card-body p-0">
                                <canvas id="widgetChart4" height="75"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12" id="x6-1">
                        <div class="card">
                            <div class="card-header pb-0 border-0 flex-wrap">
                                <div class="mb-2">
                                    <h4 class="card-title mb-2">هزینه و درآمد</h4>
                                    <p class="fs-13 mb-0">نمودار درآمد و سود خالص رستوران </p>
                                </div>
                                <select class="form-control style-1 default-select mb-2">
                                    <option>ماهانه</option>
                                    <option>هفتگی</option>
                                    <option>روزانه</option>
                                </select>
                            </div>
                            <div class="card-body px-0 px-sm-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text-center px-2 px-md-5">
                                        <p class="fs-14 mb-1">درآمد</p>
                                        <h4 class="text-black font-w600 mb-0 fs-22">560,000 <small
                                                class="size"> تومان </small></h4>
                                    </div>
                                    <div class="text-center px-2 px-md-5">
                                        <p class="fs-14 mb-1">مخارج</p>
                                        <h4 class="text-black font-w600 mb-0 fs-22">126,000 <small
                                                class="size"> تومان </small></h4>
                                    </div>
                                </div>
                                <div id="chartBar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header border-0 d-sm-flex d-block">
                                <div>
                                    <h4 class="card-title mb-2">نمودار مشتریان</h4>
                                    <p class="fs-13 mb-0"> نمودار تعداد مشتریان جدید و وفادار </p>
                                </div>
                                <div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mt-sm-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">
                                                ماهانه
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#weekly" role="tab">
                                                هفتگی
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#today" role="tab">
                                                روزانه
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body tab-content p-3">
                                <div class="tab-pane fade show active" id="monthly">
                                    <div id="chartTimeline"></div>
                                </div>
                                <div class="tab-pane fade" id="weekly">
                                    <div id="chartTimeline2"></div>
                                </div>
                                <div class="tab-pane fade" id="today">
                                    <div id="chartTimeline3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8 col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div>
                                    <h4 class="card-title mb-2">سفارشات اخیر</h4>

                                </div>
                                <select class="default-select style-1" aria-label="Default select example">
                                    <option selected>جدید</option>
                                    <option value="1">پرطرفدار</option>
                                    <option value="2">قدیمی </option>
                                </select>
                            </div>
                            <div class="card-body  p-0">
                                <div class="table-responsive ">
                                    <table class="table order-request">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img class="me-3 img-fluid rounded-circle" width="75"
                                                            src="{{ asset('images/card/pic1.jpg') }}" alt="عکس">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-2"><a class="text-black"
                                                                    href="ecom-product-detail.html">سوپ اسفناج و ماهی
                                                                    تن</a></h5>
                                                            <p class="mb-0 text-primary">#0010235</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-2 text-black wspace-no">فرزاد امینی</h5>
                                                    <p class="mb-0">خیابان گلستان ، پلاک 78</p>
                                                </td>
                                                <td style="width:500px;">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <h4 class="mb-0 me-3 fs-20 text-black d-inline-block">
                                                            42,500<small class="size"> تومان </small></h4>
                                                        <p class="mb-0 fs-20 d-inline-block">3x</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn bgl-warning text-warning"
                                                            href="javascript:;">صف</a>
                                                        <div class="dropdown ms-auto">
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M22 4L12 14.01L9 11.01"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    قبول سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#F24242" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    رد سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#6F6F6F" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 16V12" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 8H12.01" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    مشاهده جزئیات
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img class="me-3 img-fluid rounded-circle" width="75"
                                                            src="{{ asset('images/card/pic2.jpg') }}" alt="عکس">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-2"><a
                                                                    href="ecom-product-detail.html"
                                                                    class="text-black">پیتزا آمریکانا</a></h5>
                                                            <p class="mb-0 text-primary">#0010299</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-2 text-black wspace-no">کیان احمدی</h5>
                                                    <p class="mb-0">خیابان الوند ، پلاک 48</p>
                                                </td>
                                                <td style="width:500px;">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <h4 class="mb-0 me-3 fs-20 text-black d-inline-block">82,300
                                                            <small class="size"> تومان </small>
                                                        </h4>
                                                        <p class="mb-0 fs-20 d-inline-block">1x</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn bgl-success text-success"
                                                            href="javascript:;">تکمیلی</a>
                                                        <div class="dropdown ms-auto">
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M22 4L12 14.01L9 11.01"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    قبول سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#F24242" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    رد سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#6F6F6F" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 16V12" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 8H12.01" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    مشاهده جزئیات
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img class="me-3 img-fluid rounded-circle" width="75"
                                                            src="{{ asset('images/card/pic3.jpg') }}" alt="عکس">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-2"><a
                                                                    href="ecom-product-detail.html"
                                                                    class="text-black">پیتزا پاتاتا مخصوص</a></h5>
                                                            <p class="mb-0 text-primary">#0010235</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-2 text-black wspace-no">پرهام احدی</h5>
                                                    <p class="mb-0">خیابان پیروزی ، پلاک 67</p>
                                                </td>
                                                <td style="width:500px;">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <h4 class="mb-0 me-3 fs-20 text-black d-inline-block">
                                                            40,500<small> تومان </small></h4>
                                                        <p class="mb-0 fs-20 d-inline-block">2x</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn bgl-light" href="javascript:;">لغو </a>
                                                        <div class="dropdown ms-auto">
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M22 4L12 14.01L9 11.01"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    قبول سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#F24242" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    رد سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#6F6F6F" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 16V12" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 8H12.01" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    مشاهده جزئیات
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img class="me-3 img-fluid rounded-circle" width="75"
                                                            src="{{ asset('images/card/pic6.jpg') }}" alt="عکس">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-2"><a
                                                                    href="ecom-product-detail.html"
                                                                    class="text-black">استیک مرغ همراه با
                                                                    مارچوبه</a></h5>
                                                            <p class="mb-0 text-primary">#0010235</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-2 text-black wspace-no">فرزاد امینی</h5>
                                                    <p class="mb-0">خیابان گلستان ، پلاک 78</p>
                                                </td>
                                                <td style="width:500px;">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <h4 class="mb-0 me-3 fs-20 text-black d-inline-block">
                                                            42,500<small class="size"> تومان </small></h4>
                                                        <p class="mb-0 fs-20 d-inline-block">3x</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn bgl-warning text-warning"
                                                            href="javascript:;">صف</a>
                                                        <div class="dropdown ms-auto">
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M22 4L12 14.01L9 11.01"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    قبول سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#F24242" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    رد سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#6F6F6F" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 16V12" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 8H12.01" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    مشاهده جزئیات
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img class="me-3 img-fluid rounded-circle" width="75"
                                                            src="{{ asset('images/card/pic7.jpg') }}" alt="عکس">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-2"><a
                                                                    href="ecom-product-detail.html"
                                                                    class="text-black">پیتزا آمریکانا</a></h5>
                                                            <p class="mb-0 text-primary">#0010299</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-2 text-black wspace-no">کیان جمشیدی</h5>
                                                    <p class="mb-0">خیابان الوند ، پلاک 48</p>
                                                </td>
                                                <td style="width:500px;">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <h4 class="mb-0 me-3 fs-20 text-black d-inline-block">82,300
                                                            <small class="size"> تومان </small>
                                                        </h4>
                                                        <p class="mb-0 fs-20 d-inline-block">1x</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn bgl-light" href="javascript:;">لغو </a>
                                                        <div class="dropdown ms-auto">
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M22 4L12 14.01L9 11.01"
                                                                            stroke="#209F84" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    قبول سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#F24242" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#F24242"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    رد سفارش
                                                                </a>
                                                                <a class="dropdown-item text-black"
                                                                    href="javascript:;">
                                                                    <svg class="me-3" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#6F6F6F" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 16V12" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M12 8H12.01" stroke="#6F6F6F"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    مشاهده جزئیات
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="card-footer border-0 pt-0 text-center">
                                        <a href="ecom-product-list.html" class="btn-link">مشاهده همه &gt;&gt;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div>
                                    <h4 class="card-title mb-2">منوهای پرطرفدار روزانه</h4>

                                </div>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="widget-media trending-menus">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-3">
                                                    <img alt="image" width="90"
                                                        src="{{ asset('images/card/pic8.jpg') }}">
                                                    <div class="number">#1</div>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-3"><a href="ecom-product-detail.html"
                                                            class="text-black">لازانیا با سس مخصوص</a></h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="mb-0 text-black font-w600">51,500 <small> تومان
                                                            </small></h4>
                                                        <p class="mb-0">سفارش <strong
                                                                class="text-black font-w500">x89</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-3">
                                                    <img alt="image" width="90"
                                                        src="{{ asset('images/card/pic4.jpg') }}">
                                                    <div class="number">#2</div>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-3"><a href="ecom-product-detail.html"
                                                            class="text-black">اسموتی توت فرنگی</a></h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="mb-0 text-black font-w600">47,500<small> تومان
                                                            </small></h4>
                                                        <p class="mb-0">سفارش <strong
                                                                class="text-black font-w500">x67</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-3">
                                                    <img alt="image" width="90"
                                                        src="{{ asset('images/card/pic9.jpg') }}">
                                                    <div class="number">#3</div>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-3"><a href="ecom-product-detail.html"
                                                            class="text-black">پاستا آلفردو با سس قارچ</a></h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="mb-0 text-black font-w600">52,500<small> تومان
                                                            </small></h4>
                                                        <p class="mb-0">سفارش <strong
                                                                class="text-black font-w500">x59</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-3">
                                                    <img alt="image" width="90"
                                                        src="{{ asset('images/card/pic6.jpg') }}">
                                                    <div class="number">#4</div>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-3"><a href="ecom-product-detail.html"
                                                            class="text-black">پیتزا آمریکانا</a></h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="mb-0 text-black font-w600">52,500<small> تومان
                                                            </small></h4>
                                                        <p class="mb-0">سفارش <strong
                                                                class="text-black font-w500">x49</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-3">
                                                    <img alt="image" width="90"
                                                        src="{{ asset('images/card/pic10.jpg') }}">
                                                    <div class="number">#5</div>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-3"><a href="ecom-product-detail.html"
                                                            class="text-black">استیک مرغ با سس مخصوص</a></h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="mb-0 text-black font-w600">40,500<small> تومان
                                                            </small></h4>
                                                        <p class="mb-0">سفارش <strong
                                                                class="text-black font-w500">x49</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>آرزو حسینی 2022 </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/seller/dashboard/showCreateFoodList.js') }}"></script>
    <script src="{{ asset('js/admin/dashboard/category/validationCategoryForm.js') }}"></script>
    <script src="{{ asset('js/admin/dashboard/category/saveCategory.js') }}"></script>
    <script src="{{ asset('js/admin/dashboard/category/saveCategory.js') }}"></script>
    <script src="{{ asset('js/stores/getStores.js') }}"></script>
    <script src="{{ asset('js/seller/dashboard/createMenu/showRestaurants.js') }}"></script>
    <script src="{{ asset('js/seller/dashboard/createMenu/getRestaurantFood.js') }}"></script>
    <script src="{{ asset('js\seller\dashboard\createMenu\showAddFoodToRestaurantForm.js') }}"></script>
    <script src="{{ asset('js\seller\dashboard\createMenu\saveAddFoodToRestaurantForm.js') }}"></script>
    <script src="{{ asset('js\seller\dashboard\addPersent\showRestaurantsForAddPersent.js') }}"></script>
    <script src="{{ asset('js\seller\dashboard\addPersent\getRestaurantFoodForAddPersent.js') }}"></script>
    <script src="{{ asset('js\seller\dashboard\addPersent\saveAddCouponToFood.js') }}"></script>
    <script src="{{ asset('js\seller\dashboard\editRestaurantInformations\showRestaurantsForEditInformations.js') }}"></script>
    <script src="{{ asset('js\seller\dashboard\editRestaurantInformations\getRestaurantIformations.js') }}"></script>

</body>

</html>
