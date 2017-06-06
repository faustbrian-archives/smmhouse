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

class Dailymotion extends AbstractApi
{
    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderViews($link, $amount)
    {
        return $this->createOrder($link, 'Views', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'dailymotion';
    }
}
