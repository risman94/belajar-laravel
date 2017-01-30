<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    halaman edit !

                    <form action="/home/produk/<?php echo e($home->id); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><br>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Gambar</label>
                            <div class="col-md-8">
                                <input type="file" name="foto" value="<?php echo e($home->foto); ?>"><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Title</label>
                            <div class="col-md-8">
                                <input name="title" type="text" class="form-control" placeholder="title" value="<?php echo e($home->title); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" rows="3" placeholder="Keterangan"><?php echo e($home->description); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Price</label>
                            <div class="col-md-8">
                                <input name="price" type="number" class="form-control" placeholder="price" value="<?php echo e($home->price); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Kategori</label>
                            <div class="col-md-8">
                                <select name="name_kategori" class="form-control" value="<?php echo e($home->name_kategori); ?>">
                                    <option></option>
                                    <option value="1">fashion</option>
                                    <option value="2">elektronik</option>
                                    <option value="3">olahraga</option>
                                    <option value="4">musik</option>
                                    <option value="5">properti</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" name="submit" value="edit"><br>
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="_method" value="PUT">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>