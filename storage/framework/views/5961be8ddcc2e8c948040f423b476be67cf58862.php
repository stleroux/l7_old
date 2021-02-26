<!-- POPULAR COUNT -->




<tr class="row">
   
   <td class="col-5 col-sm-3">
      Views To Be Popular Count
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="number"
         name="viewsToBePopularCount"
         id="viewsToBePopularCount"
         class="form-control form-control-sm <?php $__errorArgs = ['viewsToBePopularCount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('viewsToBePopularCount') ?? Config::get('settings.viewsToBePopularCount')); ?>"
         placeholder="viewsToBePopularCount"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      The minimum number of views an item must have to be considered a popular item.
   </td>

</tr>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/settings/viewsToBePopularCount.blade.php ENDPATH**/ ?>