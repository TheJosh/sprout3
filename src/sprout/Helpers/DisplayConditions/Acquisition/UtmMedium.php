<?php
/*
 * Copyright (C) 2017 Karmabunny Pty Ltd.
 *
 * This file is a part of SproutCMS.
 *
 * SproutCMS is free software: you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software Foundation, either
 * version 2 of the License, or (at your option) any later version.
 *
 * For more information, visit <http://getsproutcms.com>.
 */

namespace Sprout\Helpers\DisplayConditions\Acquisition;

use Sprout\Helpers\DisplayConditions\DisplayConditionString;
use Sprout\Helpers\SessionStats;


/**
 * Display condtion for the 'utm_medium' field
 */
class UtmMedium extends DisplayConditionString
{

    /**
     * Return the current value of the variable
     *
     * @param array $env Environment, such as page id etc
     * @return string
     */
    protected function getCurrentValue(array $env)
    {
        return SessionStats::utmMedium();
    }

}
