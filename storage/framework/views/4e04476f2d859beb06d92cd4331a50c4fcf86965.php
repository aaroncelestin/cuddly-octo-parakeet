
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
<?php echo $__env->yieldContent('content'); ?>
<footer>
    <p class ="text-sm text-slate-400">Copyright 2022 Primetime Physical Therapy LLC</p>
</footer>
</body>
</html>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\primetime\resources\views/layouts/layout.blade.php ENDPATH**/ ?>