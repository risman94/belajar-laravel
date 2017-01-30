<?php $__env->startSection('isi'); ?>
      
<!--div class="container col-md-12 col-lg-12 col-sm-12">
    <div class="row">
        <?php $__currentLoopData = $home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="/fotos/<?php echo e($home->foto); ?>" alt="...">
                <div class="caption">
                    <h3><?php echo e($home->title); ?></h3>
                    <p> Rp. <?php echo e($home->price); ?></p>
                    <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
</div-->

<div class="container col-md-12 col-lg-12 col-sm-12">
    <div class="row c-wlcm">
        <h2><center>Categories</center></h2><br><br>
        <div class=" col-md-1"></div>
        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="col-sm-6 col-md-2">
            <a href="/kategori/<?php echo e($kat->id); ?>" class="thumbnail t-kategori">
                <h4><?php echo e($kat->name_kategori); ?></h4>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <div class=" col-md-1"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>      

        
        

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>