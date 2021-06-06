

<?php if($notification->type === 'App\Notifications\Invoicer\InvoiceCreatedNotification'): ?>

	<td>
		<a href="<?php echo e(route('admin.invoicer.invoices.show', $notification->data['invoiceNo'])); ?>">
			Invoice #<?php echo e($notification->data['invoiceNo']); ?>

		</a>
		was
		<?php echo e($notification->data['title']); ?>

		for
		<a href="<?php echo e(route('admin.invoicer.clients.show', $notification->data['client'])); ?>">
			<?php echo e($notification->data['client_name']); ?>

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
<?php /**PATH C:\sites\l7\resources\views/admin/notifications/type/invoiceCreated.blade.php ENDPATH**/ ?>