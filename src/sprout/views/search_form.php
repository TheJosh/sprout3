<?php
/*
 * kate: tab-width 4; indent-width 4; space-indent on; word-wrap off; word-wrap-column 120;
 * :tabSize=4:indentSize=4:noTabs=true:wrap=false:maxLineLen=120:mode=php:
 *
 * Copyright (C) 2015 Karmabunny Pty Ltd.
 *
 * This file is a part of SproutCMS.
 *
 * SproutCMS is free software: you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * For more information, visit <http://getsproutcms.com>.
 */

use Sprout\Helpers\Enc;
?>
<form action="SITE/search" method="get">

    <div class="field-element-attach-wrapper">
        <div class="field-element field-element--text field-element--hidden-label">
            <div class="field-label">
                <label for="fm-site-search">Search the <?php echo Enc::html(Kohana::config('sprout.site_title')); ?> website</label>
            </div>
            <div class="field-input">
                <input id="fm-site-search" class="textbox" type="text" name="q" value="<?php echo Enc::html(@$_GET['q']); ?>" placeholder="Enter your search here">
            </div>
        </div>
        <button type="submit" class="field-element-attach-wrapper__button">
            <span class="-vis-hidden">Search</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="#58595b" d="M22.5555556,20.8888889 L17.4444444,15.4444444 C18.7777778,13.8888889 19.4444444,11.8888889 19.4444444,9.77777778 C19.4444444,5 15.6666667,1 10.7777778,1 C6,1 2,4.77777778 2,9.66666667 C2,9.77777778 2,9.77777778 2,9.88888889 C2,14.7777778 5.88888889,18.6666667 10.6666667,18.7777778 C12.4444444,18.7777778 14.2222222,18.2222222 15.6666667,17.2222222 L20.8888889,22.6666667 C21.3333333,23.1111111 22,23.1111111 22.4444444,22.6666667 C22.4444444,22.6666667 22.4444444,22.6666667 22.4444444,22.6666667 C23,22 23,21.3333333 22.5555556,20.8888889 Z M10.7777778,3.22222222 C14.3333333,3.22222222 17.3333333,6 17.4444444,9.66666667 C17.4444444,13.2222222 14.6666667,16.2222222 11,16.3333333 C7.33333333,16.4444444 4.44444444,13.5555556 4.33333333,9.88888889 C4.33333333,9.88888889 4.33333333,9.77777778 4.33333333,9.77777778 C4.33333333,6.22222222 7.11111111,3.22222222 10.7777778,3.22222222 Z"/>
            </svg>

        </button>
    </div>

</form>
