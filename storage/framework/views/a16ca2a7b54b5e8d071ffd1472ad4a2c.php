

<?php $__env->startSection('page_title', 'Mietverträge'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .table-container {
            overflow-x: auto;
            height: 80vh; /* Adjust the value as needed */
            flex: 1;
        }

        .table {
            width: 100%;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <h2>Mietverträge</h2>
            <div class="d-flex justify-content-end">
                <a href="<?php echo e(route('create-rental')); ?>" class="btn btn-info btn-lg">
                    Create Rental
                </a>
            </div>
             
                <div class="table-container">
               
                    <table class="table mt-3" >
                        <thead>
                        <tr>
                            <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Customer ID</strong></th>
                            <th style="width: 10%; white-space: nowrap;" class="text-center"><strong>Customer name</strong></th>
                            <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Office ID</strong></th>
                            <th style="width: 10%; white-space: nowrap;" class="text-center"><strong>Office Name</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Start Date</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>End Date</strong></th>
                            <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Contract Period <br>(monate)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Year Increment<br>(€)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Miete Pro m2<br>(sq. m)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Kalt Miete<br>(Size * Miete Pro m2)<br>(€)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Reinigung Kosten<br>(€)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Terrasse Size<br>(sq. m)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Terrasse Miete Pro m2<br>(sq. m)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Net Terrasse Mieten<br>(Terrasse Size * Terrasse Miete Pro m2)<br>(€)</strong></th>
                            <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>No Of Park Platz<br>(#)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Pro Park Platz Mieten<br>(€)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Net Park Platz Mieten<br>(No Of Park Platz * Pro Park Platz Mieten)<br>(€)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Net Kalt Miete<br>(Kalt Miete + Net Terrasse Mieten + Net Park Platz Mieten)<br>(€)</strong></th>
                            <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Steuer<br>(MwSt.19%)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Warm Miete ohne Nebenkosten<br>(€)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Nebenkosten<br>(€)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Nebenkosten mit Steuer<br>(MwSt. 19%)</strong></th>
                            <th style="width: 7.5%; white-space: nowrap;" class="text-center"><strong>Warm Miete<br>(€)</strong></th>
                            <th style="width: 10%; white-space: nowrap;" class="text-center"><strong>Docs Upload</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $contract; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->customer_id); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Vollname); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->office_id); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Office_Name); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Start_date); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->End_date); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Contract_Period); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Year_Increment); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->MieteProM2); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Kalt_Miete); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Reinigung_Kosten); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Extra_Land_size); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Extra_Land_Miete_ProM2); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Net_Extra_Land_Mieten); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->No_Of_Park_Platz); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Pro_Park_Platz_Mieten); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Net_Park_Platz_Mieten); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Net_Kalt_Miete); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Steuer); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Warm_Miete_ohne_Nebenkosten); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Nebenkosten); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Nebenkosten_mit_Steuer); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><?php echo e($values->Warm_Miete); ?></td>
                                <td style="width: 5%; white-space: nowrap;" class="text-center"><a href="<?php echo e(url('storage/documents/' . str_replace(' ', '_', $values->docs_upload))); ?>" target="_blank">Open PDF</a></td>

                            </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                
                </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\rental_project\resources\views/rental.blade.php ENDPATH**/ ?>