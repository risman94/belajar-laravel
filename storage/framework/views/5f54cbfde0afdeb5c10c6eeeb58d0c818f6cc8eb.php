<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>halaman single !</p>
                    <hr>
                    <img src="/fotos/<?php echo e($home->foto); ?>"><hr>
                    <h3> Title : <?php echo e($home->title); ?> </h3><hr>
                    <h3> Description : <?php echo e($home->description); ?> </h3><hr>
                    <h3> Price : <?php echo e($home->price); ?> </h3><hr>
                    <h3> Kategori : <?php echo e($home->kategori->name_kategori); ?> </h3><hr>

                    <a class="btn btn-default" href="/home/<?php echo e($home->id); ?>/edit" role="button">edit</a>

                    <form action="/home/<?php echo e($home->id); ?>" method="post"><br>
                        <input type="submit" name="submit" value="delete"><br>
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>