<?php $__env->startSection('content'); ?>

<?php if(Session::has('info')): ?>
    <div class="row">
        <div class="col-md-12"><p class="alert alert -info"><?php echo e(Session::get('info')); ?></p></div>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-12"><a href="<?php echo e(route('admin.create')); ?>" class="btn btn-success">New Post </a></div>
</div>

<hr>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-md-12"><p><strong><?php echo e($post['title']); ?></strong> <a href="<?php echo e(route('admin.edit', ['id' => $index])); ?>">Edit </a></p></div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Desktop\INHA (2 course)\Semester ll\Internet Programming\labs\lab-8-Dooweed-1\resources\views/admin/index.blade.php ENDPATH**/ ?>