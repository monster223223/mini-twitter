<?php $__env->startSection('content'); ?>
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card upper">
                <div class="card-header">
                    <?php echo e(__('New Tweet')); ?>

                </div>
                <div class="card-body">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div><br />
                    <?php endif; ?>
                    <form method="post" action="<?php echo e(route('tweets.store')); ?>">
                        <div class="form-group">
                            <?php echo csrf_field(); ?>
                            <label for="name"><?php echo e(__('Tweet Text')); ?>:</label>
                            <textarea  rows = "5" cols = "50" class="form-control" name="tweet_text"></textarea>
                            <textarea  style="display: none;" class="form-control" name="user_email" disabled><?php echo e(Auth::user()->email); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Tweet')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\Mini-Twitter\Mini-Twitter\resources\views/tweets/create.blade.php ENDPATH**/ ?>