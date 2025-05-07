$(document).ready(function() {

    const offset = 50; 

    $(window).on('scroll', function() {
      const scrollTop = $(window).scrollTop();
  
      const heroTop = $('.sectionHome').offset().top;
      const nosotrosTop = $('.sectionNosotros').offset().top - offset;
      const produccionesTop = $('.sectionProduc').offset().top - offset;
      const contactoTop = $('.sectionContacto').offset().top - offset;
  
      const $logo = $('.logo');
      const $menuBtn = $('.line-burguer');
  
      // Sección HERO
      if (scrollTop < nosotrosTop) {
        $logo.addClass('invisible').removeClass('white');
        $menuBtn.removeClass('black');
      }
  
      // Sección NOSOTROS
      if (scrollTop >= nosotrosTop && scrollTop < produccionesTop) {
        $logo.removeClass('invisible').addClass('white');
        $menuBtn.removeClass('black');
      }
  
      // Sección PRODUCCIONES
      if (scrollTop >= produccionesTop && scrollTop < contactoTop) {
        $logo.removeClass('invisible').removeClass('white');
        $menuBtn.addClass('black');
      }
  
      // Sección CONTACTO
      if (scrollTop >= contactoTop) {
        $logo.removeClass('invisible').addClass('white');
        $menuBtn.removeClass('black');
      }
    });

    // Nav Mobile
    $('.btnMenu').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('on');
        $('.menu-custom-mobile').toggleClass('mostrar');
        $('.nav-mobile').toggleClass('mostrar');
        $('.header-mobile').toggleClass('open');
    });


    // Bio click
    $('.person').click(function(e) {
        $('.person').removeClass('active');
        $(this).addClass('active');
    });

    //Popup trailer

    const videos = $('.videos');
    if(videos.length) {
        const videoBtn = $('.btn-video');
        videoBtn.click(function(event) {
          event.preventDefault();
            const id = $(this).attr('data-id');
            const html = $('.modal[data-id="' + id + '"]').html();
            Swal.fire({
                showCloseButton:   true,
                showCancelButton:  false,
                showConfirmButton: false,
                width:             '100%',
                background:        '#000000',
                html:              html,
            });
        });
    }  
});
