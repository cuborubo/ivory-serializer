<?php

/*
 * This file is part of the Ivory Serializer package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\Serializer\Naming;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class IdenticalNamingStrategy implements NamingStrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public function convert($name)
    {
        return $name;
    }
}
