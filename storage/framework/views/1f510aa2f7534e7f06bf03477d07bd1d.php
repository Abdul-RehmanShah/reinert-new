

<?php $__env->startSection('page_title', 'Create Customer Data'); ?>


<?php $__env->startSection('content'); ?>
<body>
    <div class="card"> 
    <form method="post" action="<?php echo e(route('store')); ?>">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('post'); ?>

        <h4 class="card-title">Kunden Information</h4>
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
            for="Vorname"
            class="col-sm-3 text-end control-label col-form-label"
            >Vorname</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Vorname" 
                name="Vorname"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Nachname"
            class="col-sm-3 text-end control-label col-form-label"
            >Nachname</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Nachname"
                name="Nachname"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Vollname"
            class="col-sm-3 text-end control-label col-form-label"
            >Vollname</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Vollname"
                name="Vollname"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Email"
            class="col-sm-3 text-end control-label col-form-label"
            >Email</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Email"
                name="Email"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="kontakt"
            class="col-sm-3 text-end control-label col-form-label"
            >Kontakt</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="kontakt"
                name="kontakt"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="konto_nummer"
            class="col-sm-3 text-end control-label col-form-label"
            >Konto Nummer</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="konto_nummer"
                name="konto_nummer"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="steuer_id"
            class="col-sm-3 text-end control-label col-form-label"
            >Steuer Id</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="steuer_id"
                name="steuer_id"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="steuer_Prozent"
            class="col-sm-3 text-end control-label col-form-label"
            >Steuer Prozent</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="steuer_Prozent"
                name="steuer_Prozent"
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



<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\rental_project\resources\views/createcustomer.blade.php ENDPATH**/ ?>