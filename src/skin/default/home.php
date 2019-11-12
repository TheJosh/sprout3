<?php
use Sprout\Helpers\Enc;
use Sprout\Helpers\Navigation;
use Sprout\Helpers\Request;
use Sprout\Helpers\Skin;
use Sprout\Helpers\Url;
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{browser_title}}</title>

    <base href="<?php echo Url::base(false, Request::protocol()); ?>">

    <link rel="apple-touch-icon" sizes="180x180" href="SKIN/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="SKIN/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="SKIN/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="SKIN/images/favicon/manifest.json">
    <link rel="mask-icon" href="SKIN/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <script type="text/javascript">var ROOT = 'SITE/';</script>

    <?php Skin::common(); ?>
    <?php Skin::css('normalize', 'flexboxgrid', 'global', 'frankenmenu'); ?>
    <?php Skin::js('frankenmenu', 'jquery.matchHeight-min', 'modernizr', 'skin'); ?>

    <?php require_once 'google_analytics.php'; ?>
    <needs />
</head>
<body>
    <!--[if IE]><div class="old-browser"><p>This website uses modern construction techniques, which may not render correctly in your old browser. <br>We recommend updating your browser for the best online experience.</p> <p>Visit <a href="http://browsehappy.com/">browsehappy.com</a> to help you select an upgrade.</p></div><![endif]-->

    <a class="-vis-hidden" href="#content">Skip to Content</a>

    <header id="header">

    <div class="section section--header bg-navyblue">

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

                        <form method="get" action="search">

                            <div class="row">

                                <div class="col-xs-8">

                                    <div class="field-element field-element--text field-element--white field-element--hidden-label">

                                        <div class="field-label">

                                            <label for="fm-site-search">Search the <?php echo Enc::html(Kohana::config('sprout.site_title')); ?> website</label>

                                        </div>

                                        <div class="field-input">

                                            <input id="fm-site-search" class="textbox" type="text" name="q" value="<?php echo Enc::html(@$_GET['q']); ?>" placeholder="Enter your search here">

                                        </div>

                                    </div>

                                </div>

                                <div class="col-xs-4">

                                    <button type="submit" class="button button-block">Search</button>

                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

</div>


    <div id="wrap">
        <div id="content" class="section section--content bg-white">
            <div class="mainbar">
                <ul>
                {% for item in promos %}
                <li><a href="">{{item.heading}}</a></li>
                {% endfor %}
                </ul>
            </div>
        </div>

    </div>

</body>
</html>
