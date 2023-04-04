<?php $__env->startSection('title', 'Types Create'); ?>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('types.store')); ?>" class="createform">
	<?php echo e(csrf_field()); ?>

	<p class="resultat">Тип</p>
	<input type="text" name="type">
	<p></p>
	<input type="submit" name="submit" value="Създай" class="btn btn-success">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/types/create.blade.php ENDPATH**/ ?>