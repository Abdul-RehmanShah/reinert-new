

<?php $__env->startSection('page_title', 'Create Office Data'); ?>


<?php $__env->startSection('content'); ?>
<body>
    <div class="card"> 
    <form method="post" action="<?php echo e(route('stoor')); ?>">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('post'); ?>

        <h4 class="card-title">Büro Information</h4>
        <div>
            <?php if($errors->any()): ?>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
            <?php endif; ?>
            </div>
        <div class="form-group row">
            <label
            for="Floor_id"
            class="col-sm-3 text-end control-label col-form-label"
            >Etage-ID</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Floor_id" 
                name="Floor_id"
                placeholder=""
            />
            </div>
        </div>
        </div>
        <div class="form-group row">
            <label
            for="Name"
            class="col-sm-3 text-end control-label col-form-label"
            >Name</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Name" 
                name="Name"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="size"
            class="col-sm-3 text-end control-label col-form-label"
            >Größe</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="size" 
                name="size"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="NoOfRooms"
            class="col-sm-3 text-end control-label col-form-label"
            >Anzahl der Zimmer</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="NoOfRooms" 
                name="NoOfRooms"
                placeholder=""
            />
            </div>
        </div>
        
        <div class="border-top">
        <div class="card-body d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
            Submit
        </button>
        </div>
        </div>


    </form>
</body>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\rental_project\resources\views/createoffice.blade.php ENDPATH**/ ?>