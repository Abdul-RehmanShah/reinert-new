

<?php $__env->startSection('page_title', 'Mietverträge erstellen'); ?>


<?php $__env->startSection('content'); ?>
<body>
    <div class="card"> 
    <form method="post" action="<?php echo e(route('stores')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('post'); ?>
        <h4 class="card-title">Mietverträge erstellen</h4>
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
            for="customer_id"
            class="col-sm-3 text-end control-label col-form-label"
            >Customer Id</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="customer_id"
                name="customer_id"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="office_id"
            class="col-sm-3 text-end control-label col-form-label"
            >Office Id</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="office_id"
                name="office_id"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Start_date"
            class="col-sm-3 text-end control-label col-form-label"
            >Start Date</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Start_date"
                name="Start_date"
                placeholder="tt-mm-jjjj"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="End_date"
            class="col-sm-3 text-end control-label col-form-label"
            >End date</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="End_date"
                name="End_date"
                placeholder="tt-mm-jjjj"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Contract_Period"
            class="col-sm-3 text-end control-label col-form-label"
            >Contract Period</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Contract_Period"
                name="Contract_Period"
                placeholder=" Monate"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Year_Increment"
            class="col-sm-3 text-end control-label col-form-label"
            >Year Increment</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Year_Increment"
                name="Year_Increment"
                placeholder="€"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="MieteProM2"
            class="col-sm-3 text-end control-label col-form-label"
            >Miete Pro Quadratmeter</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="MieteProM2"
                name="MieteProM2"
                placeholder="M2"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Reinigung_Kosten"
            class="col-sm-3 text-end control-label col-form-label"
            >Reinigung Kosten</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Reinigung_Kosten"
                name="Reinigung_Kosten"
                placeholder="€"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Extra_Land_size"
            class="col-sm-3 text-end control-label col-form-label"
            >Terrasse size</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Extra_Land_size"
                name="Extra_Land_size"
                placeholder="m2"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Extra_Land_Miete_ProM2"
            class="col-sm-3 text-end control-label col-form-label"
            >Terrasse Miete Pro Quadratmeter</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Extra_Land_Miete_ProM2"
                name="Extra_Land_Miete_ProM2"
                placeholder="m2"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="No_Of_Park_Platz"
            class="col-sm-3 text-end control-label col-form-label"
            >No Of Parkplatz</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="No_Of_Park_Platz"
                name="No_Of_Park_Platz"
                placeholder="#"
            />
            </div>
        </div>
        
        <div class="form-group row">
            <label
            for="Pro_Park_Platz_Mieten"
            class="col-sm-3 text-end control-label col-form-label"
            >Pro Park Platz Mieten</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Pro_Park_Platz_Mieten"
                name="Pro_Park_Platz_Mieten"
                placeholder="€"
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="Nebenkosten"
            class="col-sm-3 text-end control-label col-form-label"
            >Nebenkosten</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Nebenkosten"
                name="Nebenkosten"
                placeholder="€"
            />
            </div>
        </div>
            <div class="form-group row">
                <label for="docs_upload" class="col-sm-3 text-end control-label col-form-label">Documents Submitted</label>
                <div class="col-sm-9">
                <input type="file" class="form-control" id="docs_upload" name="docs_upload" accept=".pdf">
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







<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\rental_project\resources\views/create_rental.blade.php ENDPATH**/ ?>