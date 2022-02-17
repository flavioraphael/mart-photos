<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<base href="<?= BASE_URL ?>" />
	<title>MARS PICTURE</title>
	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Não indexar nos buscadores -->
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">

	<!-- Google Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
	<!-- CSS Global Icons -->
	<link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
	<link rel="stylesheet" href="assets/vendor/icon-etlinefont/style.css">
	<link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
	<link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
	<link rel="stylesheet" href="assets/vendor/animate.css">
	<link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
	<link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
	<link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
	<link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
	<link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">

	<!-- CSS Unify -->
	<link rel="stylesheet" href="assets/css/unify-core.css">
	<link rel="stylesheet" href="assets/css/unify-components.css">
	<link rel="stylesheet" href="assets/css/unify-globals.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">


	<script>
		var base_url = '<?= BASE_URL ?>';
	</script>

</head>
<body class="external-page external-alt sb-r-c page-login onload-check">

<section id="content_wrapper">

	<?php echo $contents; ?>
</section>
<?php include("includes/footer.php"); ?>

<!-- JS Global Compulsory -->
<script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="assets/vendor/jquery.easing/js/jquery.easing.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

<!-- JS Unify -->
<script src="assets/js/hs.core.js"></script>
<script src="assets/js/components/hs.header.js"></script>
<script src="assets/js/helpers/hs.hamburgers.js"></script>
<script src="assets/js/components/hs.go-to.js"></script>

<!-- JS Custom -->
<script src="assets/js/custom.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
</body>
</html>
