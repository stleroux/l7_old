<div class="card card-trans-4 card-outline card-info text-dark mb-2">

	<div class="card-header bg-primary p-1">
		<div class="card-title">
			<i class="<?php echo e(config('icons.comments')); ?>"></i>
			Comments
			<small>(<?php echo e($model->comments()->count()); ?> total)</small>
		</div>
	</div>

	<div class="card-body p-0">
		<?php if($model->comments->count()): ?>
			<table class="table table-sm table-hover mb-0">
				<thead>
					<tr class="d-flex">
						<th class="col-3">Name</th>
						<th class="col-7">Comment</th>
						<th class="col-2">Posted On</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $model->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr class="d-flex">
						<td class="col-3">
							
							<?php echo e($comment->user->username); ?>

						</td>
						<td class="col-7"><?php echo $comment->comment; ?></td>
						<td class="col-2">
							
							<?php echo e(($comment->created_at) ? date(Config::get('settings.dateFormat'), strtotime($comment->created_at)) : 'N/A'); ?>

						</td>
						
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php else: ?>
			<div class="p-1">No comments found</div>
		<?php endif; ?>
	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/show/comments.blade.php ENDPATH**/ ?>