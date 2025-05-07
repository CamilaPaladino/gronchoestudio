<?php
$title = "Mocha";
$section = "mocha";
include ("config/config.php");
include("head.php");
include("header-producciones.php");
?>

<section id="produccion" class="fullscreen videos bg-hero bg-mocha">
    <video preload="auto" autoplay="" class="video-bg" muted loop="" src="assets/videos/mocha-bg.mp4" webkit-playsinline="" playsinline="" id="loadvideo"></video>
    <div class="title" data-aos="fade-up" data-aos-duration="800">
        <div class="left-custom" data-aos="fade-up" data-aos-duration="800">
            <h1><?php echo $lang['01Title']; ?></h1>
            <p>2019 <br><?php echo $lang['01Tipo']; ?></p>
            <a href="#" data-id="1" class="btn-video"><?php echo $lang['verTrailer']; ?></a>
        </div>
        <div class="right-custom" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['endhLink']; ?>">
                <p><span><?php echo $lang['siguiente']; ?></span><br><?php echo $lang['02Title']; ?></p>
                <span class="arrow">></span>
            </a>
        </div>
    </div>
</section>
<section id="info">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="sinopsis" data-aos="fade-up" data-aos-duration="800"> <?php echo $lang['01Sinopsis']; ?>

            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['direccion']; ?></p>
                <p class="text-white">Francisco Quiñones Cuartas (<?php echo $lang['argentina']; ?>) <?php echo $lang['y']; ?> Rayan Hindi (<?php echo $lang['francia']; ?>). </p>
            </div>
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['paises']; ?>:</p>
                <p class="text-white"><?php echo $lang['argentina']; ?></p>
            </div> 
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['apoyo']; ?></p>
                <p class="text-white"><?php echo $lang['01apoyo']; ?></p>
            </div> 
            <p data-aos="fade-up" data-aos-duration="800" class="more"><?php echo $lang['01Declarado']; ?></p>     
            </div>
        </div>
        <a class="ver-mas" data-aos="fade-up" data-aos-duration="800" href="home#<?php echo $lang['headerProduc']; ?>"><?php echo $lang['verMasProduc']; ?></a>
</section>
<div class="modal hidden" data-id="1">
    <video width="100%" controls autoplay muted>
            <source src="assets/videos/mocha.mp4">
    </video>        
</div>
<?php
include("footer.php");
?>


