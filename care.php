<?php
$title = "Care";
$section = "cuidadoras";
include ("config/config.php");
include("head.php");
include("header-producciones.php");
?>

<section id="produccion" class="fullscreen videos bg-hero bg-cuidadoras">
    
    <div class="title" data-aos="fade-up" data-aos-duration="800">
        <div class="left-custom" data-aos="fade-up" data-aos-duration="800">
            <h1><?php echo $lang['05Title']; ?></h1>
            <p>(2025) <br><?php echo $lang['05Tipo']; ?></p>

        </div>
        <div class="right-custom" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['tesisLink']; ?>" class="mr-5">
                <span class="arrow"><</span>
                <p style="margin-left: 10px"><span><?php echo $lang['anterior']; ?></span><br><?php echo $lang['04Title']; ?></p>  
            </a>
            <a href="<?php echo $lang['tristanLink']; ?>">
                <p><span><?php echo $lang['siguiente']; ?></span><br><?php echo $lang['06Title']; ?></p>
                <span class="arrow">></span>
            </a>
        </div>
    </div>
</section>
<section id="info">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="sinopsis" data-aos="fade-up" data-aos-duration="800"> <?php echo $lang['05Sinopsis']; ?>

            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['direccion']; ?></p>
                <p class="text-white">Martina Matzkin y Gabriela Uassouf. </p>
            </div>
            
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['productoras']; ?></p>
                <p class="text-white">Groncho (Argentina) y El Otro Film (Chile).</p>
            </div> 
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['apoyo']; ?></p>
                <p class="text-white"><?php echo $lang['05apoyo']; ?></p>
            </div>
                   
        </div>
    </div>
    <a class="ver-mas" data-aos="fade-up" data-aos-duration="800" href="home#<?php echo $lang['headerProduc']; ?>"><?php echo $lang['verMasProduc']; ?></a>

</section>
<?php
include("footer.php");
?>


