<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    halaman edit !

                    <form action="/home/produk/<?php echo e($home->id); ?>" method="post" enctype="multipart/form-data"><br>
                        <input type="file" name="foto" value="<?php echo e($home->foto); ?>"><br>
                        <input type="text" name="title" value="<?php echo e($home->title); ?>"><br>
                        <textarea name="description" rows="8" cols="40"> <?php echo e($home->description); ?> </textarea><br>
                        <input type="number" name="price" value="<?php echo e($home->price); ?>"><br>
                        <select name="name_kategori" value="<?php echo e($home->name_kategori); ?>">
                            <option></option>
                            <option value="1">fashion</option>
                            <option value="2">elektronik</option>
                        </select><br>

                        <input type="submit" name="submit" value="edit"><br>
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="PUT">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>