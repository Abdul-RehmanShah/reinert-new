

<?php $__env->startSection('page_title', 'Customers'); ?>

<?php $__env->startSection('content'); ?>
<div class="card"> 
    <div class="card-body">
        <h2>Kunden</h2>
        <div class="d-flex justify-content-end">
            <a href="<?php echo e(route('createcustomer')); ?>" class="btn btn-info btn-lg">
                Create Customer
            </a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Vorname</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Nachname</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Vollname</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Email</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Kontakt</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Konto Nummer</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Steuer ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Steuer Prozent</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->id); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Vorname); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Nachname); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Vollname); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Email); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->kontakt); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->konto_nummer); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->steuer_id); ?></td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->steuer_Prozent); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\rental_project\resources\views/customer.blade.php ENDPATH**/ ?>