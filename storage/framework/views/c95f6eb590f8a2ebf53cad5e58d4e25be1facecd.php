

<?php $__env->startSection('content'); ?>

<p>types</p>
<label class="col-md-12 control-label">endresult</label>
                         <div class="well-searchbox">
                    <?php $__currentLoopData = $endresult_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endresult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td style="border: 2px; border-color: blue">
                <label class="description">Име на дестинацията:</label>
               <label class="resultat"><?php echo e($endresult->place->name); ?></label>
               <p></p>
               <label class="description">Име на второ място:</label>
               <label class="resultat"><?php echo e($endresult->second_place->name); ?></label>
               <p></p> 
           
               <label class="description">Тип:</label>
               <label class="resultat"><?php echo e($endresult->type->type); ?></label>
               <p></p> 

               <label class="description">Активност:</label>
               <label class="resultat"><?php echo e($endresult->activity->name); ?></label>
               <p></p> 

               <label class="description">Описание:</label>
               <label class="resultat"><?php echo e($endresult->description); ?></label>
               <p></p>
               <label class="description">Снимка на дейността:</label>
               <p><img src="<?php echo e(asset('free_time_images')); ?>/<?php echo e($endresult->filename); ?>" width="40%"></p> 
               <hr>
            </td>
            
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/results/endresult.blade.php ENDPATH**/ ?>