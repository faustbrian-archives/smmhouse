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

class Service extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function read(int $service_id): HttpResponse
    {
        return $this->client->post('service/', compact('service_id'));
    }
}
