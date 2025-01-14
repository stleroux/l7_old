

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.css')); ?>">
</head>
<body>
<div class="container">

<div class="float-right">
   <button class="btn btn-outline-secondary no-print" onClick="window.print()">Print this page</button>
   <a href="<?php echo e(route('myInvoices')); ?>" class="btn btn-primary no-print">Back</a>
</div>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tr>
      <td colspan="6" width="50%">
         <h1>
            <?php if($invoice->status == "estimate"): ?>
               ESTIMATE
            <?php else: ?>
               INVOICE
            <?php endif; ?>
         </h1>
      </td>
      <td colspan="6">
         <div class="col-sm-12">
            <div class="text-center" style="font-size: 16pt">
               <?php echo e(config('invoicer.companyName')); ?>

            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 text-center">
               <?php echo e(config('invoicer.address_1') . ', '); ?>

               <?php echo e((Config::get('invoicer.address_2')) ? Config::get('invoicer.address_2') . ', ' : ''); ?>

               <?php echo e((Config::get('invoicer.city')) ? Config::get('invoicer.city') . ', ' : ''); ?>

               <?php echo e((Config::get('invoicer.state')) ? Config::get('invoicer.state') . ', ' : ''); ?>

               <?php echo e((Config::get('invoicer.zip')) ? Config::get('invoicer.zip') : ''); ?>

               <br />
               <?php if(Config::get('invoicer.telephone') && (Config::get('invoicer.fax'))): ?>
                  <i class='fas fa-phone'></i> <?php echo e(config('invoicer.telephone')); ?> &nbsp;
                  <i class="fas fa-fax"></i> <?php echo e(config('invoicer.fax')); ?>

               <?php elseif(Config::get('invoicer.telephone')): ?>
                  <i class='fas fa-phone'></i> <?php echo e(config('invoicer.telephone')); ?>

               <?php elseif(Config::get('invoicer.fax')): ?>
                  <i class="fas fa-fax"></i> <?php echo e(config('invoicer.fax')); ?>

               <?php endif; ?>

               <br />
               <?php if(Config::get('invoicer.email') && (Config::get('invoicer.website'))): ?>
                  <i class="fas fa-at"></i> <?php echo e(config('invoicer.email')); ?> &nbsp;
                  <i class="fas fa-newspaper"></i> <?php echo e(config('invoicer.website')); ?>

               <?php elseif(Config::get('invoicer.email')): ?>
                  <i class="fas fa-at"></i> <?php echo e(config('invoicer.email')); ?>

               <?php elseif(Config::get('invoicer.website')): ?>
                  <i class="fas fa-newspaper"></i> <?php echo e(config('invoicer.website')); ?>

               <?php endif; ?>

               <br />
               <?php if(Config::get('invoicer.wsibNo') && (Config::get('invoicer.hstNo'))): ?>
                  WSIB N<sup>o</sup>: <?php echo e(config('invoicer.wsibNo')); ?> &nbsp;
                  HST N<sup>o</sup>: <?php echo e(config('invoicer.hstNo')); ?>

               <?php elseif(Config::get('invoicer.wsibNo')): ?>
                  WSIB N<sup>o</sup>: <?php echo e(config('invoicer.wsibNo')); ?>

               <?php elseif(Config::get('invoicer.hstNo')): ?>
                  HST N<sup>o</sup>: <?php echo e(config('invoicer.hstNo')); ?>

               <?php endif; ?>
            </div>
         </div>
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12">
         <h3 style="margin-top: 0px;margin-bottom: 0px; background-color: #c0c0c0">Invoice Information</h3>
      </th>
   </tr>
   <tr>
      <td colspan="6">
         <table cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th align="left">Billed To</th>
            </tr>
            <tr>
               <td>
                  <table>
                     <?php if($invoice->client->company_name): ?>
                        <tr>
                           <td><?php echo e($invoice->client->company_name); ?></td>
                        </tr>
                     <?php endif; ?>
                     <tr>
                        <td>
                           <?php if($invoice->client->last_name && $invoice->client->first_name): ?>
                           <?php echo e($invoice->client->last_name); ?>, <?php echo e($invoice->client->first_name); ?>

                           <?php elseif($invoice->client->last_name && !$invoice->client->first_name): ?>
                              <?php echo e($invoice->client->last_name); ?>

                           <?php elseif(!$invoice->client->last_name && $invoice->client->first_name): ?>
                              <?php echo e($invoice->client->first_name); ?>

                           <?php endif; ?>
                        </td>
                     </tr>
                     <?php if($invoice->client->address_1): ?>
                        <tr>
                           <td><?php echo e($invoice->client->address_1); ?></td>
                        </tr>
                     <?php endif; ?>
                     <?php if($invoice->client->address_2): ?>
                        <tr>
                           <td><?php echo e($invoice->client->address_2); ?></td>
                        </tr>
                     <?php endif; ?>
                     <tr>
                        <td>
                           <?php if($invoice->client->city && $invoice->client->province): ?>
                              <?php echo e($invoice->client->city); ?>, <?php echo e($invoice->client->province); ?>

                           <?php elseif($invoice->client->city && !$invoice->client->province): ?>
                              <?php echo e($invoice->client->city); ?>

                           <?php elseif(!$invoice->client->city && $invoice->client->province): ?>
                              <?php echo e($invoice->client->province); ?>

                           <?php endif; ?>
                        </td>
                     </tr>
                     <?php if($invoice->client->postal_code): ?>
                        <tr>
                           <td><?php echo e($invoice->client->postal_code); ?></td>
                        </tr>
                     <?php endif; ?>
                     <?php if($invoice->client->telephone): ?>
                        <tr>
                           <td><?php echo e($invoice->client->telephone); ?></td>
                        </tr>
                     <?php endif; ?>
                  </table>

                  
               </td>
            </tr>
         </table>
      </td>
      <td colspan="6" valign="top">
         <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th width="50%" class="text-right">
                  <?php if($invoice->status == "estimate"): ?>
                     Estimate N<sup>o</sup>
                  <?php else: ?>
                     Invoice N<sup>o</sup>
                  <?php endif; ?>
               </th>
               <td width="50%" class="text-center"><?php echo e($invoice->id); ?></td>
            </tr>
            <tr>
               <th width="50%" class="text-right">Invoice Date</th>
               <td width="50%" class="text-center"><?php echo e($invoice->invoiced_at); ?></td>
            </tr>
            <tr>
               <th width="50%" class="text-right">Paid Date</th>
               <td width="50%" class="text-center"><?php echo e($invoice->paid_at); ?></td>
            </tr>
         </table>
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0">Work Description</th>
   </tr>
   <tr>
      <td colspan="12"><?php echo e($invoice->work_description ?? 'N/A'); ?></td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0;">Billable Items</th>
   </tr>
   <tr>
      <td colspan="12">
         <?php if($invoice->invoiceItems->count() > 0): ?>
            <table width="100%" cellpdding="0" cellspacing="0" border="0">
            
               <thead>
                  <tr>
                     <th width="55%">Product</th>
                     
                     
                     <th class="text-center" width="15%">Quantity</th>
                     <th class="text-right" width="15%">Price</th>
                     <th class="text-right" width="15%">Amount</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $invoice->invoiceItems->sortByDesc('work_date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($item->product); ?></td>
                        
                        
                        <td class="text-center" nowrap="nowrap"><?php echo e($item->quantity); ?></td>
                        <td class="text-right" nowrap="nowrap"><?php echo e(number_format($item->price, 2, '.', ' ')); ?>$</td>
                        <td class="text-right" nowrap="nowrap"><?php echo e(number_format($item->total, 2, '.', ' ')); ?>$</td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         <?php else: ?>
            <table cellspacing="0" cellpadding="0" border="0">
               <tr>
                  <td colspan="12">No related billable items found.</td>
               </tr>
            </table>
         <?php endif; ?>
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <td colspan="12">
         <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th width="80%" class="text-right">SubTotal</th>
               <td width="20%" class="text-right"><?php echo e(($invoice->amount_charged ? number_format($invoice->amount_charged, 2, '.', ' ') : '0.00')); ?>$</td>
            </tr>
            <tr>
               <th width="80%" class="text-right">HST</th>
               <td width="20%" class="text-right"><?php echo e(number_format($invoice->hst, 2, '.', ' ')); ?>$</td>
            </tr>
            <tr>
               <th width="80%" class="text-right">Discount</th>
               <td width="20%" class="text-right"><?php echo e(number_format($invoice->discounts, 2, '.', ' ')); ?>$</td>
            </tr>
            <tr>
               <th width="80%" class="text-right">Deposit</th>
               <td width="20%" class="text-right"><?php echo e(number_format($invoice->deposits, 2, '.', ' ')); ?>$</td>
            </tr>
            <tr>
               <th width="80%" class="text-right">Payments</th>
               <td width="20%" class="text-right"><?php echo e(number_format($invoice->payments, 2, '.', ' ')); ?>$</td>
            </tr>
            <tr>
               <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
               <th width="80%" class="text-right">Total Owing</th>
               <td width="20%" class="text-right"><?php echo e(number_format($invoice->total, 2, '.', ' ')); ?>$</td>
            </tr>
         </table>
      </td>
   </tr>


<tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0">Terms and Conditions</th>
   </tr>
   <tr>
      <td colspan="12">
         <?php echo $__env->make('admin.invoicer.termsAndConditionsPDF', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </td>
   </tr>


</table>
</div>
</body>
</html>
<?php /**PATH C:\sites\l7\resources\views/UI/invoices/show.blade.php ENDPATH**/ ?>