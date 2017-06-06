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

class YouTube extends AbstractApi
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
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderSubscribers($link, $amount)
    {
        return $this->createOrder($link, 'Subscriber', $amount);
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
    public function orderDislikes($link, $amount)
    {
        return $this->createOrder($link, 'Dislike', $amount);
    }

    /**
     * @param $link
     * @param $amount
     *
     * @return mixed
     */
    public function orderReshare($link, $amount)
    {
        return $this->createOrder($link, 'Reshare', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier()
    {
        return 'youtube';
    }
}
