    <footer class="footer">
       <div class="footer-top footer__top">
            <div class="container">
                <div class="row justify-content-between footer-top__contain">                    
                    <a href="/" class="footer-top__logo right-border">
                        <img src="/wp-content/themes/sovservice/img/Logo-footer.svg" alt="Логотип Совсервис" class="footer-top__img">
                    </a>
                    
                    <ul class="footer-top__list footer-menu right-border right-border-second">
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/about">о нас</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/#destinations">услуги</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/reviews/">отзывы</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/contacts/">контакты</a>
                        </li>
                        <li class="footer-menu__item">
                            <a class="footer-menu__link" href="/blog/">блог</a>
                        </li>
                    </ul>

                    <ul class="footer-top__list footer-top__list_second footer-menu right-border right-border-second">
                        <li class="footer-menu__item">
                            <p class="footer-menu__link">монтаж</p>
                        </li>
                        <li class="footer-menu__item">
                            <p class="footer-menu__link">проектирование</p>
                        </li>
                        <li class="footer-menu__item">
                            <p class="footer-menu__link">обслуживание</p>
                        </li>
                        <li class="footer-menu__item">
                            <p class="footer-menu__link">ремонт</p>
                        </li>                       
                    </ul>

                    <ul class="social hero__social hero__social_footer">
                        <li class="social__item col-auto">
                            <a href="#" class="social__link social__link_footer whatsapp"></a>
                        </li>
        
                        <li class="social__item col-auto">
                            <a href="#" class="social__link social__link_footer viber"></a>
                        </li>                
        
                        <li class="social__item col-auto">
                            <a href="#" class="social__link social__link_footer telegram"></a>
                        </li>
        
                        <li class="social__item col-auto">
                            <a href="#" class="social__link social__link_footer vk"></a>
                        </li> 
                    </ul>
                </div>
            </div>
       </div>

       <div class="footer-bottom footer__bottom">
           <div class="container">
                <div class="row copyright footer-bottom__copyright">
                    <p class="copyright col-md-4 col-12">
                        © <?php the_field('copyright', 'options'); ?>                         
                    </p>

                    <a class="copyright__link col-md-3 col-12" href="/privacy">
                        Политика конфиденциальности
                    </a>

                    <p class="copyright col-md-4 col-12">
                        Разработка сайта:<a class="copyright__link" href="https://sim-site.ru"> веб-студия «Символ стиля»</a>
                    </p>
                </div>
           </div>
        </div>
    </footer>

    <div class="to-top"></div>

    <!--Попап Оставить заявку-->
     <div class="blackContainer popup js-zakazContainer">
        <div class="application__box col-xl-6 col-sm-9 col-11">
            <button type="submit" class="application__close js-zakazClose"></button>

            <h3 class="popup__subheading">МЫ&nbsp;БУДЕМ РАДЫ ОТВЕТИТЬ НА&nbsp;ЛЮБОЙ&nbsp;ВОПРОС</h3>

            <?php echo do_shortcode('[contact-form-7 id="354" title="Форма в попапе"]'); ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>

    <script type="text/javascript">
	    document.addEventListener( 'wpcf7mailsent', function( event ) {      
        
        setTimeout(function() {         
            window.location.replace("/thanks/");                         
        }, 100);  

        } ); 
    </script>     

    <?php wp_footer(); ?>

    </body>
</html>  