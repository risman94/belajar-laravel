<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <li><a href="home/pemesanan">Pemesanan</a></li>
                            <li><a href="home/contact">Contact</a></li>
                        </div>
                        <div class="row">
                            <h3>create produk</h3>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <li>
                                    <a href="/home/<?php echo e($kategori->id); ?>"><?php echo e($kategori->name_kategori); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    </div>
                    <a class="btn btn-default" href="/home/create" role="button">create</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>