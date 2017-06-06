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

class Vimeo extends AbstractApi
{
    /**
     * @param $link
     * @param $amount
     * @param string $country
     * @param string $hr
     *
     * @return mixed
     */
    public function orderViews($link, $amount, $country = 'WW', $hr = 'NO')
    {
        return $this->createOrder($link, 'View', $amount, $country, $hr);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'vimeo';
    }
}
