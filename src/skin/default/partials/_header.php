<?php
use Sprout\Helpers\Enc;
use Sprout\Helpers\Navigation;
?>

<header id="header">

    <div class="section section-header bg-navyblue">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-7">

                    <div class="header__logo">

                        <a href="ROOT/" onclick="ga('send', 'event', 'Skin', 'LogoClick');">

                            <img class="header__logo__img" src="SKIN/images/sprout-logo-white.svg" alt="Logo for <?php echo Enc::html(Kohana::config('sprout.site_title')); ?>">

                        </a>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-5">

                    <div class="header__search">

                        <div class="site-search-form site-search-form--header">
                            <form action="search" method="get">

                                <div class="field-element-attach-wrapper">
                                    <div class="field-element field-element--text field-element--hidden-label">
                                        <div class="field-label">
                                            <label for="fm-site-search">Search the Sprout3 test website</label>
                                        </div>
                                        <div class="field-input">
                                            <input id="fm-site-search" class="textbox" name="q" value="products" placeholder="Enter your search here" type="text">
                                        </div>
                                    </div>
                                    <button type="submit" class="field-element-attach-wrapper__button">
                                        <span class="-vis-hidden">Search</span>

                                        <?php include 'skin/default/images/icon-system/icon_search.svg' ?>

                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="bg-orange">

        <nav id="frankenmenu">

            <div class="container">

                <?php Navigation::simpleMenu(); ?>

            </div>

        </nav>

    </div>

</header>