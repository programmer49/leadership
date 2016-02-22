			<footer>
                <div class="footer">
                    <div class="footer-container">
                        <ul class="footer-grid-list">
                            <li>
                                <div class="footer-grid">
                                    <div class="footer-logo">
                                        <img src="<?php echo get_theme_mod('leader_logo'); ?>">
                                    <img src="<?php echo get_theme_mod('leader_qr_logo'); ?>">
                                    </div>
                                </div>
                            </li>
                            <li>
                             <?php
                              if (has_nav_menu('footer_navigation')) :
                                wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-grid']);
                              endif;
                              ?>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="footer-strip">
                    <p class="pull-left"><?php echo get_theme_mod('leader_copyright'); ?></p>
                    <p class="pull-right"><img src="<?php echo get_theme_mod('leader_developer_logo'); ?>"><?php echo get_theme_mod('leader_developer'); ?></p>
                </div>

            </footer>