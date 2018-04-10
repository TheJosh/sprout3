<?php
use Sprout\Helpers\Enc;
use Sprout\Helpers\Text;
use Sprout\Helpers\Url;
?>

<footer id="footer">

    <div class="section section--pre-footer bg-navyblue">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-9">

                    <div class="row">

                        <div class="col-xs-12 col-sm-4">

                            <h2>Contact us</h2>

                            <p>
                                <strong>T:</strong> <a href="tel:618-5550-0976">+61 8 5550 0976</a><br>
                                <strong>E:</strong> <a href="mailto:test@example.com">test@example.com</a>
                            </p>
                            <p>12 Sprout Street<br>Sproutington SA 5432</p>

                        </div>
                        <div class="col-xs-12 col-sm-8">

                            <h2>Quicklinks</h2>

                            <ul class="block-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="col-xs-12 col-sm-3">

                    <div class="search">
                        <form method="" action="">
                            <h2>Sign up for our enews!</h2>

                            <div class="field-element field-element--text field-element--white field-element--hidden-label">
                                <div class="field-label">
                                    <label for="enews-first-name">First name</label>
                                </div>
                                <div class="field-input">
                                    <input id="enews-first-name" class="textbox" type="text" name="enews-first-name" placeholder="Name">
                                </div>
                            </div>
                            <div class="field-element field-element--text field-element--white field-element--hidden-label">
                                <div class="field-label">
                                    <label for="enews-email">Email</label>
                                </div>
                                <div class="field-input">
                                    <input id="enews-email" class="textbox" type="text" name="enews-email" placeholder="Email Address">
                                </div>
                            </div>

                            <button type="submit" class="button">Sign up</button>

                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="section section--footer section--small bg-orange">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm--left-align">
                    <div class="footer__text">
                        <p>Copyright &copy; <?php echo Enc::html(Text::copyright('2017')); ?> <?php echo Enc::html(Kohana::config('sprout.site_title')); ?>
                        </p>
                        <p>
                            <a href="http://getsproutcms.com" target="_blank" rel="nofollow">Powered by SproutCMS<span class="-vis-hidden">, view the website in a new window</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm--right-align">
                    <ul class="social-list social-list--inline">
                        <li class="social-list__item">
                            <a href="#">
                                <?php include 'skin/default/images/icon-system/icon_facebook.svg';  ?>
                                <span class="-vis-hidden">Follow us on Facebook</span>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#">
                                <?php include 'skin/default/images/icon-system/icon_twitter.svg';  ?>
                                <span class="-vis-hidden">Follow us on Twitter</span>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#">
                                <?php include 'skin/default/images/icon-system/icon_instagram.svg';  ?>
                                <span class="-vis-hidden">Follow us on Instagram</span>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#">
                                <?php include 'skin/default/images/icon-system/icon_youtube.svg';  ?>
                                <span class="-vis-hidden">Follow us on YouTube</span>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#">
                                <?php include 'skin/default/images/icon-system/icon_pinterest.svg';  ?>
                                <span class="-vis-hidden">Follow us on Pinterest</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</footer>
