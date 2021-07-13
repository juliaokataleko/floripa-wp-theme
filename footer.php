<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Links úteis</h3>
                <p>
                    <ul>
                        <li><a href="<?=site_url();?>">Página Inicial</a></li>
                        <li><a href="<?=site_url('/blog');?>">Blog</a></li>
                        
                    </ul>
                </p>
            </div>
            <div class="col-md-6 flex-direction-column">
                <h3 class="text-center">Siga-nos nas redes sociais</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="text-center">Este site foi desenvolvido por Julião Kataleko</p>
            </div>
        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>