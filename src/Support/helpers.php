<?php

/*
 * Money PHP Helper
 */
if (! function_exists('money')) {
    function money(string $country = '')
    {
        return \JayThakkar\MoneyWrapper\Utilities\Money::make($country);
    }
}
