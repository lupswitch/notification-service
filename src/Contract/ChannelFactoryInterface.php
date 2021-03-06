<?php


namespace App\Contract;

use App\Contract\ChannelInterface;
use App\Exceptions\DriverNotFoundException;

/**
 * Interface ChannelFactoryInterface
 *
 * @package App\Contract
 */
interface ChannelFactoryInterface
{
    /**
     * @param string $name
     *
     * @return ChannelInterface
     * @throws DriverNotFoundException
     */
    public function create(string $name): ChannelInterface;
}
