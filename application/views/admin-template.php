<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Clinique</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/favicon.png')?>" rel="icon">
    <link href="<?php echo base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css')?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/select2.min.css')?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block" >Clinique - ADMIN</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->


    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            
            <!-- End Search Icon-->
            <!-- End Notification Nav -->


            <!-- End Messages Nav -->
            <!-- End Profile Nav -->

        </ul>
    </nav>
    <!-- End Icons Navigation -->

</header>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Patient</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('admin/patient/liste') ?>" class="active">
                        <i class="bi bi-circle"></i><span>Patient-Liste</span>
                    </a>
                </li>
				<li>
                    <a href="<?php echo base_url('admin/patient/new') ?>" class="active">
                        <i class="bi bi-circle"></i><span>Patient-Nouveau</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Type d'acte</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('admin/type_acte/liste') ?>" class="active">
                        <i class="bi bi-circle"></i><span>Type d'acte-Liste</span>
                    </a>
                </li>
				<li>
                    <a href="<?php echo base_url('admin/type_acte/new') ?>" class="active">
                        <i class="bi bi-circle"></i><span>Type d'acte-Nouveau</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Type de depense</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('admin/type_depense/liste') ?>" class="active">
                        <i class="bi bi-circle"></i><span>Type de depense-Liste</span>
                    </a>
                </li>
				<li>
                    <a href="<?php echo base_url('admin/type_depense/new') ?>" class="active">
                        <i class="bi bi-circle"></i><span>Type de depense-Nouveau</span>
                    </a>
                </li>
            </ul>
        </li>
		
        <!-- End Forms Nav -->
        <!-- End Tables Nav -->
        <!-- End Icons Nav -->
    </ul>
</aside>
<!-- End Sidebar-->

<?php if(isset($page)){
	include($page);
 }?>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Clinique</span></strong>. Tous droits réservés.
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url('assets/plugins/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/chart.js/chart.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/quill/quill.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/php-email-form/validate.js')?>"></script>
<script src="<?php echo base_url('assets/js/select2.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/html-duration-picker.min.js')?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('assets/js/main.js')?>"></script>
<script src="<?php echo base_url('assets/js/receipt.js')?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.js-example-basic-single').select2();
	});
</script>
<?php if(isset($product_sales)) { 
	$names = [];
	$sales = [];
	forEach($product_sales as $prod){
		$names[] = $prod->product_name;
		$sales[] = $prod->sales;
	}
	$sales[] = 0;
	$sales[] = 10;
?>

<script>
        const labels = <?php echo json_encode($names) ?>;

        const data = {
            labels: labels,
            datasets: [{
                label: 'nombre de ventes',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data:<?php echo json_encode($sales);?>
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('chart-product-sales'),
            config
        );
    </script>
<?php } ?>
<?php if(isset($receipt_sales)) { 
	$names = [];
	$sales = [];
	forEach($receipt_sales as $rec){
		$names[] = $rec->receipt_name;
		$sales[] = $rec->sales;
	}
	$sales[] = 0;
	$sales[] = 10;
?>

<script>
        const labels = <?php echo json_encode($names) ?>;

        const data = {
            labels: labels,
            datasets: [{
                label: 'nombre de ventes',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data:<?php echo json_encode($sales);?>
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('chart-receipt-sales'),
            config
        );
    </script>
<?php } ?>
</body>

</html>
