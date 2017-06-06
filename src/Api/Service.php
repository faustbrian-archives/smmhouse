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

class Service extends AbstractApi
{
    /**
     * @return mixed
     */
    public function read(int $id)
    {
        $this->setFormParameters(['service_id' => $id]);

        return $this->post('service/');
    }
}
