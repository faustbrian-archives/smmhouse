<?php

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

class Twitter extends AbstractAPI
{
    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderFollowers(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Follower', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderRetweets(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Retweet', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderFavorites(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Favorite', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier(): string
    {
        return 'twitter';
    }
}
