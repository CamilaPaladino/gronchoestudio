<?php
include ("config/config.php");
$title = "Home";
$section = "inicio";
include("head.php");
include("header.php");
?>

<div id="generalContainer">
    <section id="home" class="fullscreen sectionHome videos bg-hero bg-home">
        <video autoplay="" preload="auto" class="video-bg bg-desktop" muted="muted" loop="" src="assets/videos/reel.mp4" webkit-playsinline="" playsinline="" id="loadvideo"></video>
        <video autoplay="" preload="auto" class="video-bg bg-mobile" muted="muted" loop="" src="assets/videos/reel-mobile.mp4" webkit-playsinline="" playsinline="" id="loadvideo"></video>
        <a href="#<?php echo $lang['headerNosotros']; ?>" class="scroll-downs">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </a>       
    </section>

<section id="<?php echo $lang['headerNosotros']; ?>" class="nosotros sectionNosotros">
    <h2 data-aos="fade-up" data-aos-duration="800" class="sections-title"><?php echo $lang['nosotrosTitle']; ?></h2>
    <div class="row">
        <div class="col-lg-9 col-md-10 col-sm-12">
            <p data-aos="fade-up" data-aos-duration="800"><?php echo $lang['nosotrosP']; ?></p>
        </div>
    </div>
    <div class="persons" data-aos="fade-up" data-aos-duration="800">
        <div class="person active">
            <div class="avatar">
                <img src="assets/images/rocio.webp" alt="Rocio Pichirili">
                <div class="title-avatar">
                    <p><?php echo $lang['creadora']; ?></p>
                </div>
            </div>
            <div class="textBio">
                <div class="d-flex align-items-end mb-3">
                    <h4><?php echo $lang['rocio']; ?> <br>Pichirili</h4>
                    <div class="circle-btn"><span class="vertical"></span><span></span></div>
                </div>
                <p class="bio"><?php echo $lang['bio01']; ?></p>
            </div>
        </div>
        <div class="person">
            <div class="avatar">
                <img src="assets/images/francisco.webp" alt="Francisco Quiñones Cuartas">
                <div class="title-avatar">
                    <p><?php echo $lang['colaborador']; ?></p>
                </div>
            </div>
            <div class="textBio">
                <div class="d-flex align-items-end mb-3">
                    <h4>Francisco <br>Quiñones Cuartas</h4>
                    <div class="circle-btn"><span class="vertical"></span><span></span></div>
                </div>
                <p class="bio"><?php echo $lang['bio02']; ?></p>
            </div>
        </div>
    </div>
</section>
<section id="<?php echo $lang['headerProduc']; ?>" class="producciones sectionProduc">
    <h2 data-aos="fade-up" data-aos-duration="800" class="sections-title"><?php echo $lang['producTitle']; ?></h2>
    <div class="category" data-aos="fade-up" data-aos-duration="800">
        <div class="types">
            <p><?php echo $lang['peliculas']; ?></p>
        </div>
    </div>
    <div class="row w-100 mb-5">
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['mochaLink']; ?>" class="card-produc">
                <div class="image">
                    <img src="assets/images/afiche-mocha.webp" alt="Afiche - Mocha">
                </div>
                <h5 class="title-produc">Mocha (2019)
                </h5>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['endhLink']; ?>" class="card-produc">
                <div class="image border-custom">
                    <img src="assets/images/afiche-endh.webp" alt="Afiche - El nombre del hijo">
                </div>
                <h5 class="title-produc">El nombre del hijo (2020)
                </h5>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['deliaLink']; ?>" class="card-produc">
                <div class="image">
                    <img src="assets/images/afiche-delia.webp" alt="Afiche - Delia">
                </div>
                <h5 class="title-produc">Delia (2022)
                </h5>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['tesisLink']; ?>" class="card-produc">
                <div class="image">
                    <img src="assets/images/afiche-tesis.webp" alt="Afiche - Tesis sobre una domesticación">
                </div>
                <h5 class="title-produc">Tesis sobre una domesticación (2024)
                </h5>
            </a>
        </div>
    </div>

    <div class="category mt-5" data-aos="fade-up" data-aos-duration="800">
        <div class="types"><p><?php echo $lang['proyectos']; ?></p></div>
    </div>

    <div class="row w-100">
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['cuidadorasLink']; ?>" class="card-produc">
                <div class="image">
                    <img src="assets/images/afiche-cuidadoras.webp" alt="Afiche - Cuidadoras">
                </div>
                <h5 class="title-produc">Cuidadoras (2025)
                </h5>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['tristanLink']; ?>" class="card-produc">
                <div class="image">
                    <img src="assets/images/afiche-tristan.webp" alt="Afiche - Tristán">
                </div>
                <h5 class="title-produc">Tristán
                </h5>
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['monte-venusLink']; ?>" class="card-produc">
                <div class="image">
                    <img src="assets/images/afiche-venus.webp" alt="Afiche - Monte Venus">
                </div>
                <h5 class="title-produc">Monte Venus</h5>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
            <a href="<?php echo $lang['lo-idealLink']; ?>" class="card-produc">
                <div class="image">
                    <img src="assets/images/afiche-loideal.webp" alt="Afiche - Lo Ideal">
                </div>
                <h5 class="title-produc">Lo ideal</h5>
            </a>
        </div>
    </div>

</section>
<section id="<?php echo $lang['headerContacto']; ?>" class="contacto sectionContacto">
<h2 class="sections-title"><?php echo $lang['contacto']; ?></h2>
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <p>Buenos Aires - Argentina</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <h5><?php echo $lang['escribinos']; ?></h5>
            <a href="mailto: info@gronchoestudio.com?subject=Contacto%20desde%20sitio%20web"> info@gronchoestudio.com</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-5 col-md-6 col-sm-12">
           <div class="social">
            <a href="https://www.instagram.com/gronchoestudio/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
            <a href="https://vimeo.com/gronchoestudio" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.8 153.6c-2 43.6-32.4 103.3-91.4 179.1-60.9 79.2-112.4 118.8-154.6 118.8-26.1 0-48.2-24.1-66.3-72.3C100.3 250 85.3 174.3 56.2 174.3c-3.4 0-15.1 7.1-35.2 21.1L0 168.2c51.6-45.3 100.9-95.7 131.8-98.5 34.9-3.4 56.3 20.5 64.4 71.5 28.7 181.5 41.4 208.9 93.6 126.7 18.7-29.6 28.8-52.1 30.2-67.6 4.8-45.9-35.8-42.8-63.3-31 22-72.1 64.1-107.1 126.2-105.1 45.8 1.2 67.5 31.1 64.9 89.4z"/></svg></a>
            <span>@gronchoestudio</span>
           </div>
        </div>
    </div>
</section>

</div>
<?php
include("footer.php");
?>


