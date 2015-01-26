<script type="text/javascript">
    window.onload = function() {
        FB.Canvas.setSize({width: 810, height: 772});
    }
</script>
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />

<section id="content">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <div class="cover">
        <h1>REGISTRATION</h1>    
        <div class="listcen">
            <div class="cont">
                <?php echo form_open('home/registration', 'id="form_regis"') ?>
                <input type="hidden" name="picture_url" value="<?php echo @$user_fb->fb_pic ?>"/>
                <input type="hidden" name="fb_id" value="<?php echo @$user_fb->fb_id ?>"/>
                <h3 class="text-center">Masukkan data diri untuk mulai bermain.<br />
                    <img src="<?php echo base_url() ?>assets/img/regist.png" alt="" />
                    <div class="form_G">
                        <div class="input-group input-group-lg  pull-right">
                            <input type="text" name="name" class="form-control" value="<?php echo set_value('name', @$user_fb->fb_name) ?>" required>

                        </div>
                        <div class="input-group input-group-lg  pull-right">
                            <input type="text"name="address"  class="form-control" value="<?php echo set_value('address') ?>"  required>
                        </div>
                        <div class="input-group input-group-lg  pull-right">
                            <input type="text" name="email" class="form-control" value="<?php echo set_value('email', @$user_fb->fb_email) ?>"  required>
                        </div>
                        <div class="input-group input-group-lg  pull-right">
                            <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone') ?>"  required>
                        </div>   
                        <div class="input-group input-group-lg  pull-right">
                            <input type="text" name="twitter" class="form-control" value="<?php echo set_value('twitter') ?>"  required>
                        </div>                                   
                    </div>
                    <div class="row">
                        <div class="col-lg-12 kiri">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" required="required">
                                </span>
                                <h3>Saya sudah menyetujui syarat dan ketentuan yang berlaku.*</h3>
                            </div><!-- /input-group -->
                            <div class="input-group">
                                <span class="input-group-addon"  required="required">
                                    <input type="checkbox">
                                </span>
                                <h3>Data yang saya masukkan adalah benar.*</h3>
                            </div><!-- /input-group -->            
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>  
                    <div class="error-form" style="width:100%;">
                        <?php echo validation_errors('<div class="error">', '</div>'); ?>
                    </div>
                    </form>      
            </div>
        </div>
    </div>
    <div class="atas">
        <p class="text-center">
            <a class="btn btn-primary btn-lg" role="button" href="#" onclick="submit_registration()">KIRIM</a>
        </p>
    </div>
</section>

<script type="text/javascript">
    function submit_registration() {
        $("#form_regis").submit();
    }
</script>

<style>
    .error{
        margin-bottom: 2px;
        padding: 4px;
        background-color: rgba(255,0,0,0.7);
    }
</style>