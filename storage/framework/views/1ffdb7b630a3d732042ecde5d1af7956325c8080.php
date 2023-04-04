<?php $__env->startSection('title', 'Types Create'); ?>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('second_places.store')); ?>" class="createform">
	<?php echo e(csrf_field()); ?>

	<?php echo e(csrf_field()); ?>

	<p class="resultat">Място</p>
	<input type="text" name="name">
	
	<p></p>
	<?php echo Form::select('place_id', $places_arr); ?>

	<p></p>
	<input type="submit" name="submit" value="Създай" class="btn btn-success">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/second_places/create.blade.php ENDPATH**/ ?>