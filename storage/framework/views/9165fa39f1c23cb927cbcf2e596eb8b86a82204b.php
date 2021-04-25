<?php $__env->startSection('content'); ?>
    <div class="col-md-12 text-center">
        <h1 class="post-title"><?php echo e($post['title']); ?></h1>
        <p><?php echo e($post['content']); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Desktop\INHA (2 course)\Semester ll\Internet Programming\labs\lab-8-Dooweed-1\resources\views/blog/post.blade.php ENDPATH**/ ?>