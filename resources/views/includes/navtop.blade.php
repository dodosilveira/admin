<style>
  .navtop{color:#038672;}
  .navtop:hover{color:#055044;}
</style>
<div class="tile is-ancestor" style="text-align:right; position:relative;">
    <div class="tile is-vertical is-12">
        <div class="tile">
            <div class="tile is-parent is-vertical" style="height:80px; float:right; line-height: 20px;">
                <div style="height:20px; margin-top:15px; margin-right:30px; float:right;">
                  
                    <div style="float:right; width:90px; height:20px; text-align: center; margin-left:10px;">
                        <a class="navtop" href="{{url('/')}}"><i class="fa fa-sign-in" style="margin-right:5px; font-size:28px;"></i><br />Logout</a>
                    </div>

                    <div style="float:right; width:120px; height:20px; text-align: center; margin:0px 10px;">
                        <a id="ativNotify" class="navtop" ><i class="fa fa-bell" style="margin-right:5px; font-size:28px;"></i><br />Notificações <span style="padding:2px 6px; background:#ff3860; font-size:11px; color:#FFF; font-weight:bold; border-radius:5px;">7</span></a>
                    </div>

                    <div style="float:right; width:90px; height:20px; text-align: center; margin:0px 25px;">
                        <a class="navtop" href="{{url('profile')}}"><i class="fa fa-user" style="margin-right:5px; font-size:28px;"></i><br />Meu perfil</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="notify is-5" style="display:none; position:absolute; right:158px; top:80px; background:#FFF; z-index:9999999; border-radius:4px; padding:5px; text-align:left; box-shadow:0px 0px 0px 2px #038672;">
        <div class="notification is-success" style="margin-bottom:5px;">
          <button class="delete"></button>
          Primar lorem ipsum dolor sit amet <strong>Pellentesque risus mi</strong>, tempus quis placerat ut.
        </div>
        <div class="notification is-info" style="margin-bottom:5px;">
          <button class="delete"></button>
          Primar lorem ipsum dolor sit amet <strong>Pellentesque risus mi</strong>, tempus quis placerat ut.
        </div>
    </div>

</div>