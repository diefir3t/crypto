<?php
// includes/header.php
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - صرافی ارز دیجیتال' : 'صرافی ارز دیجیتال - خانه'; ?></title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">

    <!-- فونت وزیرمتن -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet">

    <!-- آیکون‌ها -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- استایل‌های پایه (همیشه لود می‌شود) -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">

    <!-- استایل‌های اختصاصی صفحات -->
    <?php
    $default_css = ['hero.css', 'markets.css', 'features.css', 'footer.css'];
    $page_css = isset($page_css) && is_array($page_css) ? $page_css : $default_css;
    foreach ($page_css as $css) {
        echo '<link rel="stylesheet" href="css/' . $css . '">' . "\n    ";
    }
    ?>
</head>
<body>

<!-- ====== هدر سایت ====== -->
<header class="site-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <!-- لوگو -->
            <a class="navbar-brand" href="index.php">
                <i class="fa-solid fa-bitcoin-sign"></i>
                CryptoEx
            </a>

            <!-- دکمه منو در موبایل -->
            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- منوی اصلی -->
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/markets.php">بازارها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/trade.php">معامله</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/wallet.php">کیف پول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/about.php">درباره ما</a>
                    </li>
                </ul>

                <!-- دکمه‌های ورود و ثبت نام -->
                <div class="d-flex">
                    <a href="pages/login.php" class="btn-login">ورود</a>
                    <a href="pages/register.php" class="btn-register">ثبت نام</a>
                </div>
            </div>
        </nav>
    </div>
</header>
