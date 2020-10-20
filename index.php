<?php

$jsonPrice = file_get_contents('data/price.json');
$objPrice = json_decode($jsonPrice);

$jsonSpec = file_get_contents('data/spec.json');
$objSpec = json_decode($jsonSpec);

$jsonIcon = file_get_contents('data/icon.json');
$objIcon = json_decode($jsonIcon);

$jsonModul = file_get_contents('data/modul.json');
$objModul = json_decode($jsonModul);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Landing Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar_1">
        <div class="container">
            <div class="collapse navbar-collapse">
                <span class="fa-stack">
                    <i class="fas fa-bookmark fa-stack-2x text-primary"></i>
                    <i class="fas fa-tag fa-stack-1x fa-inverse"></i>
                </span>
                <span class="promo">Gratis Ebook 9 Cara Cerdas Menggunakan Domain
                    [x]</span>
            </div>
            <div class="collapse navbar-collapse justify-content-end">
                <div class="navbar-nav">
                    <a class="nav-link" href="#"><i class="fas fa-phone-alt"></i>&nbsp; 0274-5305505</a>
                    <a class="nav-link" href="#"><i class="fas fa-comment-alt"></i>&nbsp; Live Chat</a>
                    <a class="nav-link" href="#"><i class="fas fa-user-circle"></i>&nbsp; Member Area</a>
                </div>
            </div>
        </div>
    </nav>

    <hr class="nav_hr">

    <nav class="navbar navbar-expand-lg navbar-light navbar_2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/niagahoster-logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Hosting</a>
                    <a class="nav-link" href="#">Domain</a>
                    <a class="nav-link" href="#">Server</a>
                    <a class="nav-link" href="#">Website</a>
                    <a class="nav-link" href="#">Afiliasi</a>
                    <a class="nav-link" href="#">Promo</a>
                    <a class="nav-link" href="#">Pembayaran</a>
                    <a class="nav-link" href="#">Review</a>
                    <a class="nav-link" href="#">Kontak</a>
                    <a class="nav-link" href="#">Blog</a>
                </div>
            </div>
        </div>
    </nav>

    <hr class="nav_hr">

    <div class="promo_php">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>PHP Hosting</h1>
                    <h2>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
                    <p></p>
                    <p><i class="fas fa-check-circle"></i> Solusi PHP untuk performa query yang lebih cepat</p>
                    <p><i class="fas fa-check-circle"></i> Konsumsi memori yang lebih rendah</p>
                    <p><i class="fas fa-check-circle"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</p>
                    <p><i class="fas fa-check-circle"></i> Fitur enkripsi IonCube dan Zend Guard Loaders</p>
                </div>
                <div class="col-sm-6">
                    <img src="assets/svg/Hosting_PHP.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="promo_tool">
        <div class="container">
            <div class="row text-center">
                <?php foreach ($objIcon->tool as $icon) { ?>
                    <div class="col-sm-4">
                        <div class="icon_feature_1">
                            <embed src="<?= $icon->url ?>">
                        </div>
                        <p><?= $icon->caption ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="promo_paket">
        <div class="container">
            <div class="text-center">
                <h3>Paket Hosting Singapura yang Tepat</h3>
                <h4>Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
            </div>
            <div class="container jenis_paket">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="paket_item">
                            <div class="title">
                                <h4>Bayi</h4>
                            </div>

                            <div class="price">
                                <p class="old_price"><?= $objPrice->bayi->old_price ?></p>
                                <p class="new_price"><?= $objPrice->bayi->new_price ?>/ bln</p>
                            </div>

                            <div class="user">
                                <p><strong><?= $objPrice->bayi->user ?></strong> Pengguna Terdaftar</p>
                            </div>

                            <div class="feature">
                                <p><strong>0.5X RESOURCE POWER</strong></p>
                                <P><strong>500 MB</strong> Disk Space</P>
                                <p><strong>Unlimited</strong> Bandwidth</p>
                                <p><strong>Unlimited</strong> Databases</p>
                                <p><strong>1</strong> Domain</p>
                                <p><strong>Instant</strong> Backup</p>
                                <p><strong>Unlimited SSL</strong> Gratis Selamanya</p>
                            </div>

                            <button type="button" class="btn btn-outline-dark btn_paket">Pilih Sekarang</button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="paket_item">
                            <div class="title">
                                <h4>Pelajar</h4>
                            </div>

                            <div class="price">
                                <p class="old_price"><?= $objPrice->pelajar->old_price ?></p>
                                <p class="new_price"><?= $objPrice->pelajar->new_price ?>/ bln</p>
                            </div>

                            <div class="user">
                                <p><strong><?= $objPrice->pelajar->user ?></strong> Pengguna Terdaftar</p>
                            </div>

                            <div class="feature">
                                <p><strong>1X RESOURCE POWER</strong></p>
                                <P><strong>Unlimited</strong> Disk Space</P>
                                <p><strong>Unlimited</strong> Bandwidth</p>
                                <p><strong>Unlimited</strong> POP3 Email</p>
                                <p><strong>Unlimited</strong> Database</p>
                                <p><strong>10</strong> Addon Domains</p>
                                <p><strong>Instant</strong> Backup</p>
                                <p><strong>Domain Gratis</strong> Selamanya</p>
                                <p><strong>Unlimited SSL</strong> Gratis Selamanya</p>
                            </div>

                            <button type="button" class="btn btn-outline-dark btn_paket">Pilih Sekarang</button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="paket_item paket_primary">
                            <div class="title">
                                <h4>Personal</h4>
                            </div>

                            <div class="price">
                                <p class="old_price"><?= $objPrice->personal->old_price ?></p>
                                <p class="new_price"><?= $objPrice->personal->new_price ?>/ bln</p>
                            </div>

                            <div class="user">
                                <p><strong><?= $objPrice->personal->user ?></strong> Pengguna Terdaftar</p>
                            </div>

                            <div class="feature">
                                <p><strong>2X RESOURCE POWER</strong></p>
                                <P><strong>Unlimited</strong> Disk Space</P>
                                <p><strong>Unlimited</strong> Bandwidth</p>
                                <p><strong>Unlimited</strong> POP3 Email</p>
                                <p><strong>Unlimited</strong> Datbases</p>
                                <p><strong>Unlimited</strong> Addon Domains</p>
                                <p><strong>Instant</strong> Backup</p>
                                <p><strong>Domain Gratis</strong> Selamanya</p>
                                <p><strong>Unlimited SSL</strong> Gratis Selamanya</p>
                                <p><strong>Private</strong> Name Server</p>
                                <p><strong>SpamAssasin</strong> Mail Protection</p>
                            </div>

                            <button type="button" class="btn btn-primary btn_paket">Pilih Sekarang</button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="paket_item">
                            <div class="title">
                                <h4>Bisnis</h4>
                            </div>

                            <div class="price">
                                <p class="old_price"><?= $objPrice->bisnis->old_price ?></p>
                                <p class="new_price"><?= $objPrice->bisnis->new_price ?>/ bln</p>
                            </div>

                            <div class="user">
                                <p><strong><?= $objPrice->bisnis->user ?></strong> Pengguna Terdaftar</p>
                            </div>

                            <div class="feature">
                                <p><strong>3X RESOURCE POWER</strong></p>
                                <P><strong>Unlimited</strong> Disk Space</P>
                                <p><strong></strong> Bandwidth</p>
                                <p><strong>Unlimited</strong> POP3 Email</p>
                                <p><strong>Unlimited</strong> Databases</p>
                                <p><strong>Unlimited</strong> Addon Domains</p>
                                <p><strong>Magic Auto</strong> Backup & Restore</p>
                                <p><strong>Domain Gratis</strong> Selamanya</p>
                                <p><strong>Unlimited SSL</strong> Gratis Selamanya</p>
                                <p><strong>Private</strong> Name Server</p>
                                <p><strong>Prioritas</strong> Layanan Support</p>
                                <p class="text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p><strong>SpamExpert</strong> Pro Mail Protection</p>
                            </div>

                            <button type="button" class="btn btn-outline-dark btn_paket">Diskon 40%</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="promo_spec">
        <div class="container">
            <div class="text-center">
                <h3>Powerful dengan Limit PHP yang Lebih Besar</h3>
            </div>
            <div class="row mt-4 mb-5">
                <div class="col-sm-1"></div>
                
                <?php foreach ($objSpec as $spec) { ?>
                    <div class="col-sm-5">
                        <table class="table table-bordered">
                            <tbody>

                                <?php foreach ($spec as $data) { ?>
                                    <tr>
                                        <td><i class="fas fa-check-circle fa-2x"></i><?= $data ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <hr class="hr_paket">

    <div class="fitur_paket">
        <div class="container">
            <div class="text-center">
                <h3>Semua Paket Hosting Sudah Termasuk</h3>
            </div>
            <div class="row text-center">

                <?php foreach ($objIcon->feature as $icon) { ?>
                    <div class="col-sm-4 fitur_item">
                        <img src="<?= $icon->url ?>">
                        <h5><?= $icon->caption ?></h5>
                        <p><?= $icon->desc ?></p>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <hr class="hr_paket">

    <div class="promo_laravel">
        <div class="container">
            <div class="text-center">
                <h3>Mendukung Penuh Framework Laravel</h3>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="caption">
                        <p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami
                            mendukung penuh framework favorit Anda</p>
                    </div>

                    <div class="desc">
                        <p><i class="fas fa-check-circle"></i> Install Laravel <strong>1 klik</strong> dengan
                            Softaculous
                            Installer.</p>
                        <p><i class="fas fa-check-circle"></i> Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring,
                                json,</strong> dan <strong>fileinfo</strong></p>
                        <p><i class="fas fa-check-circle"></i> Tersedia <strong>Composer</strong> dan
                            <strong>SSH</strong>
                            untuk mengatasi packages pilihan Anda.</p>
                    </div>

                    <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>

                    <button type="button" class="btn btn-primary btn_paket">Pilih Hosting Anda</button>
                </div>
                <div class="col-sm-6">
                    <img src="assets/svg/Hosting_laravel.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="modul_info">
        <div class="container">
            <div class="text-center">
                <h3>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h3>
            </div>
            <div class="row">

                <?php foreach ($objModul as $modul) { ?>
                    <div class="col-sm-3">
                        <ul>
                            <?php foreach ($modul as $data) { ?>
                                <li><?= $data ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>

            </div>

            <div class="text-center">
                <button type="button" class="btn btn_paket">Selengkapnya</button>
            </div>
        </div>
    </div>

    <div class="promo_linux">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="caption">
                        <h2>Linux Hosting yang Stabil dengan Teknologi LVE</h2>
                    </div>

                    <div class="desc">
                        <p>
                            SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong>
                            dan
                            teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan
                            <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching. Apache load
                            balancer
                            berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong>
                            protection dan auto backup untuk keamanan website PHP Anda.
                        </p>
                    </div>

                    <button type="button" class="btn btn-primary btn_paket">Pilih Hosting Anda</button>
                </div>
                <div class="col-sm-6">
                    <img src="assets/images/Image support.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="social_media">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>Bagikan jika Anda menyukai halaman ini.</p>
                </div>
                <div class="col-sm-6">
                    <div class="icon_social_media">
                        <?php foreach ($objIcon->social_media as $icon) { ?>
                            <img src="<?= $icon->url ?>" alt="">
                            <span><?= $icon->number ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="support_call">
        <div class="container">
            <div class="contact_info">
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Perlu <strong>BANTUAN?</strong> Hubungi kami : <strong>0274-5305505</strong></h2>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn_paket"><i class="fas fa-comment-alt"></i>&nbsp; Live
                            Chat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="web_map">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="title">
                        <strong>HUBUNGI KAMI</strong>
                    </div>

                    <div class="list_info">
                        <p>0274-5305505</p>
                        <p>Senin - Minggu</p>
                        <p>24 Jam Nonstop</p>
                        <p>&nbsp;</p>
                        <p>Jl. Selokan Mataram Monjali</p>
                        <p>Karangjati MT I/304</p>
                        <p>Sinduadi, Mlati, Sleman</p>
                        <p>Yogyakarta 55284</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="title">
                        <strong>LAYANAN</strong>
                    </div>

                    <div class="list_info">
                        <p><a href="#">Domain</a></p>
                        <p><a href="#">Shared Hosting</a></p>
                        <p><a href="#">Cloud VPS Hosting</a></p>
                        <p><a href="#">Managed VPS Hosting</a></p>
                        <p><a href="#">Web Builder</a></p>
                        <p><a href="#">Keamanan SSL / HTTPS</a></p>
                        <p><a href="#">Jasa Pembuatan Website</a></p>
                        <p><a href="#">Program Affiliasi</a></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="title">
                        <strong>SERVICE HOSTING</strong>
                    </div>

                    <div class="list_info">
                        <p><a href="#">Hosting Murah</a></p>
                        <p><a href="#">Hosting Indonesia</a></p>
                        <p><a href="#">Hosting Singapura SG</a></p>
                        <p><a href="#">Hosting php</a></p>
                        <p><a href="#">Hosting Wordpress</a></p>
                        <p><a href="#">Hosting Laravel</a></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="title">
                        <strong>TUTORIAL</strong>
                    </div>

                    <div class="list_info">
                        <p><a href="#">Knowledgebase</a></p>
                        <p><a href="#">Blog</a></p>
                        <p><a href="#">Cara Pembayaran</a></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="title">
                        <strong>TENTANG KAMI</strong>
                    </div>

                    <div class="list_info">
                        <p><a href="#">Tim Niagahoster</a></p>
                        <p><a href="#">Karir</a></p>
                        <p><a href="#">Events</a></p>
                        <p><a href="#">Penawaran & Promo Spesial</a></p>
                        <p><a href="#">Kontak Kami</a></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="title">
                        <strong>KENAPA PILIH NIAGAHOSTER?</strong>
                    </div>

                    <div class="list_info">
                        <p><a href="#">Support Terbaik</a></p>
                        <p><a href="#">Garansi Harga Termurah</a></p>
                        <p><a href="#">Domain Gratis Selamanya</a></p>
                        <p><a href="#">Datacenter Hosting Terbaik</a></p>
                        <p><a href="#">Review Pelanggan</a></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="title">
                        <strong>NEWSLETTER</strong>
                    </div>

                    <div class="list_info">
                        <form class="form_subscribe">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Berlangganan</button>
                                </div>
                            </div>
                            <p>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</p>
                        </form>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="list_info">
                        <span class="icon_social_media_circle">
                            <i class="fab fa-facebook-f fa-2x fa-inverse"></i>
                        </span>
                        <span class="icon_social_media_circle">
                            <i class="fab fa-twitter fa-2x fa-inverse"></i>
                        </span>
                        <span class="icon_social_media_circle">
                            <i class="fab fa-google-plus-g fa-2x fa-inverse"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <dvi class="title">
                        <strong>PEMBAYARAN</strong>
                    </dvi>

                    <div class="pay_type">
                        <?php foreach ($objIcon->payment as $data) { ?>
                            <img src="<?= $data ?>">
                        <?php } ?>

                        <p>Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="web_footer">
        <div class="container">

            <hr class="hr_footer">

            <div class="row">
                <div class="col-sm-9">
                    <p>Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and
                        DC Biznet Technovillage Jakarta</p>
                    <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
                </div>
                <div class="col-sm-3">
                    <p>Syarat dan Ketentuan | Kebijakan Privasi</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="js/script.js"></script>
</body>

</html>