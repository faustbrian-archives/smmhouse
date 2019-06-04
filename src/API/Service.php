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

class Service extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function read(int $service_id): HttpResponse
    {
        return $this->client->post('service/', compact('service_id'));
    }
}
