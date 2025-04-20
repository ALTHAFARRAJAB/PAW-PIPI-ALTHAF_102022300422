

<?php $__env->startSection('title', 'Dashboard Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center mt-5 mt-lg-7">
        <div class="col-xl-10">
            <div class="bg-white rounded-4 shadow p-5 d-flex flex-column flex-lg-row align-items-center">
                <!-- Icon -->
                <div class="bg-grey rounded-circle d-flex align-items-center justify-content-center me-lg-5 mb-4 mb-lg-0 shadow" style="width: 200px; height: 200px; overflow: hidden;">
                    <img src="<?php echo e(asset('images/logo-ead.png')); ?>" alt="Logo EAD" style="max-width: 80%; max-height: 80%;">
                </div>
                <!-- Text Content -->
                <div class="text-center text-lg-start">
                    <h1 class="fw-bold display-5 mb-2"><?php echo e($salam); ?>, <span class="text-primary"><?php echo e($nama); ?></span>!</h1>
                    <p class="lead text-muted mb-4">Selamat datang di dashboard mahasiswa Anda</p>

                    <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-4 fs-5 text-muted">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock me-2 text-primary"></i>
                            <span>Waktu akses: <strong class="text-dark"><?php echo e($waktu); ?></strong></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-event me-2 text-primary"></i>
                            <span>Tanggal akses: <strong class="text-dark"><?php echo e($tanggal); ?></strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rafif\Documents\Kuliah\Semester 6\Modul3PAW\TP_MODUL_3_REG\resources\views/dashboard.blade.php ENDPATH**/ ?>