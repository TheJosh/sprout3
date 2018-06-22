<?php
use Sprout\Helpers\Enc;
use Sprout\Helpers\File;
use Sprout\Helpers\Lnk;
use Sprout\Helpers\Text;

if (empty($promos)) {
    return;
}
?>


<div class="section bg-lightgrey">
    <div class="container">

        <h2>Three promo boxes</h2>

        <div class="tile-list row">

            <?php foreach ($promos as $promo): ?>
                <?php
                if (empty($promo['link_label'])) {
                    $promo['link_label'] = 'Read more';
                }
                ?>

                <div class="tile-list__item">
                    <div class="tile">
                        <div class="tile__inner bg-white">
                            <?php if (!empty($promo['filename']) and File::exists($promo['filename'])): ?>
                                <div class="tile__img"><img src="<?= Enc::html(File::resizeUrl($promo['filename'], 'c600x400')); ?>" alt=""></div>
                            <?php endif; ?>

                            <div class="tile__content">
                                <?php if (!empty($promo['heading'])): ?>
                                    <h3 class="tile__content__heading"><?= Enc::html($promo['heading']); ?></h3>
                                <?php endif; ?>

                                <?php
                                echo Text::richtext(Text::limitWords($promo['description'], 20));
                                ?>

                                <?php if (!empty($promo['link'])): ?>
                                    <a href="<?= Enc::html(Lnk::url($promo['link'])); ?>" class="button promo__button"><?= Enc::html($promo['link_label']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>
</div>
