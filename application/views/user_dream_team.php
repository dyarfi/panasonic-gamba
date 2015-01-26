<script type="text/javascript">
    window.onload = function() {
        FB.Canvas.setSize({width: 810, height: 800});
    }
</script>
<section id="content" class="dreamteam">
    <div class="cover">
        <div class="listcen">
            <h1>MY DREAM TEAM</h1>
            <div class="cont">
                <div class="back">
                  <img src="<?php echo base_url() ?>assets/img/united_team.png" alt="" />
                </div>
                <div class="row posit1">
                <h1 class="namateam"><?php echo $team->team_name ?></h1>
                    <?php
                    $total_value = 0;
                    foreach ($team->players as $player) {
                        ?>
                        <div class="col-xs-12 col-md-3">                  
                            <a href="#" class="thumbnail">
                                <img src="<?php echo base_url() ?>uploads/player/<?php echo $player->foto ?>" alt="" />
                            </a>       
                            <?php if ($player->total_value != null) { ?>
                                <div class="topleft"><?php echo $player->total_value ?></div>   
                                <?php
                                $total_value += $player->total_value;
                            }
                            ?>
                            <div class="bottomleft"><?php echo ucwords(strtolower($player->name)); ?></div>                                            
                        </div>  
                    <?php } ?>
                </div>               
                <div class="text-center posit2">
                    <?php if ($total_value == 0) { ?>
                        <h1 class="back"style="font-size: 48px; margin-top: 65px;">N/A</h1>   
                    <?php } else { ?>
                        <h1 class="back"><?php echo number_format($total_value / 11, 1) ?></h1>   
                    <?php }
                    ?>
                    <img src="<?php echo base_url() ?>assets/img/score.png" alt="" />
                </div>
                 <div class="text-center">
                    <a class="left hidden bs-an-btn" href="#" data-target=".bs-an" data-toggle="modal">Announcement</a>
                    <a class="left btn-primary announce" href="#" data-target=".bs-wr" data-toggle="modal">Winners</a>
                    <a class="right btn-primary announce" href="#" data-target=".bs-sc" data-toggle="modal">Score</a>
                </div>                        
            </div>
        </div>
    </div>
</section>

 <div class="modal fade bs-sc" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <div class="listcen" stat="0">
                    <div class="cont">      
                        <div class="center finaltitle">
                          <img src="<?php echo base_url() ?>assets/img/final-score.png" alt="" />
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="table-responsive center">
                                
                                <table id="mytable" class="table table-bordred table-striped">
                                  <thead>
                                    <th><img src="<?php echo base_url() ?>assets/img/juri0.jpg" alt="" /></th>
                                    <th><img src="<?php echo base_url() ?>assets/img/juri1.jpg" alt="" /></th>
                                    <th><img src="<?php echo base_url() ?>assets/img/juri2.jpg" alt="" /></th>
                                    <th><img src="<?php echo base_url() ?>assets/img/juri3.jpg" alt="" /></th>
                                    <th class="center">Average Score</th>
                                  </thead>
                                  <tbody>
                                    <?php if (!empty($played_team)) { ?>
                                      <?php foreach ($played_team as $team) { ?>
                                      <tr>
                                        <td><?php echo($team->name);?></td>
                                        <td><?php echo($team->juror_1);?></td>
                                        <td><?php echo($team->juror_2);?></td>
                                        <td><?php echo($team->juror_3);?></td>
                                        <td><?php echo($team->total_value ? $team->total_value : 0);?></td>
                                      </tr>
                                      <?php } ?>
                                     <?php } else { ?>
                                      <tr colspan="3">
                                        <td>Nilai akan di umumkan oleh juri-juri setelah pertandingan selesai</td>
                                      </tr>  
                                     <?php } ?> 
                                  </tbody>       
                                </table>
                                <div class="clearfix"></div>

                                <!--ul class="pagination pull-right">
                                  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                </ul-->

                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>                      

 <div class="modal fade bs-wr" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <div class="listcen" stat="0">
                    <div class="center"><img src="<?php echo base_url() ?>assets/img/winner-title.png" alt="" /></div>
                    <div class="cont center">      
                            <p>Selamat untuk para Dream Team dengan skor tertinggi</p>
                            <div class="container" id="tourpackages-carousel">
                              <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                  <div class="thumbnail">
                                    <img src="<?php echo base_url() ?>assets/img/winner.jpg" alt="" />
                                    <div class="caption">
                                      <h4>Pemenang 1</h4>
                                    </div>
                                  </div>
                                </div>
                        
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                  <div class="thumbnail">
                                    <img src="<?php echo base_url() ?>assets/img/winner.jpg" alt="" />
                                    <div class="caption">
                                      <h4>Pemenang 2</h4>
                                    </div>
                                  </div>
                                </div>
                        
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                  <div class="thumbnail">
                                    <img src="<?php echo base_url() ?>assets/img/winner.jpg" alt="" />
                                    <div class="caption">
                                      <h4>Pemenang 3</h4>
                                    </div>
                                  </div>
                                </div>
                                
                              </div><!-- End row -->
                              
                            </div><!-- End container -->
                            <p class="winnertext">
                              Masing-masing pemenang berhak mendapatkan 1 unit Panasonic VIERA TV. 
                              Terima kasih untuk semua peserta yang telah berpartisipasi dan 
                              sampai jumpa di kesempatan berikutnya. 
                            </p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
  </div>

   <div class="modal fade bs-an" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <div class="listcen" stat="0">
                    <div class="cont">
                    <h4>
                    Nantikan berapa skor total dari Panasonic Cup All Star versi kamu setelah pertandingan Gamba Osaka VS Persija berlangsung pada 24 Januari 2015 nanti. 
                    Pemilik tim dengan skor tertinggi dan nama tim terbaik berhak memenangkan hadiah utama Panasonic VIERA TV.
                    </h4>
                    </div>
                </div>
            </div>
        </div>
  </div>


<script type="text/javascript"> 
    //setTimeout($('.bs-an-btn').delay('3000').click(),'50000');
</script>

<style>
    .col-xs-12{ width: 16.6%; padding: 2px;}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>