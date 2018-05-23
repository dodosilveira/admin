@include('includes.header')       

    <section class="is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login</h3>
                    <div class="box">
                        <figure class="avatar">
                            <div style="border-radius: 50%; width:128px; height:128px; background:#CCC; margin:0 auto;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo0d-gG63jqXDLy-HBFbuDUHQfJoMXskG8_zKSqY9PuscFYqdw3Q" width="128" height="128" style="border-radius: 50%;"/>
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
                            <a href="{{url('/dashboard')}}" class="button is-block is-info is-medium is-fullwidth">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('includes.footer')  
