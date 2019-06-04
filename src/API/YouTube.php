<?php

declare(strict_types=1);

/*
 * This file is part of SMMHouse PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\SMMHouse\API;

use Plients\Http\HttpResponse;

class YouTube extends AbstractAPI
{
    /**
     * @param string $link
     * @param int    $amount
     * @param string $country
     * @param string $hr
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderViews(string $link, int $amount, string $country = 'WW', string $hr = 'NO'): HttpResponse
    {
        return $this->createOrder($link, 'View', $amount, $country, $hr);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderSubscribers(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Subscriber', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderComments(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Comment', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderLikes(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Like', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderDislikes(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Dislike', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderReshare(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Reshare', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier(): string
    {
        return 'youtube';
    }
}
