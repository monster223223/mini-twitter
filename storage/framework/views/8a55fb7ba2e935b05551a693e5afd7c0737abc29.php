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
                <?php echo e(__('Tweets of followed users')); ?>

            </div>
            <div class="card-body">
                <div class="uper">
                    <?php if(session()->get('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                        <br />
                    <?php endif; ?>
                    <table class="table table-striped">
                        <tbody>
                            <?php $__currentLoopData = $timelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="col-md-11">
                                        <?php echo e($timeline->tweet_text); ?>

                                    </td>
                                        <td class="col-md-1">
                                            <?php echo e($timeline->user_email_2); ?>

                                        </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <hr />
                    <br />
                    <div class="container">
                        <div class="row justify-content-center">
                            <?php echo $timelines->render(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hashim\hashimphp\stocks\resources\views/timelines/timeline.blade.php ENDPATH**/ ?>