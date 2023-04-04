<?php $__env->startSection('content'); ?>
<center><div class="box" style="width: 40%; background: rgba(255, 255, 255, 0.7); margin-top: 10%; border-radius: 30%" >
<?php echo Form::model($activity, ['route' => ['activities.update', ['id' => $activity->id]], 'method' => 'PUT']); ?>	
<label class="resultat">Активност</label>

<p><?php echo Form::text('name', $activity->name, ['placeholder'=>'', 'class'=>'form-control']); ?></p>
<p></p>

<p></p>
<label class="resultat">Тип</label>
<p></p>
	<?php echo Form::select('type_id', $types_arr, $activity->type->id); ?>

	<p></p>
	<?php echo Form::submit('Изпрати!', ['class'=> 'btn btn-secondary']); ?>

<?php echo Form::close(); ?>

</div></center>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/activities/edit.blade.php ENDPATH**/ ?>