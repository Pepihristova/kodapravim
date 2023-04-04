<?php $__env->startSection('content'); ?>
<center><div class="box" style="width: 40%; background: rgba(255, 255, 255, 0.7); margin-top: 10%; border-radius: 30%" >
<?php echo Form::model($second_place, ['route' => ['second_places.update', ['id' => $second_place->id]], 'method' => 'PUT']); ?>	
<label class="resultat">Тип</label>
<p><?php echo Form::text('name', $second_place->name, ['placeholder'=>'recipe name here', 'class'=>'form-control']); ?></p>
<p></p>

<p></p>
<label class="resultat">Място</label>
<p></p>
	<?php echo Form::select('place_id', $places_arr, $second_place->place->id); ?>

	<p></p>
	<?php echo Form::submit('Изпрати!', ['class'=> 'btn btn-secondary']); ?>

<?php echo Form::close(); ?>

</div></center>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/second_places/edit.blade.php ENDPATH**/ ?>