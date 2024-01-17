

<?php $__env->startSection('page_title', 'Create Floor Data'); ?>


<?php $__env->startSection('content'); ?>
<body>
    <div class="card"> 
    <form method="post" action="<?php echo e(route('stor')); ?>">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('post'); ?>

        <h4 class="card-title">Etage Information</h4>
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
            for="building_id"
            class="col-sm-3 text-end control-label col-form-label"
            >Gebäude-ID</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="building_id" 
                name="building_id"
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
            for="NoOfOffices"
            class="col-sm-3 text-end control-label col-form-label"
            >Anzahl der Geschäftsräume</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="NoOfOffices" 
                name="NoOfOffices"
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



<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\rental_project\resources\views/createfloor.blade.php ENDPATH**/ ?>