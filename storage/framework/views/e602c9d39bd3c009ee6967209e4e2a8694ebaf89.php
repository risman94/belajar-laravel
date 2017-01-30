<?php $__env->startSection('isi'); ?>
<div class="container col-md-12 col-lg-12 col-sm-12 c-produk">
    <center><h2><?php echo e($kategori->name_kategori); ?></h2></center><br><br> 
    <div class="row">
        <?php $__currentLoopData = $kategori->home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="col-sm-6 col-md-3">
            <a href="/kategori/produk/<?php echo e($home->id); ?>" class="thumbnail">
                <img src="/fotos/<?php echo e($home->foto); ?>" alt="..." class="img-produk">
                <div class="caption">
                    <h4><center><?php echo e($home->title); ?></center></h4>
                    <p><center> Rp. <?php echo e($home->price); ?></center></p>
                    <!--p><a href="/kategori/produk/<?php echo e($home->id); ?>" class="btn btn-primary" role="button">Detail</a></p-->
                </div>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
    <p class="back"><a href="/" class="btn btn-warning" role="button"> Back to home</a></p>
</div>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>