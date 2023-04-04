<?php $__env->startSection('title', 'Types'); ?>

<?php $__env->startSection('content'); ?>
<?php if(Session::has('message')): ?>
	<div class="bg-success">
		<?php echo e(Session::get('message')); ?>

	</div>
<?php endif; ?>
<table class="table table-bordered" style="position: absolute; right: -350px;">
	<?php $__currentLoopData = $big_tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $big_table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>
				<label class="resultat" style="color: #f58abe;">Снимка</label>
				<img width="100%" src="<?php echo e(asset('free_time_images')); ?>/<?php echo e($big_table->filename); ?>">

			</td>
			<td>
				<label class="resultat" style="color: #f58abe;"><?php echo e($big_table->place->name); ?></label>
			</td>

			<td>
				<label class="resultat" style="color: #f58abe;"><?php echo e($big_table->second_place->name); ?></label>
			</td>
			<td>
				<label class="resultat" style="color: #f58abe;"><?php echo e($big_table->activity->name); ?></label>
			</td>
			<td>
				<label class="resultat" style="color: #f58abe;"><?php echo e($big_table->type->type); ?></label>
			</td>
			<td>
				<label class="resultat" style="color: #f58abe;"><?php echo e($big_table->description); ?></label>
			</td>
			<td>
				<label class="resultat" style="color: #f58abe;"><?php echo e($big_table->is_valid); ?></label>
			</td>
			<td>
				<a href="<?php echo e(route('bigtables.edit', ['id' => $big_table->id])); ?>" class="btn btn-warning">Промени</a>
			</td>
			<td>
				<form method="POST" action="<?php echo e(route('bigtables.destroy', $big_table->id)); ?>">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('DELETE')); ?>

					<button type="submit" class="btn btn-danger">Изтрий</button>
				</form>
					
			</td>
			
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href="<?php echo e(url('bigtables/create')); ?>" class="createbtn">Създайте дейност</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/bigtables/index.blade.php ENDPATH**/ ?>