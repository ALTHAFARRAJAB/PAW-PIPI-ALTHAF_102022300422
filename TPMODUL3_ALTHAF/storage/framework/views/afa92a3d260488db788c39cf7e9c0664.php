<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-card {
            background: #f8f9fa;
            border-left: 6px solid #0d6efd;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .custom-header {
            font-weight: 700;
            color: #0d6efd;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</body>
</html>
<?php /**PATH C:\Users\Rafif\Documents\Kuliah\Semester 6\Modul3PAW\TP_MODUL_3_REG\resources\views/layouts/app.blade.php ENDPATH**/ ?>