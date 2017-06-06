<?php

/*
 * This file is part of SMMHouse PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SMMHouse;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\SMMHouse\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'http://api.smmhouse.com/',
        'headers' => [
           'User-Agent' => 'BrianFaust/Rulerr-SMMHouse',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];
}
