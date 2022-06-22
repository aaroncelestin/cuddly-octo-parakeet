<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primetime Physical Therapy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    </head>
    <body>

    <div class="container mx-auto min-w-full min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="h-full w-full z-10 flex flex-col sm:justify-center items-center pt-1 mt-0 sm:pt-0">
            <picture class="h-fit w-fit mt-20 z-20 justify-center">
                <img src ="<?php echo e(asset('img/primetime622px.png')); ?>">
		    </picture>
        </div>
       





        <!--<div class="container static min-w-full bg-gray-100 dark:bg-gray-900">
            <picture class="flex justify-center inset-x-0 top-0">
                <img src="<?php echo e(asset('img/primetime622px.png')); ?>" alt="pt-logo">
		    </picture>-->
       
            <?php if(Route::has('login')): ?>
                <div class="container static flex-col inset-x-0 space-y-4 pt-24 bottom-0">
                    <?php if(auth()->guard()->check()): ?>
                        <div class = "flex justify-center pt-6"> 
                          <p class="md:auto-rows-min text-2xl overline text-slate-400 hover:text-sky-400"><a href="<?php echo e(url('/dashboard')); ?>"> Dashboard</a></p>
                        </div>
                        <div class = "flex justify-center pt-6"> 
                          <p class="md:auto-rows-min text-2xl overline text-slate-400 hover:text-sky-400"><a href="<?php echo e(url('/logout')); ?>"> Logout</a></p>
                        </div>
                    <?php else: ?>
                        <div class ="flex justify-center pt-6"> 
                            <p class="md:auto-rows-min text-2xl overline text-slate-400 hover:text-sky-400"><a href="<?php echo e(route('login')); ?>"> Log in</a>
                        </div>
                    <?php if(Route::has('register')): ?>
                        <div class ="flex justify-center pt-6 pb-32"> 
                            <p class ="md:auto-rows-min text-2xl overline text-slate-400 hover:text-sky-400"><a href="<?php echo e(route('register')); ?>">Register</a></p>
                        </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            </div>
    <footer>
        <p class ="text-sm  text-slate-400">Copyright 2022 Primetime Physical Therapy LLC</p>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\primetime\resources\views/welcome.blade.php ENDPATH**/ ?>