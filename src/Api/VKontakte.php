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

use BrianFaust\Unified\AbstractApi;

class VKontakte extends AbstractApi
{
    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderFollowers($link, $amount)
    {
        return $this->createOrder($link, 'Follower', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderLikes($link, $amount)
    {
        return $this->createOrder($link, 'Like', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderPublic($link, $amount)
    {
        return $this->createOrder($link, 'Public', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'vk';
    }
}
