<?php
$title = "Mount Venus";
$section = "monte";
include ("config/config.php");
include("head.php");
include("header-producciones.php");
?>

<section id="produccion" class="fullscreen videos bg-hero bg-monte-venus">
    <div class="title" data-aos="fade-up" data-aos-duration="800">
        <div class="left-custom" data-aos="fade-up" data-aos-duration="800">
            <h1><?php echo $lang['07Title']; ?></h1>
            <p><?php echo $lang['07Tipo']; ?></p>
        </div>
        <div class="right-custom" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['tristanLink']; ?>" class="mr-5">
                <span class="arrow"><</span>
                <p style="margin-left: 10px"><span><?php echo $lang['anterior']; ?></span><br><?php echo $lang['06Title']; ?></p>  
            </a>
            <a href="<?php echo $lang['lo-idealLink']; ?>">
                <p><span><?php echo $lang['siguiente']; ?></span><br><?php echo $lang['08Title']; ?></p>
                <span class="arrow">></span>
            </a>
        </div>
    </div>
</section>
<section id="info">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="sinopsis" data-aos="fade-up" data-aos-duration="800"> <?php echo $lang['07Sinopsis']; ?>

            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['direccion']; ?></p>
                <p class="text-white">Paula Orlando.
                </p>
            </div>
            
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['productoras']; ?></p>
                <p class="text-white">Groncho (<?php echo $lang['argentina']; ?>), Multiverso Produções (<?php echo $lang['brasil']; ?>).<br><br>
            </div> 
            <div class="item" data-aos="fade-up" data-aos-duration="800">
                <p class="green"><?php echo $lang['apoyo']; ?></p>
                <p class="text-white"><?php echo $lang['07apoyo']; ?></p>
                <br><br>
            </div> 

                  
        </div>
    </div>
    <a class="ver-mas" data-aos="fade-up" data-aos-duration="800" href="home#<?php echo $lang['headerProduc']; ?>"><?php echo $lang['verMasProduc']; ?></a>

</section>
<?php
include("footer.php");
?>


