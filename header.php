        <div class="header header-mobile">
            <a href="/" class="logo invisible white" style="height:45px; display:flex"><img src="assets/images/logo-black.svg" style="color: #ffffff" alt="GRONCHO"></a>
            <a href="#" class="btnMenu">
                <span class="line-burguer"></span>
                <span class="line-burguer"></span>
                <span class="line-burguer"></span>
            </a>
        </div>
        <div class="menu-custom-mobile">
            <nav class="nav-mobile">
                <ul class="mobile-ul">
                    <li class="link-mobile-custom "><a class="nav-link active" href="#home">home</a></li>
                    <li class="link-mobile-custom "><a class="nav-link" href="#<?php echo $lang['headerNosotros']; ?>"><?php echo $lang['nosotrosTitle']; ?></a></li>
                    <li class="link-mobile-custom "><a class="nav-link" href="#<?php echo $lang['headerProduc']; ?>"><?php echo $lang['producTitle']; ?></a></li>
                    <li class="link-mobile-custom "><a class="nav-link link-mobile" href="#<?php echo $lang['headerContacto']; ?>"><?php echo $lang['contacto']; ?></a></li>   
                </ul>
                <p class="lang">
                <a id="btn-es" class="<?php echo ($_SESSION['lang'] === 'es') ? 'active' : ''; ?>">ES</a>
                <a id="btn-en" class="<?php echo ($_SESSION['lang'] === 'en') ? 'active' : ''; ?>">EN</a>
                </p>
            </nav>
        </div>    
