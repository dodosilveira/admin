<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>       

    <section class="is-success is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-grey">Login</h3>
                        <div class="box">
                            <figure class="avatar">
                                <div style="border-radius: 50%; width:128px; height:128px; background:#CCC; margin:0 auto;">
                                    <img src="./img/login.png" width="128" height="128" style="border-radius: 50%;"/>
                                </div>
                            </figure>
                            <br />
                            <form>
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-medium" type="email" placeholder="Your Email" autofocus="">
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input class="input is-medium" type="password" placeholder="Your Password">
                                    </div>
                                </div>
                                <a href="<?php echo e(url('/dashboard')); ?>" class="button is-block is-info is-medium is-fullwidth">Login</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
