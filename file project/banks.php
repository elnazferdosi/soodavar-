<?php
  include 'banks_query.php';
  require_once 'validation_user.php';
  require 'name_user.php';
?>

<!DOCTYPE html>

<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed " dir="rtl" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  <head>

<link rel="shortcut icon" href="assets/img/icons/dollar (2).png" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>سودآور | حساب های بانکی</title>

    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/forms_style.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<!-- Menu -->
<aside
  id="layout-menu"
  class="layout-menu menu-vertical menu bg-menu-theme"
>
  <div class="app-brand demo">
    <a href="index.php" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg
          width="25"
          viewBox="0 0 25 42"
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
        >
          <defs>
            <path
              d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
              id="path-1"
            ></path>
            <path
              d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
              id="path-5"
            ></path>
          </defs>
          <g
            id="g-app-brand"
            stroke="none"
            stroke-width="1"
            fill="none"
            fill-rule="evenodd"
          >
            <g
              id="Brand-Logo"
              transform="translate(-27.000000, -15.000000)"
            >
              <g id="Icon" transform="translate(27.000000, 15.000000)">
                <g id="Mask" transform="translate(0.000000, 8.000000)">
                  <mask id="mask-2" fill="white">
                    <use xlink:href="#path-1"></use>
                  </mask>
                  <use fill="#696cff" xlink:href="#path-1"></use>
                  <g id="Path-3" mask="url(#mask-2)">
                    <use fill="#696cff" xlink:href="#path-3"></use>
                    <use
                      fill-opacity="0.2"
                      fill="#FFFFFF"
                      xlink:href="#path-3"
                    ></use>
                  </g>
                  <g id="Path-4" mask="url(#mask-2)">
                    <use fill="#696cff" xlink:href="#path-4"></use>
                    <use
                      fill-opacity="0.2"
                      fill="#FFFFFF"
                      xlink:href="#path-4"
                    ></use>
                  </g>
                </g>
                <g
                  id="Triangle"
                  transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                >
                  <use fill="#696cff" xlink:href="#path-5"></use>
                  <use
                    fill-opacity="0.2"
                    fill="#FFFFFF"
                    xlink:href="#path-5"
                  ></use>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </span>

      <span class="app-brand-text demo menu-text fw-bolder ms-2"
        >Sood Avar</span
      >
    </a>
    <a
      href="javascript:void(0);"
      class="layout-menu-toggle menu-link text-large ms-auto"
    >
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
  <div class="menu-inner-shadow"></div>
  <ul class="menu-inner py-1">

    <!-- Dashboard -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>داشبورد</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="index.php" class="menu-link">
            <div> صفحه اصلی </div>
          </a>
        </li>

        <li class="menu-item">
          <a href="dashboards-income.php" class="menu-link">
            <div> درآمد </div>
          </a>
        </li>

        <li class="menu-item">
          <a href="dashboards-daily.php" class="menu-link">
            <div> خرجی ها </div>
          </a>
        </li>

        <li class="menu-item">
          <a href="dashboards-bills.php" class="menu-link">
            <div> قبوض </div>
          </a>
        </li>
        </ul>

    <!-- Apps -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text"> برنامه ها </span>
    </li>

    <li class="menu-item">
      <a href="calendar.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-calendar"></i>
        <div > تقویم </div>
      </a>
    </li>

    <li class="menu-item">
      <a href="charts-chartjs.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-chart"></i>
        <div> نمودار </div>
      </a>
    </li>

    <!-- Account & Auth -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text"> حساب کاربری و احراز هویت </span>
    </li>

    <li class="menu-item active open">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-user"></i>
      <div> تنظیمات حساب کاربری </div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item">
        <a
          href="profile-account.php"
          class="menu-link"
        >
          <div> پروفایل کاربری </div>
        </a>
      </li>

      <li class="menu-item">
        <a
          href="account-settings-security.php"
          class="menu-link"
        >
          <div> امنیت </div>
        </a>
      </li>

      <li class="menu-item active">
        <a
          href="banks.php"
          class="menu-link"
        >
          <div> حساب های بانکی </div>
        </a>
      </li>

      <li class="menu-item">
        <a
          href="account-settings-active.php"
          class="menu-link"
        >
          <div> حساب های فعال با ایمیل</div>
        </a>
      </li>
    </ul>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
        <div> احراز هویت</div>
      </a>

      <ul class="menu-sub">

        <li class="menu-item">
          <a href="verify-email.php" class="menu-link">
            <div> تایید ایمیل </div>
          </a>
        </li>

        <li class="menu-item">
          <a href="forgot-password.php" class="menu-link">
            <div> بازیابی رمز </div>
          </a>
        </li>

        <li class="menu-item">
          <a href="two-steps.php" class="menu-link">
            <div> تایید دومرحله ای </div>
          </a>
    </li>
    </ul>

    <!-- Support -->
    <li class="menu-header">
      <span class="menu-header-text">پشتیبانی</span>
    </li>

    <li class="menu-item">
      <a
        href="support-conect.php"
        class="menu-link"
      >
        <i class="menu-icon tf-icons bx bx-support"></i>
        <div>تماس با ما</div>
      </a>
    </li>

    <li class="menu-item">
      <a
        href="support-info.php"
        class="menu-link"
      >
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div>درباره ما</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="roles-sites.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-check-shield"></i>
        <div> قوانین سایت </div>
      </a>
    </li>
</aside>
<!-- / Menu -->

    <!-- Layout container -->
    <div class="layout-page">

<!-- Navbar -->
<nav
  class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
  id="layout-navbar"
>
  <div
    class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
  >
    <a
      class="nav-item nav-link px-0 me-xl-4"
      href="javascript:void(0)"
    >
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>

  <div
    class="navbar-nav-right d-flex align-items-center"
    id="navbar-collapse"
  >

    <!-- Search -->
    <div class="navbar-nav align-items-center">
      <div class="nav-item navbar-search-wrapper mb-0">
        <a
          class="nav-item nav-link search-toggler px-0"
          href="javascript:void(0);"
        >
          <i class="bx bx-search bx-sm"></i>
          <span class="d-none d-md-inline-block text-muted"
            > جستجو </span
          >
        </a>
      </div>
    </div>
    <!-- /Search -->

    <ul class="navbar-nav flex-row align-items-center ms-auto">

      <!-- Notification -->
      <li
        class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1"
      >
        <a
          class="nav-link dropdown-toggle hide-arrow"
          href="javascript:void(0);"
          data-bs-toggle="dropdown"
          data-bs-auto-close="outside"
          aria-expanded="false"
        >
          <i class="bx bx-bell bx-sm"></i>
          <span
            class="badge bg-danger rounded-pill badge-notifications"
            >5</span
          >
        </a>
        <ul class="dropdown-menu dropdown-menu-end py-0">
          <li class="dropdown-menu-header border-bottom">
            <div
              class="dropdown-header d-flex align-items-center py-3"
            >
              <h5> پیام ها </h5>
              <a
                href="javascript:void(0)"
                class="dropdown-notifications-all text-body"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="خواندن همه پیام ها">
              <i class="bx fs-4 bx-envelope-open"></i>
            </a>
            </div>
          </li>
          <li
            class="dropdown-notifications-list scrollable-container"
          >
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item list-group-item-action dropdown-notifications-item"
              >
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                  </div>

                  <div class="flex-grow-1">
                    <h6 class="mb-1"> تایید ایمیل </h6>
                    <p class="mb-0">
                      لطفا نسبت به تایید ایمیل خود اقدام کنید.
                    </p>
                    <small class="text-muted"> 1 ساعت پیش</small>
                  </div>
                  <div
                    class="flex-shrink-0 dropdown-notifications-actions"
                  >
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-read"
                      ><span class="badge badge-dot"></span
                    ></a>
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-archive"
                      ><span class="bx bx-x"></span
                    ></a>
                  </div>
                </div>
              </li>
              <li
                class="list-group-item list-group-item-action dropdown-notifications-item"
              >
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1"> تایید دومرحله ای </h6>
                    <p class="mb-0"> لطفا برای حساب خود تایید دومرحله ای را فعال کنید. </p>
                    <small class="text-muted"> 12 ساعت پیش</small>
                  </div>
                  <div
                    class="flex-shrink-0 dropdown-notifications-actions"
                  >
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-read"
                      ><span class="badge badge-dot"></span
                    ></a>
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-archive"
                      ><span class="bx bx-x"></span
                    ></a>
                  </div>
                </div>
              </li>
              <li
                class="list-group-item list-group-item-action dropdown-notifications-item"
              >
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1"> یادآوری </h6>
                    <p class="mb-0">
                      کاربر عزیز برای پرداخت قبض آب دو روز مهلت دارید.
                    </p>
                    <small class="text-muted"> 3 روز پیش </small>
                  </div>
                  <div
                    class="flex-shrink-0 dropdown-notifications-actions"
                  >
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-read"
                      ><span class="badge badge-dot"></span
                    ></a>
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-archive"
                      ><span class="bx bx-x"></span
                    ></a>
                  </div>
                </div>
              </li>
              <li
                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
              >
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">
                      افزودن حساب بانکی
                    </h6>
                    <p class="mb-0">
                    لطفا حساب بانکی مورد نظر خود را در اسرع وقت اضافه کنید.
                    </p>
                    <small class="text-muted"> 5 دقیقه پیش</small>
                  </div>
                  <div
                    class="flex-shrink-0 dropdown-notifications-actions"
                  >
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-read"
                      ><span class="badge badge-dot"></span
                    ></a>
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-archive"
                      ><span class="bx bx-x"></span
                    ></a>
                  </div>
                </div>
              </li>
              <li
                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
              >
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1"> موعد اجاره خانه </h6>
                    <p class="mb-0">
                      کاربر عزیز یک روز برای پرداخت اجاره خانه مهلت دارید.
                    </p>
                    <small class="text-muted"> 2 ساعت پیش </small>
                  </div>
                  <div
                    class="flex-shrink-0 dropdown-notifications-actions"
                  >
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-read"
                      ><span class="badge badge-dot"></span
                    ></a>
                    <a
                      href="javascript:void(0)"
                      class="dropdown-notifications-archive"
                      ><span class="bx bx-x"></span
                    ></a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown-menu-footer border-top">
            <a
              href="javascript:void(0);"
              class="dropdown-item d-flex justify-content-center p-3"
            >
              مشاهده همه پیام ها
            </a>
          </li>
        </ul>
      </li>
          <!--/ Notification -->

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a
              class="nav-link dropdown-toggle hide-arrow"
              href="javascript:void(0);"
              data-bs-toggle="dropdown"
            >
              <div class="avatar">
                <img
                  src="assets/img/avatars/user.png"
                  alt
                  class="w-px-40 h-auto rounded-circle"
                />
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a
                  class="dropdown-item"
                  href="profile-account.php"
                >
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img
                          src="assets/img/avatars/user.png"
                          alt
                          class="w-px-40 h-auto rounded-circle"
                        />
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block"><?php echo $username;?></span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="profile-account.php">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle"> پروفایل من </span>
                </a>
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="banks.php"
                >
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                    <span class="flex-grow-1 align-middle"> حساب های بانکی </span>
                  </span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="support-conect.php"
                >
                  <i class="bx bx-support me-2"></i>
                  <span class="align-middle"> تماس با ما </span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="login.php"
                >
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle"> خروج از حساب کاربری </span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input
          type="text"
          class="form-control search-input container-xxl border-0"
          placeholder="جستجو ..."
          aria-label="Search..."
        />
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div>
    </nav>
<!-- / Navbar -->



      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">تنظیمات حساب کاربری / </span>
   حساب های بانکی
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="profile-account.php"><i class="bx bx-user me-1"></i> پروفایل کاربری </a></li>
      <li class="nav-item"><a class="nav-link" href="account-settings-security.php"><i class="bx bx-lock-alt me-1"></i> امنیت </a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-detail me-1"></i> حساب های بانکی </a></li>
      <li class="nav-item"><a class="nav-link" href="account-settings-active.php"><i class="bx bx-link-alt me-1"></i> حساب های فعال با ایمیل </a></li>
    </ul>
  </div>
</div>

<!-- table -->
<hr class="my-0">
<br />
<div class="container-fluid" dir="rtl">
<div class="panel panel-default">
<div class="panel-body">
<div class="table-responsive">
  <a class="btn btn-primary" href="add-banks.php"><i class="bx bx-plus"></i>افزودن حساب بانکی</a>
  <br /> <br />
  <table id="table" class="table table-striped">
    <thead>
      <tr class="th_style_banks">
        <th>ردیف</th>
        <th>شماره کارت</th>
        <th>نام و نام خانوادگی صاحب کارت</th>
        <th>تاریخ انقضا</th>
        <th>CVV2</th>
        <th></th>
      </tr>
    </thead>

    <?php
      $query = $conn->query("SELECT * FROM `banks`") or die(mysqli_error());
      while($fetch = $query->fetch_array()){
    ?>

      <tr class="td_style">
        <td> <?php echo $fetch['id']?> </td>
        <td> <?php echo $fetch['numbers']?> 
          <span class="badge bg-label-primary"> <?php echo $fetch['primarys'] ?> </span>
        </td>
        <td> <?php echo $fetch['owners']?> </td>
        <td> <?php echo $fetch['exp']?> </td>
        <td> <?php echo $fetch['cvv']?> </td>

        <td> <center>
          <a class="btn btn-label-primary me-2 edit" data-id="<?= $fetch['id'] ?>" data-numbers="<?= $fetch['numbers'] ?>" data-owners="<?= $fetch['owners'] ?>" data-exp="<?= $fetch['exp'] ?>" data-cvv="<?= $fetch['cvv'] ?>" data-bs-toggle="modal" data-bs-target="#editbanksModal"><i class="glyphicon glyphicon-edit"> ویرایش </i></a>
          <a class="btn btn-label-secondary" onclick="confirmationDelete(this); return false;" href="?delete=<?= $fetch['id'] ?>"><i class="glyphicon glyphicon-remove"> حذف </i></a>
        </center> </td>
      </tr>

    <?php
      }
    ?>

  </table>
</div> </div>
</div> </div>
<br /> <br />
<!--/ table -->

<!-- edit banks -->
<div class="modal fade" id="editbanksModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>ویرایش حساب بانکی</h3>
        </div>

        <form action="banks.php" method="post" enctype="multipart/form-data" class="row g-3">

          <input type="text" name="id" class="form-control" id="editID" style="display: none;" >

          <div class="col-12">
            <label class="form-label w-100 text_idb margin-title" for="numbers">شماره کارت</label>
            <div class="input-group input-group-merge">
              <input type="text" class="form-control" name="numbers" maxlength="16" placeholder="****-****-****-****" id="editNumbers" required = "required" />
          </div>

          <div class="col-12 col-md-6">
            <label class="form-label text_idb margin_record" for="owners">مشخصات صاحب کارت</label>
            <input type="text" class="form-control" name="owners" placeholder="نام و نام خانوادگی" id="editOwners" required = "required" />
          </div>

          <div class="col-12 col-md-6">
            <label class="form-label text_idb margin_record" for="exp">تاریخ انقضا کارت</label>
            <input type="text" class="form-control" name="exp" placeholder="ماه/سال" id="editExp" required = "required" />
          </div>

          <div class="col-12 col-md-6">
            <label class="form-label text_idb margin_record" for="cvv">CVV2</label>
            <input type="text" class="form-control" name="cvv" id="editCvv" required = "required" />
          </div>

          <div class="col-12 text-center margin_record">
            <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3" name="edit">
              <ahref="banks_query.php">
              تایید
            </button>
            <button type="reset" class="btn btn-label-secondary mt-3" data-bs-dismiss="modal" aria-label="Close">انصراف</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!--/ edit banks -->

          </div>
          <!-- / Content -->

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div
    class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column"
  >
    <div class="mb-2 mb-md-0">
      <div class="footer-link fw-bolder">ایجاد شده در سال</div>
      <script>
        document.write(new Date().getFullYear());
      </script>
    </div>
  </div>
</footer>
<!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

  </div>
  <!-- / Layout wrapper -->

<!-- Core JS -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/js/menu.js"></script>

<!-- Main JS -->
  <script src="assets/js/main.js"></script>

<!-- Page JS -->
  <script src = "assets/js/jquery.dataTables.js"> </script>
  <script src = "assets/js/dataTables.bootstrap.js"> </script>

<!-- edit script -->
  <script>
    let editBtns = document.querySelectorAll('.edit');
    let editID = document.querySelector('#editID');
    let editNumbers = document.querySelector('#editNumbers');
    let editOwners = document.querySelector('#editOwners');
    let editExp = document.querySelector('#editExp');
    let editCvv = document.querySelector('#editCvv');

    editBtns.forEach(editBtn => {
      editBtn.addEventListener('click', () => {
        editID.value = editBtn.dataset.id
        editNumbers.value = editBtn.dataset.numbers
        editOwners.value = editBtn.dataset.owners
        editExp.value = editBtn.dataset.exp
        editCvv.value = editBtn.dataset.cvv
      })
    })
  </script>

<!-- delete script -->
  <script type = "text/javascript">
    function confirmationDelete(anchor){
      var conf = confirm(" آیا مطمئن به حذف این حساب بانکی هستید؟ ");
      if(conf){
        window.location = anchor.attr("href");
      }
    } 
  </script>

</body>

</html>
