    
    <footer>
        <p><strong>Copyright © <?php echo date("Y") ?> Groncho | </strong> Powered by </p> 
        <a href="https://somosroot.com.ar/" target="_blank">
            <img src="assets/images/root-logo.png" alt="">
        </a>
    </footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/sweetalert2.min.js"></script>
    <script src="assets/js/custom.minify.js"></script>    
    <script>
        $(document).ready(function () {
            function changeLanguage(lang) {
                $.ajax({
                    url: 'config/set_language.php',
                    type: 'POST',
                    data: { lang: lang },
                    success: function () {
                        location.reload();
                    }
                });
            }

            $('#btn-es').click(function () {
                changeLanguage('es');
            });

            $('#btn-en').click(function () {
                changeLanguage('en');
            });

            AOS.init();
        });
    </script>
    </body>
</html>