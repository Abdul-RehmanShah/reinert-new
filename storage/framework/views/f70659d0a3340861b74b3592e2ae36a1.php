

<?php $__env->startSection('page_title', 'Building'); ?>

<?php $__env->startSection('content'); ?>
<div class="card"> 
    <div class="card-body">
        <h2>Gebäude</h2>
        <div class="d-flex justify-content-end">
            <a href="<?php echo e(route('createbuilding')); ?>" class="btn btn-info btn-lg">
                Create Building
            </a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Name</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Anzahl der Etagen</strong></th>
                </tr>
            </thead>
            <tbody>
                 <?php $__currentLoopData = $building; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->id); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Name); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->NoOfFloors); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\rental_project\resources\views/building.blade.php ENDPATH**/ ?>