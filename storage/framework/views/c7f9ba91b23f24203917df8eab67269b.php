

<?php $__env->startSection('page_title', 'Office'); ?>

<?php $__env->startSection('content'); ?>
<div class="card"> 
    <div class="card-body">
        <h2>Büro</h2>
        <div class="d-flex justify-content-end">
            <a href="<?php echo e(route('createoffice')); ?>" class="btn btn-info btn-lg">
                Create Office
            </a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Etage-ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Name</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Größe</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Anzahl der Zimmer</strong></th>
                </tr>
            </thead>
            <tbody>
                 <?php $__currentLoopData = $office; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->id); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Floor_id); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Name); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->size); ?></td><td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->NoOfRooms); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\rental_project\resources\views/office.blade.php ENDPATH**/ ?>