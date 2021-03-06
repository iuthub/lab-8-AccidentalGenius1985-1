<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo e(route('admin.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($postId); ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post['title']); ?>">
                </div>
                <div class="form-group">
                    <label for="content">Content </label>
                    <input type="text" class="form-control" id="content" name="content" value="<?php echo e($post['content']); ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Desktop\INHA (2 course)\Semester ll\Internet Programming\labs\lab-8-Dooweed-1\resources\views/admin/edit.blade.php ENDPATH**/ ?>