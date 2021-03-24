<div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <?php if(Route::has('login')): ?>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 underline">Dashboard</a>
                <a href="<?php echo e(url('/about')); ?>" class="text-sm text-gray-700 underline">about</a>
                <a href="<?php echo e(url('/repairers')); ?>" class="text-sm text-gray-700 underline">Repairers</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>
                <a href="<?php echo e(url('/about')); ?>" class="text-sm text-gray-700 underline">about</a>
                <a href="<?php echo e(url('/repairers')); ?>" class="text-sm text-gray-700 underline">Repairers</a>
                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>       
 </div>
<?php /**PATH C:\Users\Manten\Desktop\becode\Exercises\04.SP\king-size\resources\views/includes/header.blade.php ENDPATH**/ ?>