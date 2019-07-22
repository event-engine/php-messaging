<?php
/**
 * This file is part of even-engine/php-messaging.
 * (c) 2018-2019 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngineTest\Messaging;

use EventEngine\Messaging\GenericSchemaMessage;
use PHPUnit\Framework\TestCase;

class GenericSchemaMessageTest extends TestCase
{
    public function providerForMessageName(): array
    {
        return [
            [self::class],
            ['MyAwesomeMessage'],
            ['1234'],
            ['My1234'],
        ];
    }

    /**
     * @test
     * @dataProvider providerForMessageName
     * @param $messageName
     */
    public function it_asserts_message_name($messageName): void
    {
        GenericSchemaMessage::assertMessageName($messageName);
        $this->assertTrue(true);
    }
}