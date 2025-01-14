<?php if(Auth::user()->id == $recipe->user_id): ?>

	<div class="col-md-12">

		<div class="card card-trans-6 mb-2">

			<div class="card-header card_header p-1">
				<div class="card-title">
					Author's Private Notes
				</div>
				 <small>(Only showed to the creator of the item)</small>
			</div>
			
			<div class="card-body card_body p-1 text-dark">
				<?php if($recipe->private_notes): ?> 
					<?php echo $recipe->private_notes; ?>

				<?php else: ?>
					N/A
				<?php endif; ?>
			</div>

		</div>

	</div>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/private_notes.blade.php ENDPATH**/ ?>