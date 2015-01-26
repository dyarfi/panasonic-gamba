<script type="text/javascript">
    window.onload = function() {
        FB.Canvas.setSize({width: 810, height: 750});
    }
</script>
<section id="content" class="thanks">
    <div class="cover">
        <h1>THANK YOU</h1>
        <div class="listcen">
            <div class="cont">
                <h3 class="text-center">Terima kasih telah berpartisipasi dalam Panasonic Cup All Star.<br />
                    Unduh dan jadikan foto tim Panasonic Cup All Star sebagai Facebook Cover.</h3>            
                <img src="<?php echo base_url() ?>assets/img/thanks_pict.jpg" alt="" class="dl-img" width="600" />
                <p class="text-center">
                    <a class="btn btn-primary btn-lg dl-btn" role="button" href="<?php echo base_url() ?>assets/img/thanks_pict.jpg">UNDUH</a>
                </p>
            </div>
         <a href="#" class="btn-sharer hidden" onclick="fb_share('<?php echo fb_url("participant") ?>')" class="hidden">Share Facebook</a>
        </div>
    </div>
    <div class="atas">
        <p class="text-center">
            <a class="btn btn-primary btn-lg" role="button" href="<?php echo fb_url("participant") ?>">GO TO MY TEAM PAGE</a>
        </p>
    </div>
</section>

<script type="text/javascript">

    setTimeout($('.btn-sharer').delay('5000').click(),'5000');

    function fb_share(url) {
        var product_name = 'Panasonic Cup All Star';
        var description = 'Saya sudah memilih 11 pemain dream team dalam Panasonic Cup All Star. Pilih dream team kamu sekarang dan dapatkan kesempatan nonton gratis dan juga menangkan Panasonic Viera TV';
        var share_image = 'http://panasonicidapps.com/gamba_osaka/assets/img/thanks_pict.jpg';
        var share_link = url;
        FB.ui({
            method: 'feed',
            name: product_name,
            link: share_link,
            picture: share_image,
            description: description
        }, function(response) {
            if (response && response.post_id) {
            }
            else {
                console.log(response);
            }
        });
    }
</script>

