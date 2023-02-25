<?php $__env->startSection('content'); ?>
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                <?php echo e(__('My Tweets')); ?>

            </div>
            <div class="card-body">
                <div class="uper">
                    <?php if(session()->get('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div><br />
                    <?php endif; ?>
                    <table class="table table-striped">
                        <tbody>
                            <?php $__currentLoopData = $tweets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="col-md-11"><?php echo e($tweet->tweet_text); ?></td>
                                    <td class="col-md-1">
                                        <form action="<?php echo e(route('tweets.destroy', $tweet->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-danger" type="submit"><?php echo e(__('Delete')); ?></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <hr /><br />
                <div class="container">
                    <div class="row justify-content-center">
                        <?php echo $tweets->render(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\Mini-Twitter\Mini-Twitter\resources\views/tweets/index.blade.php ENDPATH**/ ?>