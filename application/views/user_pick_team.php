<script type="text/javascript">
    window.onload = function() {
        FB.Canvas.setSize({width: 810, height: 1097});
    }
</script>
<section id="content" class="pickteam">
    <div class="cover">
        <h1>PICK YOUR TEAM</h1>
        <div class="listcen2 tengah">
            <div id="myCarousel" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                    <div class="item active">
                        <h2>- GOAL KEEPER -</h2> 							
                        <ul>
                            <?php
                            $i = 0;
                            $has_show_video = false;
                            while ($i < count($players['GK'])) {
                                if ($i == 4 && !$has_show_video) {
                                    ?>
                                    <!--li> 
                                        <div class="img-circular">
                                            <p class="posit3">Klik Icon <br/>
                                                <i class="glyphicon glyphicon-facetime-video img-circle"></i><br />
                                                untuk melihat profil video pemain</p>					  		
                                        </div>	
                                    </li>
                                    <li> 
                                        <div class="img-circular">
                                            <p class="posit4">Klik<a class="btn btn-default" data-toggle="modal" data-target=".bs-gk">DATA PEMAIN</a>
                                                untuk melihat perbandingan para pemain</p>	      
                                        </div>	
                                    </li-->
                                    <?php
                                    $has_show_video = true;
                                } else {
                                    $player = $players['GK'][$i];
                                    ?>
                                    <li> 
                                        <div class="img-circular" onclick="select_player(this)" type="GK" data-id="<?php echo $player->player_id ?>">
                                            <div class="tophexa">
                                                <a data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-facetime-video img-circle"></i></a>
                                            </div>
                                            <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />                            
                                            <div class="bottomhexa"><?php echo ucwords(strtolower($player->name)); ?></div>
                                        </div>
                                    </li>                                    
                                    <?php
                                    $i++;
                                }
                            }
                            ?>
                            <li>
                                <div class="img-circular">
                                    <p class="posit4">
                                    Klik
                                    <a class="btn btn-default" data-target=".bs-gk" data-toggle="modal">DATA PEMAIN</a>
                                    untuk melihat perbandingan para pemain
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>						
                    <div class="item">
                        <h2>- DEFENDER -</h2> 								
                        <ul>
                            <?php
                            $i = 0;
                            $has_show_video = false;
                            while ($i < count($players['DF'])) {
                                if ($i == 5 && !$has_show_video) {
                                    ?>
                                    <!--li> 
                                        <div class="img-circular">
                                            <p class="posit3">Klik Icon <br/>
                                                <i class="glyphicon glyphicon-facetime-video img-circle"></i><br />
                                                untuk melihat profil video pemain</p>					  		
                                        </div>	
                                    </li-->
                                    <li> 
                                        <div class="img-circular">
                                            <p class="posit4">Klik<a class="btn btn-default" data-toggle="modal" data-target=".bs-df">DATA PEMAIN</a>
                                                untuk melihat perbandingan para pemain</p>	      
                                        </div>	
                                    </li>
                                    <?php
                                    $has_show_video = true;
                                } else {
                                    $player = $players['DF'][$i];
                                    ?>
                                    <li> 
                                        <div class="img-circular" id="player-<?php echo $player->player_id ?>" onclick="select_player(this)" type="DF" data-id="<?php echo $player->player_id ?>">
                                            <div class="tophexa">
                                                <a data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-facetime-video img-circle"></i></a>
                                            </div>
                                            <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />                            
                                            <div class="bottomhexa"><?php echo ucwords(strtolower($player->name)); ?></div>
                                        </div>
                                    </li>
                                    <?php
                                    $i++;
                                }
                            }
                            ?>
                        </ul>	
                    </div>
                    <div class="item">
                        <h2>- MIDFIELDER -</h2> 						
                        <ul>
                            <?php
                            $i = 0;
                            $has_show_video = false;
                            while ($i < count($players['MF'])) {
                                if ($i == 5 && !$has_show_video) {
                                    ?>
                                    <!--li> 
                                        <div class="img-circular">
                                            <p class="posit3">Klik Icon <br/>
                                                <i class="glyphicon glyphicon-facetime-video img-circle"></i><br />
                                                untuk melihat profil video pemain</p>					  		
                                        </div>	
                                    </li-->
                                    <li> 
                                        <div class="img-circular">
                                            <p class="posit4">Klik<a class="btn btn-default" data-toggle="modal" data-target=".bs-mf">DATA PEMAIN</a>
                                                untuk melihat perbandingan para pemain</p>	      
                                        </div>	
                                    </li>
                                    <?php
                                    $has_show_video = true;
                                } else {
                                    $player = $players['MF'][$i];
                                    ?>
                                    <li> 
                                        <div class="img-circular" id="player-<?php echo $player->player_id ?>" onclick="select_player(this)" type="MF" data-id="<?php echo $player->player_id ?>">
                                            <div class="tophexa">
                                                <a data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-facetime-video img-circle"></i></a>
                                            </div>
                                            <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />                            
                                            <div class="bottomhexa"><?php echo ucwords(strtolower($player->name)); ?></div>
                                        </div>
                                    </li>
                                    <?php
                                    $i++;
                                }
                            }
                            ?>	
                        </ul>
                    </div>
                    <div class="item">
                        <h2>- STRIKER -</h2> 						
                        <ul>
                            <?php
                            $i = 0;
                            $has_show_video = false;
                            while ($i < count($players['ST'])) {
                                if ($i == 5 && !$has_show_video) {
                                    ?>
                                    <!--li> 
                                        <div class="img-circular">
                                            <p class="posit3">Klik Icon <br/>
                                                <i class="glyphicon glyphicon-facetime-video img-circle"></i><br />
                                                untuk melihat profil video pemain</p>					  		
                                        </div>	
                                    </li-->
                                    <!--li> 
                                        <div class="img-circular">
                                            <p class="posit4">Klik<a class="btn btn-default" data-toggle="modal" data-target=".bs-st">DATA PEMAIN</a>
                                                untuk melihat perbandingan para pemain</p>	      
                                        </div>	
                                    </li-->
                                    <?php
                                    $has_show_video = true;
                                } else {
                                    $player = $players['ST'][$i];
                                    ?>
                                    <li> 
                                        <div class="img-circular" id="player-<?php echo $player->player_id ?>" onclick="select_player(this)" type="ST" data-id="<?php echo $player->player_id ?>">
                                            <div class="tophexa">
                                                <a data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-facetime-video img-circle"></i></a>
                                            </div>
                                            <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />                            
                                            <div class="bottomhexa"><?php echo ucwords(strtolower($player->name)); ?></div>
                                        </div>
                                    </li>
                                    <?php
                                    $i++;
                                }
                            }
                            ?>		
                            <li>
                                <div class="img-circular">
                                    <p class="posit4">
                                    Klik
                                    <a class="btn btn-default" data-target=".bs-st" data-toggle="modal">DATA PEMAIN</a>
                                    untuk melihat perbandingan para pemain
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="listcen3">
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹ SEBELUMNYA</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">SELANJUTNYA ›</a>
        <a class="carousel-control" href="#" onclick="submit_data()" style="left: 250px;top: 45px;font-weight: bold; z-index:9" >SELESAI</a>		
    </div>
    <div class="clearfix"></div>
    <form action="<?php echo fb_url('participant/submit_players') ?>" method="POST" id="form-data">
    </form>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <div class="listcen">
                    <div class="cont">
                        <h1>PLAYER NAME</h1>  	
<!--                        <iframe title="YouTube video player" class="youtube-player" type="text/html" 
                                width="600" height="390" src="http://www.youtube.com/embed/SdBXpORSGu0"
                                frameborder="0" allowFullScreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-gk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <div class="listcen" stat="0">
                    <div class="cont">			
                        <div id="tt_tengah">
                            <table class="table posit9">
                                <tr>
                                    <td style="height:50px">Nama</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                </tr>
                                <tr>
                                    <td>Tinggi</td>
                                </tr>
                                <tr>
                                    <td>Berat Badan</td>
                                </tr>
                                <tr>
                                    <td>Kebangsaan</td>
                                </tr>
                                <!-- <tr><td style="height:50px">Appearances</td></tr> -->
                                <tr><td>Posisi</td></tr>
                                <!-- <tr><td>GOAL</td></tr> -->
                            </table> 
                        </div>

                        <div class="holder-pan">
                            <ul class="test" style="width: <?php echo count($players['GK']) * 152 ?>px">
                                <?php foreach ($players['GK'] as $player) { ?>
                                    <li class="test-item">
                                        <table class="table">
                                            <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />                            
                                            <tr>
                                                <td style="height:50px;line-height:1em"><?php echo ucwords(strtolower($player->name)); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->date_of_birth ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->height ?> cm</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->weight ?> kg</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->nationality ?></td>
                                            </tr>
                                            <!--tr>
                                                <td style="height:50px;line-height:1em"><?php echo $player->appearance ?></td>
                                            </tr-->
                                            <tr><td><?php echo $player->position ?></td></tr>
                                            <!-- <tr><td><?php echo $player->total_goal ?></td></tr> -->
                                        </table> 
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                    <a href="#" class="control2" onclick="prev(this)" id="ml"></a>
                    <a href="#" class="control2" onclick="next(this)" id="mr" max="<?php echo count($players['GK']) - 4 ?>"></a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bs-df" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <div class="listcen" stat="0">
                    <div class="cont">			
                        <div id="tt_tengah">
                            <table class="table posit9">
                                <tr>
                                    <td style="height:50px">Nama</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                </tr>
                                <tr>
                                    <td>Tinggi</td>
                                </tr>
                                <tr>
                                    <td>Berat Badan</td>
                                </tr>
                                <tr>
                                    <td>Kebangsaan</td>
                                </tr>
                                <!-- <tr><td style="height:50px">Appearances</td></tr> -->
                                <tr><td>Posisi</td></tr>
                                <!-- <tr><td>GOAL</td></tr> -->
                            </table> 
                        </div>

                        <div class="holder-pan">
                            <ul class="test" style="width: <?php echo count($players['DF']) * 152 ?>px">
                                <?php foreach ($players['DF'] as $player) { ?>
                                    <li class="test-item">
                                        <table class="table">
                                            <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />                            
                                            <tr>
                                                <td style="height:50px;line-height:1em"><?php echo ucwords(strtolower($player->name)); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->date_of_birth ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->height ?> cm</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->weight ?> kg</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->nationality ?></td>
                                            </tr>
                                            <!--tr>
                                                <td style="height:50px;line-height:1em"><?php echo $player->appearance ?></td>
                                            </tr-->
                                            <tr><td><?php echo $player->position ?></td></tr>
                                            <!-- <tr><td><?php echo $player->total_goal ?></td></tr> -->
                                        </table> 
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="control2" onclick="prev(this)" id="ml"></a>
                    <a href="#" class="control2" onclick="next(this)" id="mr" max="<?php echo count($players['DF']) - 4 ?>"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-mf" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <div class="listcen" stat="0">
                    <div class="cont">			
                        <div id="tt_tengah">
                            <table class="table posit9">
                                <tr>
                                    <td style="height:50px">Nama</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                </tr>
                                <tr>
                                    <td>Tinggi</td>
                                </tr>
                                <tr>
                                    <td>Berat Badan</td>
                                </tr>
                                <tr>
                                    <td>Kebangsaan</td>
                                </tr>
                                <!-- <tr><td style="height:40px">Appearances</td></tr> -->
                                <tr><td>Posisi</td></tr>
                                <!-- <tr><td>GOAL</td></tr> -->
                            </table> 
                        </div>

                        <div class="holder-pan">
                            <ul class="test" style="width: <?php echo count($players['MF']) * 152 ?>px">
                                <?php foreach ($players['MF'] as $player) { ?>
                                    <li class="test-item">
                                        <table class="table">
                                            <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />                            
                                            <tr>
                                                <td style="height:50px;line-height:1em"><?php echo ucwords(strtolower($player->name)); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->date_of_birth ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->height ?> cm</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->weight ?> kg</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->nationality ?></td>
                                            </tr>
                                            <!--tr>
                                                <td style="height:40px;line-height:1em"><?php echo $player->appearance ?></td>
                                            </tr-->
                                            <tr><td><?php echo $player->position ?></td></tr>
                                            <!-- <tr><td><?php echo $player->total_goal ?></td></tr> -->
                                        </table> 
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                    <a href="#" class="control2" onclick="prev(this)" id="ml"></a>
                    <a href="#" class="control2" onclick="next(this)" id="mr" max="<?php echo count($players['MF']) - 4 ?>"></a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bs-st" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <div class="listcen" stat="0">
                    <div class="cont">			
                        <div id="tt_tengah">
                            <table class="table posit9">
                                <tr>
                                    <td style="height:50px">Nama</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                </tr>
                                <tr>
                                    <td>Tinggi</td>
                                </tr>
                                <tr>
                                    <td>Berat Badan</td>
                                </tr>
                                <tr>
                                    <td>Kebangsaan</td>
                                </tr>
                                <!-- <tr><td style="height:40px">Appearances</td></tr> -->
                                <tr><td>Posisi</td></tr>
                                <!-- <tr><td>GOAL</td></tr> -->
                            </table> 
                        </div>

                        <div class="holder-pan">
                            <ul class="test" style="width: <?php echo count($players['ST']) * 152 ?>px">
                                <?php foreach ($players['ST'] as $player) { ?>
                                    <li class="test-item">
                                        <table class="table">
                                            <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />                            
                                            <tr>
                                                <td style="height:50px;line-height:1em"><?php echo ucwords(strtolower($player->name)); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->date_of_birth ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->height ?> cm</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->weight ?> kg</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $player->nationality ?></td>
                                            </tr>
                                            <!--tr>
                                                <td style="height:40px;line-height:1em"><?php echo $player->appearance ?></td>
                                            </tr-->
                                            <tr><td><?php echo $player->position ?></td></tr>
                                            <!--tr><td><?php echo $player->total_goal ?></td></tr-->
                                        </table> 
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                    <a href="#" class="control2" onclick="prev(this)" id="ml"></a>
                    <a href="#" class="control2" onclick="next(this)" id="mr" max="<?php echo count($players['ST']) - 4 ?>"></a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var total_gk = 0;
        var total_df = 0;
        var total_mf = 0;
        var total_st = 0;
        var inc_df = 0;
        var inc_mf = 0;
        var inc_st = 0;
        var inc_gk = 0;
        
        function next(el) {
            var stat = parseInt($(el).parent().attr('stat'));
            if (stat > $(el).attr('max'))
                return;
            stat++;
            $(el).parent().attr('stat', stat);
            var ul = $(el).parent().find('ul.test');
            ul.css('left', '-' + stat * 33.33 + '%');
            return false;
        }

        function prev(el) {
            var stat = parseInt($(el).parent().attr('stat'));
            if (stat === 0) {
                return;
            }
            stat--;
            $(el).parent().attr('stat', stat);
            var ul = $(el).parent().find('ul.test');
            ul.css('left', '-' + stat * 33.33 + '%');
            return false;
        }

        function select_player(el) {
            var type = $(el).attr('type');
            var data_id = $(el).attr('data-id');
            if ($(el).hasClass('img-circular-selected')) {
                if (type === 'GK') {
                    total_gk--;
                } else if (type === 'DF') {
                    total_df--;
                } else if (type === 'MF') {
                    total_mf--;
                } else if (type === 'ST') {
                    total_st--;
                }
                $("#form-data").find('#' + data_id + '').remove();
                $(el).removeClass('img-circular-selected');
                return false;
            }
            var ul = $(el).parent().parent();
            if (type === 'GK') {
                if (total_df > 1 || (total_gk + total_df + total_mf + total_st) > 10) {
                    var inputData = $("#form-data").find('.GK:first');
                    ul.find('div#player-' + inputData.val() + '').removeClass('img-circular-selected');
                    inputData.remove();
                    total_gk--;
                }
                $("#form-data").append('<input type="hidden" id="' + data_id + '" name="GK-' + inc_gk + '" value="' + data_id + '" class="GK"/>');
                inc_gk++;
                total_gk++;
            } else if (type === 'DF') {
                if (total_df > 4 || (total_gk + total_df + total_mf + total_st) > 10) {
                    var inputData = $("#form-data").find('.DF:first');
                    ul.find('div#player-' + inputData.val() + '').removeClass('img-circular-selected');
                    inputData.remove();
                    total_df--;
                }
                $("#form-data").append('<input type="hidden" id="' + data_id + '" name="DF-' + inc_df + '" value="' + data_id + '" class="DF"/>');
                inc_df++;
                total_df++;
            } else if (type === 'MF') {
                if (total_mf > 4 || (total_gk + total_df + total_mf + total_st) > 10) {
                    var inputData = $("#form-data").find('.MF:first');
                    ul.find('div#player-' + inputData.val() + '').removeClass('img-circular-selected');
                    inputData.remove();
                    total_mf--;
                }
                $("#form-data").append('<input type="hidden" id="' + data_id + '" name="MF-' + inc_mf + '" value="' + data_id + '" class="MF"/>');
                inc_mf++;
                total_mf++;
            } else if (type === 'ST') {
                if (total_st > 4 || (total_gk + total_df + total_mf + total_st) > 10) {
                    var inputData = $("#form-data").find('.ST:first');
                    ul.find('div#player-' + inputData.val() + '').removeClass('img-circular-selected');
                    inputData.remove();
                    total_st--;
                }
                $("#form-data").append('<input type="hidden" id="' + data_id + '" name="ST-' + inc_st + '" value="' + data_id + '" class="ST"/>');
                inc_st++;
                total_st++;
            }

            $(el).addClass('img-circular-selected');
        }

        function submit_data() {
            var total = $("#form-data").children().length;
            if (total == 11) {
                var r = confirm('Anda yakin dengan pemain yang dipilih?');
                if (r == true) {
                    $("#form-data").submit();
                }
            } else {
                alert('Pemain kurang dari 11');
            }
        }
    </script>
</section>