<div class="fluid-container for-footer">
    <div class="container">

        <div class="footer-middle">
            <div class="row">
                <div class="col-sm-12">

                    <div class="news-l">
                        <?php echo do_shortcode('[mc4wp_form id="42"]'); ?>
                    </div>

                    <div class="scial">
                        <a href="" class="facebook"><i class="icon-iconmonstr-facebook-5"></i></a>
                        <a href="" class="twitter"><i class="icon-iconmonstr-twitter-5"></i></a>
                        <a href="" class="linkedin"><i class="icon-iconmonstr-linkedin-5"></i></a>
                        <a href="" class="youtube"><i class="icon-iconmonstr-youtube-10"></i></a>
                    </div>




                </div>
                <div class="col-sm-12">
                    <div class="the-footer-menu">
                        <div class="products">
                            <h5>Products</h5>
                            <?php
                            $args = array(
                                'theme_location' => 'products'
                            );
                            ?>
                            <?php wp_nav_menu($args); ?>


                        </div>

                        <div class="company">
                            <h5>Company</h5>
                            <?php
                            $args = array(
                                'theme_location' => 'company'
                            );
                            ?>
                            <?php wp_nav_menu($args); ?>
                        </div>

                        <div class="legal">
                            <h5>Legal</h5>
                            <?php
                            $args = array(
                                'theme_location' => 'legal'
                            );
                            ?>
                            <?php wp_nav_menu($args); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="designed">
            <div class="done-by">
                <div class="copy-right-area">
                    <p>Copyright &copy; <?php echo date("Y"); ?> Nango. All rights reserved. </p>
                </div>
                <div class="the-quatro">
                    <p>Site by <a href="https://www.quatrohaus.com/">Quatrohaus</a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php wp_footer(); ?>

<script>
    // Ripple

    //hover effect

    // slight change from the video, where I've set the eventListener
    // for the animationend to remove itself after the click


    const rippleButton = document.querySelectorAll(".circle-wrapper .ripple-button");

    // function mousePositionToCustomProp(event, element) {

    // }

    rippleButton.forEach(element => {

        element.parentElement.style.setProperty("--x", "0px");
        element.parentElement.style.setProperty("--y", "-15px");

        element.addEventListener("mousemove", (event) => {

            let width = event.target.offsetWidth * 0.5;
            let height = event.target.offsetHeight * 0.5;

            let posX = (event.offsetX - width) * 0.2;
            let posY = (event.offsetY - height) * 0.2;

            element.parentElement.style.setProperty("--x", posX + "px");
            element.parentElement.style.setProperty("--y", posY + "px");
        });
        element.addEventListener("mouseleave", (event) => {
            element.parentElement.style.setProperty("--x", "0px");
            element.parentElement.style.setProperty("--y", "-15px");
        })
    })
    console.log()

</script>

</body>

</html>
