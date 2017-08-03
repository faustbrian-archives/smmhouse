<?php

declare(strict_types=1);

/*
 * This file is part of SMMHouse PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SMMHouse\API;

use BrianFaust\Http\HttpResponse;

class Vimeo extends AbstractAPI
{
    /**
     * @param string $link
     * @param int    $amount
     * @param string $country
     * @param string $hr
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderViews(string $link, int $amount, string $country = 'WW', string $hr = 'NO'): HttpResponse
    {
        return $this->createOrder($link, 'View', $amount, $country, $hr);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier(): string
    {
        return 'vimeo';
    }
}
