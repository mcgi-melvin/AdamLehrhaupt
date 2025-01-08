<nav>
    <div class="main-footer-container" style="width: 100%; height: auto; background-color: #3A6D8C;">
        <div class="flex-container" style="width: 100%; display: flex; justify-content: center; align-items: flex-start;">
            <div class="left-logo-container" style="">
                <div class="box" style="">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="right-container" style="">
                <div class="links-container" style="display: flex; justify-content: flex-start; align-items: flex-start; flex-direction: column; row-gap: 10px;">
                    <h5 class="nav-header" style="color: #428BCA; font-size: 20px; padding-bottom: 20px; font-weight: bold;">Pages</h5>
                    <?php wp_nav_menu(['theme_location' => 'footer']) ?>
                </div>
                <div class="links-container" style="display: flex; justify-content: flex-start; align-items: flex-start; flex-direction: column; row-gap: 10px;">
                    <h5 class="nav-header" style="color: #428BCA; font-size: 20px; padding-bottom: 20px; font-weight: bold;">Contact</h5>
                    <a href="#" style="list-style: none; text-decoration: none;">
                        <div class="footer-contacts-container" style="display: flex; justify-content: center; align-items: center; column-gap: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><path fill="#428bca" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                            <p class="links">info@adamlehrhaupt.com</p>
                        </div>
                    </a>
                    <h5 class="social-text" style="color: #428BCA; font-size: 20px; padding-top: 40px; padding-bottom: 20px; font-weight: bold;">Social</h5>
                    <div class="icons-container" style=" display: flex;column-gap: 20px;">
                        <?php if( $facebook = get_theme_mod('fl-social-facebook') ): ?>
                            <a href="<?= $facebook ?>" class="links"><svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 448 512"><path fill="#ffffff" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg></a>
                        <?php endif; ?>
                        <?php if( $twitter = get_theme_mod('fl-social-twitter') ): ?>
                            <a href="<?= $twitter ?>" class="links"><svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 448 512"><path fill="#ffffff" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/></svg></a>
                        <?php endif; ?>
                        <?php if( $instagram = get_theme_mod('fl-social-instagram') ): ?>
                            <a href="<?= $instagram ?>" class="links"><svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 448 512"><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                        <?php endif; ?>
                        <?php if( $youtube = get_theme_mod('fl-social-youtube') ): ?>
                            <a href="<?= $youtube ?>" class="links"><svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 576 512"><path fill="#ffffff" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg></a>
                        <?php endif; ?>
                        <?php if( $pinterest = get_theme_mod('fl-social-pinterest') ): ?>
                            <a href="<?= $pinterest ?>" class="links"><svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 448 512"><path fill="#ffffff" d="M384 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h72.6l-2.2-.8c-5.4-48.1-3.1-57.5 15.7-134.7c3.9-16 8.5-35 13.9-57.9c0 0-7.3-14.8-7.3-36.5c0-70.7 75.5-78 75.5-25c0 13.5-5.4 31.1-11.2 49.8c-3.3 10.6-6.6 21.5-9.1 32c-5.7 24.5 12.3 44.4 36.4 44.4c43.7 0 77.2-46 77.2-112.4c0-58.8-42.3-99.9-102.6-99.9C153 139 112 191.4 112 245.6c0 21.1 8.2 43.7 18.3 56c2 2.4 2.3 4.5 1.7 7c-1.1 4.7-3.1 12.9-4.7 19.2c-1 4-1.8 7.3-2.1 8.6c-1.1 4.5-3.5 5.5-8.2 3.3c-30.6-14.3-49.8-59.1-49.8-95.1C67.2 167.1 123.4 96 229.4 96c85.2 0 151.4 60.7 151.4 141.8c0 84.6-53.3 152.7-127.4 152.7c-24.9 0-48.3-12.9-56.3-28.2c0 0-12.3 46.9-15.3 58.4c-5 19.3-17.6 42.9-27.4 59.3H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64z"/></svg></a>
                        <?php endif; ?>
                        <?php if( $linkedin = get_theme_mod('fl-social-linked') ): ?>
                            <a href="<?= $linkedin ?>" class="links"><svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 448 512"><path fill="#ffffff" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
                        <?php endif; ?>
                        <?php if( $google = get_theme_mod('fl-social-google') ): ?>
                            <a href="<?= $google ?>" class="links"><svg xmlns="http://www.w3.org/2000/svg" height="26" width="26" viewBox="0 0 448 512"><path fill="#ffffff" d="M448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM64 256c0-55.3 44.7-100 100-100c27 0 49.5 9.8 67 26.2l-27.1 26.1c-7.4-7.1-20.3-15.4-39.8-15.4c-34.1 0-61.9 28.2-61.9 63.2c0 34.9 27.8 63.2 61.9 63.2c39.6 0 54.4-28.5 56.8-43.1H164V241.8h94.4c1 5 1.6 10.1 1.6 16.6c0 57.1-38.3 97.6-96 97.6c-55.3 0-100-44.7-100-100zm291 18.2v29H325.8v-29h-29V245h29V216H355v29h29v29.2H355z"/></svg></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="icon-flex-container" style="display: flex; flex-direction: column; ">
                    <div class="icon-links-container" style="display: flex; justify-content: flex-start; align-items: flex-start; flex-direction: column; row-gap: 10px;">

                        <div class="icon-links-container" style="width: 100%; display: flex; justify-content: flex-start; align-items: flex-start; flex-direction: column; row-gap: 10px;">
                            <h5 class="nav-header" style="color: #FFFFFF; font-size: 20px; font-weight: bold; padding-bottom: 20px;">Sign up to our <span style="color: #428BCA; font-weight: bold;">newsletter</span></h5>
                            <div class="newsletter-container" style="">
                                <form class="form-container" action="/action_page.php" style="display: flex; column-gap: 20px;">
                                    <input type="email" id="" name="" class="input-email-container" required="" style="width: 300px; padding: 15px; border-color: transparent; color: Black; border-radius: 10px; height: auto; font-size: 15px;" placeholder="Enter your email address">
                                    <input type="submit" value="Submit" class="submit-button" style="padding: 15px 25px; border-radius: 999px; color: #FFFFFF; background-color: #428BCA; border: none; width: auto; height: auto; font-size: 15px; cursor: pointer;">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-items-main-container" style="width: 100%; height: 60px; background-color: #001F3F; display: flex; align-items: center; justify-content: center;">
            <div class="nav-items-flex-container" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <div class="nav-container" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                    <div class="copyright-container" style="width: 100%; display: flex; justify-content: center; align-items: center;">
                        <h5 class="copyright" style="font-size: 17px; color: #FFFFFF;">© <?= get_bloginfo('name') ?> <?= date('Y') ?>. All rights reserved.</h5>
                    </div>
                    <div class="copyright-links-container" style="width: 100%; display: flex; justify-content: center; align-items: center; column-gap: 6px;">
                        <a class="terms" href="#" style="font-size: 17px; text-decoration: none; color: #FFFFFF;">Terms and Conditions</a>
                        <span style="color: white;">|</span>
                        <a class="policy" href="#" style="font-size: 17px; text-decoration: none; color: #FFFFFF;">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


</body>
</html>