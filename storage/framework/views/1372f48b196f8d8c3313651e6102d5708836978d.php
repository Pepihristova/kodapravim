<?php $__env->startSection('title', 'Types'); ?>

<?php $__env->startSection('content'); ?>
<?php if(Session::has('message')): ?>
	<div class="bg-success">
		<?php echo e(Session::get('message')); ?>

	</div>
<?php endif; ?>
<table class="table">
	<?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>
				<label class="resultat" ><?php echo e($activity->name); ?></label>
			</td>
			<td>
				<label class="resultat" ><?php echo e($activity->type->type); ?></label>
			</td>
			<td>
				<a href="<?php echo e(route('activities.edit', ['id' => $activity->id])); ?>" class="btn btn-warning">Промени</a>
			</td>
			<td>
				<form method="POST" action="<?php echo e(route('activities.destroy', $activity->id)); ?>">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('DELETE')); ?>

					<button type="submit" class="btn btn-danger">Изтрий</button>
				</form>
					
			</td>
			
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href="<?php echo e(url('activities/create')); ?>" class="createbtn">Създайте активност</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/activities/index.blade.php ENDPATH**/ ?>