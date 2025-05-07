<?php
$title = "Tristán";
$section = "tristan";
include ("config/config.php");
include("head.php");
include("header-producciones.php");
?>

<section id="produccion" class="fullscreen videos bg-hero bg-tristan">
    <video preload="auto" autoplay="" class="video-bg" muted="muted" loop="" src="assets/videos/tristan-bg.mp4" webkit-playsinline="" playsinline="" id="loadvideo"></video>
    <div class="title" data-aos="fade-up" data-aos-duration="800">
        <div class="left-custom" data-aos="fade-up" data-aos-duration="800">
            <h1><?php echo $lang['06Title']; ?></h1>
            <p><?php echo $lang['06Tipo']; ?></p>
            <a href="#" data-id="1" class="btn-video"><?php echo $lang['verTrailer']; ?></a>
        </div>
        <div class="right-custom" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['cuidadorasLink']; ?>" class="mr-5">
                <span class="arrow"><</span>
                <p style="margin-left: 10px"><span><?php echo $lang['anterior']; ?></span><br><?php echo $lang['05Title']; ?></p>  
            </a>
            <a href="<?php echo $lang['monte-venusLink']; ?>">
                <p><span><?php echo $lang['siguiente']; ?></span><br><?php echo $lang['07Title']; ?></p>
                <span class="arrow">></span>
            </a>
        </div>
    </div>
</section>
<section id="info">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="sinopsis" data-aos="fade-up" data-aos-duration="800"> <?php echo $lang['06Sinopsis']; ?>

            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['direccion']; ?></p>
                <p class="text-white">Martina Matzkin <?php echo $lang['y']; ?> Gabriela Uassouf. </p>
            </div>
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['productoras']; ?>:</p>
                <p class="text-white">Groncho, Lumen (Argentina), Anoki (<?php echo $lang['francia']; ?>) <?php echo $lang['y']; ?> Monarca Films (Uruguay).</p>
            </div> 
            
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['apoyo']; ?></p>
                <p class="text-white"><?php echo $lang['06apoyo']; ?></p>
            </div>
            
        </div>
    </div>
    <a class="ver-mas" data-aos="fade-up" data-aos-duration="800" href="home#<?php echo $lang['headerProduc']; ?>"><?php echo $lang['verMasProduc']; ?></a>

</section>
<div class="modal hidden" data-id="1">
    <video width="100%" controls autoplay muted>
            <source src="assets/videos/tristan.mp4">
    </video>        
</div>
<?php
include("footer.php");
?>


