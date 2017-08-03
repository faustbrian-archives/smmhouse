<?php

declare(strict_types=1);

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
use BrianFaust\Http\PendingHttpRequest;

abstract class AbstractAPI
{
    /**
     * @var \BrianFaust\Http\PendingHttpRequest
     */
    protected $client;

    /**
     * Create a new API class instance.
     *
     * @param \BrianFaust\Http\PendingHttpRequest $client
     */
    public function __construct(PendingHttpRequest $client)
    {
        $this->client = $client;
    }

    /**
     * @param $link
     * @param $type
     * @param $amount
     * @param string $country
     * @param string $highRetention
     * @param int    $instagramLastLike
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function createOrder($link, $type, $amount, $country = 'WW', $highRetention = 'NO', $instagramLastLike = 0): HttpResponse
    {
        return $this->client->post($this->getServiceIdentifier().'/', [
            'action'   => 'add',
            'link'     => $link,
            'type'     => $type,
            'amount'   => $amount,
            'country'  => $country,
            'hr'       => $highRetention,
            'lastlike' => $instagramLastLike,
        ]);
    }

    /**
     * @param int $orderId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getOrder(int $order_id): HttpResponse
    {
        return $this->client->post(
            $this->getServiceIdentifier().'/',
            compact('order_id') + ['action' => 'get']
        );
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getService(): HttpResponse
    {
        return $this->client->post('service/', [
            'service_id' => $this->getServiceIdentifier(),
        ]);
    }
}
