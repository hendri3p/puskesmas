<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pendaftaran Berobat</title>
    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/images/icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Logo_Bidan_Nyimas-3.png">
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="assets/oneui/css/oneui.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
    <link rel="stylesheet" href="assets/oneui/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/oneui/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="assets/oneui/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/oneui/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/oneui/js/plugins/dropzone/dist/min/dropzone.min.css">
</head>

<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image overflow-hidden" style="background-image: url('assets/images/nakes.jpg');">
            <div class="bg-primary-dark-op">
                <div class="content content-narrow content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-4 mb-8 text-center text-sm-left">
                        <div class="flex-sm-fill">
                            <h1 class="font-w600 text-white mb-2 " data-toggle="appear" data-timeout="250">Pendaftaran Berobat</h1>
                        </div>
                        <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                            <span class="" data-toggle="appear" data-timeout="350">
                                <a class="btn-primary px-4 py-2" data-toggle="click-ripple" href="<?= base_url('C_dashboard'); ?>">
                                    <i class="si si-home"></i> Kembali
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        <div class="content content-narrow">
            <div class="content">
                <!-- Basic -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title"></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="<?= base_url('C_daftarberobat/daftar'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="row push">
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="form-group">
                                        <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pasien_berobat">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_pasien_berobat" name="nama_pasien_berobat" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="s">S</label>
                                        <input type="text" class="form-control" id="s" name="s" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="o">O</label>
                                        <input type="text" class="form-control" id="o" name="o" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="a">A</label>
                                        <input type="text" class="form-control" id="a" name="a" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="p">P</label>
                                        <input type="text" class="form-control" id="p" name="p" required>
                                    </div>
                                    <div>
                                        <label for="tgl_berobat">Tanggal Berobat</label>
                                        <input type="date" class="form-control" id="tgl_berobat" name="tgl_berobat" placeholder="Tanggal Berobat">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-select">Jenis Pembayaran</label>
                                        <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" required>
                                            <option disabled>Pilih Jenis Pembayaran</option>
                                            <option>Umum</option>
                                            <option>BPJS</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-select">Jenis Poli</label>
                                        <select class="form-control" id="jenis_poli" name="jenis_poli" required>
                                            <option disabled>Pilih Jenis Poli</option>
                                            <option>KLinik Umum</option>
                                            <option>KIA KB</option>
                                            <option>BP Gigi</option>
                                            <option>Laboratorium</option>
                                            <option>Ruang Farmasi</option>
                                            <option>Klinik Gizi</option>
                                            <option>UGD</option>
                                            <option>Rawat Inap</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Page Content -->
                </div>
            </div>
        </div>
    </main>
    <!-- END Main Container -->
    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
    </footer>
    <!-- END Footer -->
    </div>
    <!-- END Page Container -->
    <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="assets/oneui/js/oneui.core.min.js"></script>
    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="assets/oneui/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="assets/oneui/js/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Page JS Code -->
    <script src="assets/oneui/js/pages/be_pages_dashboard.min.js"></script>
    <script src="assets/oneui/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/oneui/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/oneui/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="assets/oneui/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="assets/oneui/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="assets/oneui/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/oneui/js/plugins/dropzone/dropzone.min.js"></script>
    <script>
        jQuery(function() {
            One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);
        });
    </script>
</body>

</html>