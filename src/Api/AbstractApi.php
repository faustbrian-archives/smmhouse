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

use BrianFaust\Unified\AbstractApi as BaseApi;

abstract class AbstractApi extends BaseApi
{
    /**
     * @param $link
     * @param $type
     * @param $amount
     * @param string $country
     * @param string $highRetention
     * @param int    $instagramLastLike
     *
     * @return mixed
     */
    public function createOrder($link, $type, $amount, $country = 'WW', $highRetention = 'NO', $instagramLastLike = 0)
    {
        $this->setFormParameters([
            'action' => 'add',
            'link' => $link,
            'type' => $type,
            'amount' => $amount,
            'country' => $country,
            'hr' => $highRetention,
            'lastlike' => $instagramLastLike,
        ]);

        return $this->post($this->getServiceIdentifier().'/');
    }

    /**
     * @param $orderId
     *
     * @return mixed
     */
    public function getOrder($orderId)
    {
        $this->setFormParameters([
            'action' => 'get',
            'order_id' => $orderId,
        ]);

        return $this->post($this->getServiceIdentifier().'/');
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        $this->setFormParameters([
            'service_id' => $this->getServiceIdentifier(),
        ]);

        return $this->post('service/');
    }
}
