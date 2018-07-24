<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Famurewa Taiwo <famurewa_taiwo@yahoo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maxtee\Blockchain\Facades;

use Illuminate\Support\Facades\Facade;

class Blockchain extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'blockchain';
    }
}
