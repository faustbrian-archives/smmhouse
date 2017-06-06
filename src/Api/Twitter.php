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

class Twitter extends AbstractApi
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
    public function orderRetweets($link, $amount)
    {
        return $this->createOrder($link, 'Retweet', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderFavorites($link, $amount)
    {
        return $this->createOrder($link, 'Favorite', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'twitter';
    }
}
