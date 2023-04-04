<?php $__env->startSection('content'); ?>
<center><div class="box" style="width: 40%; background: rgba(255, 255, 255, 0.7); margin-top: 10%; border-radius: 30%"  >
<?php echo Form::model($bigtable, ['route' => ['bigtables.update', ['id' => $bigtable->id]], 'files'=>'true' ,'method' => 'PUT']); ?>		

<td>
				<p class="resultat" >Снимка</p>
				<img width="50%" src="<?php echo e(asset('free_time_images')); ?>/<?php echo e($bigtable->filename); ?>">
				<input type="hidden"  name="filename" value="$bigtable->filename">
				<p></p>
<p class="resultat">Нова Снимка</p>
<?php echo Form::file('image'); ?>

			</td>
			<p></p>
<label class="resultat">Място</label>
<p></p>
	<?php echo Form::select('place_id', $places_arr, $bigtable->place->id); ?>

	<p></p>
	<label class="resultat">Местонахождение</label>
<p></p>
	<?php echo Form::select('second_place_id', $second_places_arr, $bigtable->second_place->id); ?>

	<p></p>
	<p></p>
	<label class="resultat">Тип</label>
<p></p>
	<?php echo Form::select('type_id', $types_arr, $bigtable->type->id); ?>

	<p></p>
	<p></p>
	<label class="resultat">Дейност</label>
<p></p>
	<?php echo Form::select('activity_id', $activities_arr, $bigtable->activity->id); ?>

	<p></p>
	<p></p>
	<label class="resultat">Валидност</label>
	<p></p>
<?php echo Form::text('is_valid', $bigtable->is_valid); ?>

<p></p>
	<label class="resultat">Описание</label>
	<p></p>
<?php echo Form::text('description', $bigtable->description); ?>

<p></p>
<p></p>

	<?php echo Form::submit('Изпрати!', ['class'=> 'btn btn-success']); ?>

<?php echo Form::close(); ?>

</div></center>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/bigtables/edit.blade.php ENDPATH**/ ?>