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

class Facebook extends AbstractAPI
{
    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderPageLikes(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Page Likes', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderPostLikes(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Post Likes', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderWebsiteLikes(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Website Likes', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderSubscribers(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Subscribers', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderViews(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Views', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderGroupJoins(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Group Joins', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier(): string
    {
        return 'facebook';
    }
}
