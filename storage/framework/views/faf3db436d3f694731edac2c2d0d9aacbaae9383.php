<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo e(asset('img/Favicon.png')); ?>" type="image/png" />
	<!--plugins-->
	<?php echo $__env->make('include.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Affixcity</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
        <!--navigation-->
        <?php echo $__env->make("include.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--end navigation-->
        
		<!--start header -->
		<?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!--end header -->

		<?php echo $__env->yieldContent("wrapper"); ?>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	
	<?php echo $__env->make('include.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent("script"); ?>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\vesta\resources\views/layouts/main.blade.php ENDPATH**/ ?>