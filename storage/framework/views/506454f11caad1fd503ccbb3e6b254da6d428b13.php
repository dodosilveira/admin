<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>       

    <section class="is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login admin</h3>
                    <div class="box">
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="email" placeholder="email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="password" placeholder="senha">
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <a href="<?php echo e(url('/dashboard')); ?>" class="button is-block is-success is-medium">Logar</a>
                                </div>
                                <div class="column">
                                    <a href="<?php echo e(url('/register')); ?>" class="button is-block is-info is-medium">Registrar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
