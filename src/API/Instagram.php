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

class Instagram extends AbstractAPI
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
    public function orderFollowersHQ(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Follower(HQ)', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderFollowersRU(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Follower(RU)', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderViews(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'View', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderLikes(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Like', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderComments(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Comment', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     * @param $imageAmount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function lastLike($link, $amount, $imageAmount): HttpResponse
    {
        return $this->createOrder($link, 'LastLike', $amount, 'WW', 'NO', $imageAmount);
    }

    /**
     * @param $link
     * @param $limit
     * @param $perImage
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function autoLike($link, $limit, $perImage): HttpResponse
    {
        return $this->createOrder($link, 'AutoLike', 0, 'WW', 'NO', 0, $limit, $perImage);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier(): string
    {
        return 'instagram';
    }
}
