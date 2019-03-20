<?php
/**
 * This file is part of event-engine/php-messaging.
 * (c) 2018-2019 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngine\Messaging;

interface MessageProducer
{
    /**
     * @param Message $message
     * @return mixed|null In case of a query a result is returned otherwise null
     */
    public function produce(Message $message);
}
