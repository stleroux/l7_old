

<?php if($notification->type === 'App\Notifications\Invoicer\BillableAddNotification'): ?>

	<td>
		New billable item #<?php echo e($notification->data['id']); ?> added to
		<a href="<?php echo e(route('admin.invoicer.invoices.show', $notification->data['invoiceNo'])); ?>">
			invoice # <?php echo e($notification->data['invoiceNo']); ?>

		</a>
		for
		
		<a href="<?php echo e(route('admin.users.show', $notification->data['client'])); ?>">
			<?php echo e(ucwords($notification->data['client_name'])); ?>

			<?php echo e(($notification->data['company_name'] ? '[' . ucwords($notification->data['company_name']) . ']' : '')); ?>

		</a>
	</td>

	<td>
		<?php echo e($notification->created_at->format(config('settings.dateFormat'))); ?>

	</td>

	<td class="float-right">
		<?php echo $__env->make('admin.notifications.actions.grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</td>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/notifications/type/billableAdd.blade.php ENDPATH**/ ?>