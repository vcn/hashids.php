<?php

/*
 * This file is part of Hashids.
 *
 * (c) Ivan Akimov <ivan@barreleye.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hashids\Tests;

use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * This is the abstract test case class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
abstract class AbstractTestCase extends TestCase
{
    protected function assertMissingExtension(RuntimeException $e)
    {
        $this->assertSame('Missing BC Math or GMP extension.', $e->getMessage());
    }
}
