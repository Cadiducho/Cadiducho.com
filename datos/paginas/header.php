<nav class="light-blue lighten-1" role="navigation">
        <div class="container">
            <?php
            $inicio = "Cadiducho.com ";
            $texto = $inicio . (pagina("contacto") ? " | Contacto" : (pagina("acerca") ? " | Acerca" : (pagina("cookies") ? "| Cookies" : "")));
            ?>
            <div class="nav-wrapper"><a id="logo-container" class="brand-logo"> <?php echo $texto; ?></a>
                <ul class="right">
                    <li><a href="http://Cadiducho.com/">Web</a></li>
                    <li><a href="http://blog.cadiducho.com/">Blog</a></li>
                    <li><a href="http://dev.cadiducho.com/">Dev</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="http://Cadiducho.com/">Web</a></li>
                    <li><a href="http://blog.cadiducho.com/">Blog</a></li>
                    <li><a href="http://dev.cadiducho.com/">Dev</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>