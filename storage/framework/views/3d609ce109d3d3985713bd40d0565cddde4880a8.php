
<?php $__env->startSection('content'); ?>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 border">
        <?php for($i = 0; $i <= count((array)$repairers); $i++): ?>
        <ul>
            <h3><strong><?php echo e($repairers[$i]->name); ?></strong></h3>
            <li><?php echo e($repairers[$i]->email); ?></li>
            <li><?php echo e($info[$i]->location); ?></li>
            <li><?php echo e($info[$i]->specialties); ?></li>
        </ul>
        <?php endfor; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Manten\Desktop\becode\Exercises\04.SP\king-size\resources\views/pages/repairers.blade.php ENDPATH**/ ?>