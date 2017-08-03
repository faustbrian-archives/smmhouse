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

class Traffic extends AbstractAPI
{
    /**
     * @param string $link
     * @param int    $amount
     * @param $country
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderTraffic(string $link, int $amount, string $country): HttpResponse
    {
        return $this->createOrder($link, 'Traffic', $amount, $country);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier(): string
    {
        return 'traffic';
    }
}
