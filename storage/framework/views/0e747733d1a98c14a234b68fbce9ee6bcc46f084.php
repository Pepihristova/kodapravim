<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: #f58abe"><?php echo e(__('Профил')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
<?php if(auth()->user()->is_admin == 1): ?>
                    
                     <center><p class="description"><?php echo e(Auth::user()->name); ?> </p>
                     <p class="description"><?php echo e(Auth::user()->email); ?></p> 
                     <p class="description">Администратор</p>
                     <p><a href="<?php echo e(url('types')); ?>" class="resultat">Типове</a></p>
                    <p><a href="<?php echo e(url('second_places')); ?>" class="resultat">Места</a></p>
                    <p><a href="<?php echo e(url('activities')); ?>" class="resultat">Дейности</a></p>
                    <p><a href="<?php echo e(url('bigtables')); ?>" class="resultat">Таблица за крайна оценка</a></p>
                    <p><a href="<?php echo e(url('results/places')); ?>" class="resultat">Избор на място</a></p></center>
                    
                    <?php else: ?>
                    You are logged in!
                    <p><?php echo e(Auth::user()->name); ?> </p>
                     <p><?php echo e(Auth::user()->email); ?></p>
                     <a href="<?php echo e(url('bigtables/create')); ?>">Създайте дейност</a> 
                    <p>You are not admin</p>
                             <input type="hidden" id="user_id" name="custId" value="<?php echo e(Auth::user()->id); ?>">
                            <p ></p>

                    <div>
                       
 

     
    <span class="caret"></span>
                    </div>
                    <div>
                        <form>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/home.blade.php ENDPATH**/ ?>