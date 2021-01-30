<?php
/**
 * This file is part of even-engine/php-messaging.
 * (c) 2018-2021 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngine\Messaging;

interface MessageDispatcher
{
    /**
     * @param string|Message $messageOrName
     * @param array $payload
     * @param array $metadata
     * @return CommandDispatchResult|mixed|CommandDispatchResultCollection
     *        Command -> CommandDispatchResult
     *        Query -> mixed result
     *        Event -> CommandDispatchResultCollection (if PMs return commands that are automatically dispatched)
     */
    public function dispatch($messageOrName, array $payload = [], array $metadata = []);
}
