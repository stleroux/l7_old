

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/projects.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.projects')); ?>"></i>
   Projects
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Projects</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.projects.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.projects.blocks.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.projects.blocks.faqs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('notice'); ?>
   <?php echo $__env->make('UI.projects.index.notice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
   <?php echo $__env->make('UI.projects.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php if(count($projects) > 0): ?>
      
      <div class="card card-trans-2 mb-3">
      
         <div class="card-body card-trans-2 pb-0 mb-0">

            <div class="row card-trans-0 p-0 m-0 mb-0">

               <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  
                  <div  class="col-8 offset-2 offset-sm-0 col-sm-6 col-md-4 col-lg-3 pb-2">

                     <div id="card-hover" class="h-100 w-100" style="border: 2px black solid;">

                        <div class="position-relative p-0">
                           
                           <?php if($project->created_at > \Carbon\Carbon::now()->subMonth()): ?>
                              <div class="ribbon-wrapper">
                                 <div class="ribbon bg-lime m-0">New</div>
                              </div>
                           <?php endif; ?>

                           <div class="h-100 thumbnail pt-2 text-center">

                              <a href="<?php echo e(route('projects.show', $project->id)); ?>">
                              
                                 <?php if($project->images->count() > 0): ?>
                                    <img src="/_projects/<?php echo e($project->id); ?>/thumbs/<?php echo e($project->images[0]->name); ?>" alt="<?php echo e($project->name); ?>" height="150px" width="95%" />
                                 <?php else: ?>
                                    <img src="/images/no_image.jpg" alt="No Image" height="150px" width="95%" />
                                 <?php endif; ?>
                              
                                 <h4 class="badge-dark p-1 m-1"><?php echo e(ucwords($project->name)); ?></h4>
                              
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Category :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                       <?php echo e($project->category); ?>

                                    </div>
                                 </div>
                              
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Views :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                        <?php echo e(views($project)->count()); ?>

                                    </div>
                                 </div>
                              
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Comments :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                       <?php echo e($project->comments->count()); ?>

                                    </div>
                                 </div>
                              
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Images :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                        <?php echo e(count($project->images)); ?>

                                    </div>
                                 </div>
                              
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Likes :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                       <?php echo e($project->likes()->count()); ?>

                                    </div>
                                 </div>
                              
                                 <div class="row-col pt-2 pb-2">

                                    <?php if(auth()->guard()->check()): ?>
                                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $project)): ?>
                                          <form class="" action="<?php echo e(route('like')); ?>" method="POST">
                                             <?php echo csrf_field(); ?>
                                             <input type="hidden" name="likeable_type" value="<?php echo e(get_class($project)); ?>"/>
                                             <input type="hidden" name="id" value="<?php echo e($project->id); ?>"/>
                                             <button class="btn btn-block btn-xs btn-outline-success text-dark font-weight-bold"><?php echo app('translator')->get('Like'); ?></button>
                                          </form>
                                       <?php else: ?>
                                          <form class="" action="<?php echo e(route('unlike')); ?>" method="POST">
                                             <?php echo csrf_field(); ?>
                                             <?php echo method_field('DELETE'); ?>
                                             <input type="hidden" name="likeable_type" value="<?php echo e(get_class($project)); ?>"/>
                                             <input type="hidden" name="id" value="<?php echo e($project->id); ?>"/>
                                             <button class="btn btn-block btn-xs btn-outline-danger text-dark"><strong><?php echo app('translator')->get('Unlike'); ?></strong></button>
                                          </form>
                                       <?php endif; ?>
                                    <?php endif; ?>

                                 </div>

                              </a>

                           </div>

                        </div>

                     </div>

                  </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            
            <?php if(strpos($_SERVER['REQUEST_URI'], "1000") === false): ?>
               
               <div class="row mb-2">
               
                  <div class="col ml-2 text-light">
                     Showing <?php echo e($projects->firstItem()); ?> to <?php echo e($projects->lastItem()); ?> of <?php echo e($projects->total()); ?> entries
                  </div>
               
                  <div class="col text-right p-0 m-0">
                     <?php echo e($projects->links('UI.projects.pagination.custom')); ?>

                  </div>
               
               </div>

            <?php endif; ?>

         </div>

      </div>

   <?php else: ?>
      
      <div class="col-row p-3 card-trans-4 text-dark">
         <?php echo e(config('settings.noRecordsFound')); ?>

      </div>

   <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/projects/index.blade.php ENDPATH**/ ?>