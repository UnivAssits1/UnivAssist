<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg"><?php echo e(__('Register')); ?></p>

            <form action="<?php echo e(route('register')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <div class="input-group mb-3">
                    <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                           placeholder="Full name" name="nama" value="<?php echo e(old('name')); ?>" required autocomplete="name"
                           autofocus>
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-user"></span>
                    </div>
                </div>
                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email"
                           value="<?php echo e(old('email')); ?>" placeholder="Email" required autocomplete="email">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="alamat"
                           value="<?php echo e(old('alamat')); ?>" placeholder="alamat" required autocomplete="alamat">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control <?php if ($errors->has('NIK')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('NIK'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="NIK"
                           value="<?php echo e(old('NIK')); ?>" placeholder="NIK" required autocomplete="NIK">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('NIK')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('NIK'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control <?php if ($errors->has('negara')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('negara'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="negara"
                           value="<?php echo e(old('negara')); ?>" placeholder="negara" required autocomplete="negara">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('negara')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('negara'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control <?php if ($errors->has('provinsi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('provinsi'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="provinsi"
                           value="<?php echo e(old('provinsi')); ?>" placeholder="provinsi" required autocomplete="provinsi">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('provinsi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('provinsi'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control <?php if ($errors->has('kota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kota'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="kota"
                           value="<?php echo e(old('kota')); ?>" placeholder="kota" required autocomplete="kota">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('kota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kota'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control <?php if ($errors->has('Universitas')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Universitas'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="Universitas"
                           value="<?php echo e(old('Universitas')); ?>" placeholder="Universitas" required autocomplete="Universitas">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('Universitas')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Universitas'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control <?php if ($errors->has('NRP')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('NRP'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="NRP"
                           value="<?php echo e(old('NRP')); ?>" placeholder="NRP" required autocomplete="NRP">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('NRP')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('NRP'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control <?php if ($errors->has('telepon')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telepon'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="telepon"
                           value="<?php echo e(old('telepon')); ?>" placeholder="telepon" required autocomplete="telepon">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                <?php if ($errors->has('telepon')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telepon'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                           placeholder="Password" name="password" required autocomplete="new-password">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-lock"></span>
                    </div>
                </div>
                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <div class="input-group mb-3">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Retype password"
                           name="password_confirmation" required autocomplete="new-password">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-lock"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-8">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(__('Register')); ?></button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            
            
            
            
            
            
        </div>
        <!-- /.login-card-body -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yehezkiel David S\Desktop\UnivAssistt\resources\views/auth/register.blade.php ENDPATH**/ ?>