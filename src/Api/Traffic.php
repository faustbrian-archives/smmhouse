<?php

/*
 * This file is part of SMMHouse PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SMMHouse\Api;

class Traffic extends AbstractApi
{
    /**
     * @param $link
     * @param $amount
     * @param $country
     *
     * @return mixed
     */
    public function orderTraffic($link, $amount, $country)
    {
        return $this->createOrder($link, 'Traffic', $amount, $country);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'traffic';
    }
}
