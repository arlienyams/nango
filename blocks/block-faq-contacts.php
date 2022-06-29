<div class="faqBanner">
    <div class="faq-text">
        <h2>Hello</h2>
        <p>Nice of you to drop by. Our operating hours are 8:30am - 5pm Monday to Friday and we try to get to messages as fast as we can.</p>
    </div>
    <div class="faq-row">
        <div class="row">
            <div class="col-md-4">
                <div class="faq-container">
                    <div class="the-faq">
                        <h4><?php block_field('chat-title'); ?></h4>
                        <p class="text-length"><?php block_field('chat-text'); ?></p>
                    </div>
                    <!-- <a href=""><i class="icon-chatbot"></i></a> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="faq-container">
                    <div class="the-faq">
                        <h4><?php block_field('email-title'); ?></h4>
                        <p class="text-length"><?php block_field('email-text'); ?></p>
                    </div>

                    <div class="faq-btn">
                        <a href="mailto:<?php block_field('email'); ?>">Email Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="faq-container">
                    <div class="the-faq">
                        <h4><?php block_field('contact-title'); ?></h4>
                        <p class="text-length"><?php block_field('contact-text'); ?></p>
                    </div>
                    <div class="faq-btn">
                        <a href="<?php block_field('contact-us'); ?>">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>