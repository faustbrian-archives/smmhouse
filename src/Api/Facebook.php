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

class Facebook extends AbstractApi
{
    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderPageLikes($link, $amount)
    {
        return $this->createOrder($link, 'Page Likes', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderPostLikes($link, $amount)
    {
        return $this->createOrder($link, 'Post Likes', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderWebsiteLikes($link, $amount)
    {
        return $this->createOrder($link, 'Website Likes', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderSubscribers($link, $amount)
    {
        return $this->createOrder($link, 'Subscribers', $amount);
    }

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
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderGroupJoins($link, $amount)
    {
        return $this->createOrder($link, 'Group Joins', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'facebook';
    }
}
