<?php $__env->startSection('content'); ?>


<div class="container col-md-12 col-lg-12 col-sm-12">
	<?php echo e($kategori->name_kategori); ?> :
    <div class="row">
        <?php $__currentLoopData = $kategori->home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="/fotos/<?php echo e($kategori->foto); ?>" alt="...">
                <div class="caption">
                    <h3><?php echo e($kategori->title); ?></h3>
                    <p> Rp. <?php echo e($kategori->price); ?></p>
                    <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>   
<?php echo $__env->make('layouts.view', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>