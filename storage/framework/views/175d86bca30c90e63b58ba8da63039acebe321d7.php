<!-- TOTAL -->

<div class="form-group form-inline">

	<label for="total" class="col-6">Subtotal</label>

	<div class="input-group col-6 p-0">

		<input
			type="text"
			name="total"
			value="<?php echo e(number_format($invoice->amount_charged + $invoice->hst, 2, '.', ' ')); ?>"
			class="form-control text-right"
			readonly
		/>

		<div class="input-group-append">
			<span class="input-group-text">$</span>
		</div>

	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/subtotal.blade.php ENDPATH**/ ?>