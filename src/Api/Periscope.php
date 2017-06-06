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

class Periscope extends AbstractApi
{
    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderFollowers($link, $amount)
    {
        return $this->createOrder($link, 'Followers', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderLikes($link, $amount)
    {
        return $this->createOrder($link, 'Likes', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'periscope';
    }
}
