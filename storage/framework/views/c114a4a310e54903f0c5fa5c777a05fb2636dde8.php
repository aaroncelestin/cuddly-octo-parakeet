<!DOCTYPE html>
<!-- guest.blade.php -->
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Primetime Physical Therapy')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </head>
    <body>
    <div class="container mx-auto min-w-full min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="h-full w-full z-10 flex flex-col sm:justify-center items-center pt-1 mt-0 sm:pt-0">
            <picture class="h-fit w-fit mt-20 z-20 justify-center">
                <img src ="<?php echo e(asset('img/primetime622px.png')); ?>">
		    </picture>
        </div>
        <!--slot start -->
            <?php echo e($slot); ?>

        <!--slot finish-->    
        </div>
    </body>
    <!-- guest.blade.php END -->
</html>



<?php /**PATH C:\xampp\htdocs\primetime\resources\views/layouts/guest.blade.php ENDPATH**/ ?>