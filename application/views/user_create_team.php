<script type="text/javascript">
    window.onload = function() {
        FB.Canvas.setSize({width: 810, height: 820});
    }
</script>
<section id="content">
    <form action="<?php echo fb_url('participant/submit_team') ?>" method="POST">
        <div class="cover">
            <h1>TEAM NAME</h1>
            <div class="listcen">
                <div class="cont">
                    <div class="back2">
                        <img src="<?php echo base_url() ?>assets/img/2team_name.png" alt="" />         
                    </div>            
                    <div class="row clearfix">
                        <?php foreach ($players as $player) { ?>
                            <input type="hidden" name="player-<?php echo $player->player_id ?>" value="<?php echo $player->player_id ?>"/>
                            <div class="col-xs-12 col-md-3 team-overflow">                  
                                <a href="#" class="thumbnail">
                                    <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />
                                </a>       
                                <div class="bottomleft"><?PHP ECHO $player->name ?></div>                                            
                            </div>  
                        <?php } ?> 
                    </div>
                    <h3 class="text-center">Beri dream team kamu nama paling spektakuler (maks 20 karakter).</h3>
                    <div class="form_D">
                        <div class="input-group input-group-lg  pull-right">
                            <input type="text" name="team_name" required="required" class="form-control2">
                        </div>
                    </div>                      
                    <p class="text-center">
                        <img src="<?php echo base_url() ?>assets/img/nama_team.png" alt="" />
                    </p>
                    <h3 class="text-center">Dapatkan kesempatan memenangkan tiket nonton gratis<br /> 
                        dengan menyebarkan applikasi ini ke teman-temanmu.</h3>         
                </div>
            </div>
        </div>
        <div class="atas">
            <p class="text-center">
                <input type="submit" class="btn btn-primary btn-lg" role="button" value="SIMPAN & SHARE"/>
            </p>
        </div>
    </form>
</section>

<style>
    .col-xs-12{
        width: 16% !important;
    }
</style>