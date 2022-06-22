<!DOCTYPE html>
<!-- dashboard.blade.php -->
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
	
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
		<!-- Required meta tags -->
		<meta charset="utf-8">
  



        <title><?php echo e(config('app.name', 'Primetime Physical Therapy')); ?></title>

        
        

        <!-- Styles -->
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
		<link rel="stylesheet" href="css/navstyle.css">
		<!--<link rel="stylesheet" href="css/app.css">-->

        <!-- Scripts -->
		<!--<script src="<?php echo e(asset('js/app.js')); ?>"></script>-->
		
    </head>
    <body>
	<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Welcome, <?php echo e(Auth::user()->name); ?>!</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- partial -->
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
<script src="<?php echo e(asset('js/navscript.js')); ?>"></script>

<form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
<button type="button" class="btn btn-outline-primary" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <?php echo e(__('Log Out')); ?></button>
</form>

	</body>
	</html>


    


 

		
<?php /**PATH C:\xampp\htdocs\primetime\resources\views/dashboard.blade.php ENDPATH**/ ?>