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
                    <?php echo e(__('List of Users')); ?>

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
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="col-md-11"><?php echo e($user->email); ?></td>
                                <td class="col-md-1">
                                    <form action="<?php echo e(route('follows.store',['$follow->user_email_1','$follow->user_email_2'])); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input  id="user_email_2" type="hidden" name="user_email_2" value="<?php echo e($user->email); ?>" style="display: none;" />
                                        <button class="btn btn-success" type="submit"><?php echo e(__('Follow')); ?></button>
                                    </form>
                                </td>
                                <td class="col-md-1">
                                    <form action="<?php echo e(route('follows.destroy', $user->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <input  id="user_email_2" type="hidden" name="user_email_2" value="<?php echo e($user->email); ?>" style="display: none;" />
                                        <button class="btn btn-danger" type="submit"><?php echo e(__('UnFollow')); ?></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <hr /><br />
                <div class="container">
                    <div class="row justify-content-center">
                        <?php echo $users->render(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\Mini-Twitter\Mini-Twitter\resources\views/follows/userList.blade.php ENDPATH**/ ?>