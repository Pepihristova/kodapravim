<?php $__env->startSection('title', 'Types Create'); ?>

<?php $__env->startSection('content'); ?>
<center><div class="createform" style="margin-top: 10%" >
	<?php echo Form::open(['route' => ['bigtables.store'], 'files'=>'true']); ?>	
	
	<label class="resultat">Място</label>
	<p></p>
	<?php echo Form::select('place_id', $places_arr); ?>

	<p></p>
	<label class="resultat">Местонахождение</label>
	<p></p>
	<?php echo Form::select('second_place_id', $second_places_arr); ?>

	<p></p>
	<label class="resultat">Тип</label>
	<p></p>
	<?php echo Form::select('type_id', $types_arr); ?>

	<p></p>
	<label class="resultat">Активност</label>
	<p></p>
	<?php echo Form::select('activity_id', $activities_arr); ?>

	<p></p>
	<label class="resultat">Описание</label>
<p></p>
<textarea id="w3mission" name="resultat"></textarea>
	<p></p>
	<p class="resultat">Снимка</p>
<?php echo Form::file('image'); ?>

<p></p>

	
	<?php echo Form::submit('Предай'); ?>

	<?php echo Form::close(); ?>

</div></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/bigtables/create.blade.php ENDPATH**/ ?>