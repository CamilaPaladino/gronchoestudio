<?php
$title = "Ideally";
$section = "loideal";
include ("config/config.php");
include("head.php");
include("header-producciones.php");
?>

<section id="produccion" class="fullscreen videos bg-hero bg-lo-ideal">
    <div class="title" data-aos="fade-up" data-aos-duration="800">
        <div class="left-custom" data-aos="fade-up" data-aos-duration="800">
            <h1><?php echo $lang['08Title']; ?></h1>
            <p><?php echo $lang['08Tipo']; ?></p>
        </div>
        <div class="right-custom" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['monte-venusLink']; ?>" class="mr-5">
                <span class="arrow"><</span>
                <p style="margin-left: 10px"><span><?php echo $lang['anterior']; ?></span><br><?php echo $lang['07Title']; ?></p>  
            </a>
        </div>
    </div>
</section>
<section id="info">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="sinopsis" data-aos="fade-up" data-aos-duration="800"> <?php echo $lang['08Sinopsis']; ?>

            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['direccion']; ?></p>
                <p class="text-white">Martina Matzkin. </p>
            </div>
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['productoras']; ?></p>
                <p class="text-white">Groncho (Argentina), Continente Pictures (Colombia)
                </p>
            </div> 
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['apoyo']; ?></p>
                <p class="text-white"><?php echo $lang['08apoyo']; ?></p>
            </div> 
        </div>
    </div>
    <a class="ver-mas" data-aos="fade-up" data-aos-duration="800" href="home#<?php echo $lang['headerProduc']; ?>"><?php echo $lang['verMasProduc']; ?></a>

</section>
<?php
include("footer.php");
?>


