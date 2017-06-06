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

class Instagram extends AbstractApi
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
    public function orderFollowersHQ($link, $amount)
    {
        return $this->createOrder($link, 'Follower(HQ)', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderFollowersRU($link, $amount)
    {
        return $this->createOrder($link, 'Follower(RU)', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderViews($link, $amount)
    {
        return $this->createOrder($link, 'View', $amount);
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
    public function orderComments($link, $amount)
    {
        return $this->createOrder($link, 'Comment', $amount);
    }

    /**
     * @param $link
     * @param $amount
     * @param $imageAmount
     *
     * @return mixed
     */
    public function lastLike($link, $amount, $imageAmount)
    {
        return $this->createOrder($link, 'LastLike', $amount, 'WW', 'NO', $imageAmount);
    }

    /**
     * @param $link
     * @param $limit
     * @param $perImage
     *
     * @return mixed
     */
    public function autoLike($link, $limit, $perImage)
    {
        return $this->createOrder($link, 'AutoLike', 0, 'WW', 'NO', 0, $limit, $perImage);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'instagram';
    }
}
