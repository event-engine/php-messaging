<?php
/**
 * This file is part of event-engine/php-messaging.
 * (c) 2018-2021 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngine\Messaging\Exception;

use Throwable;

class RuntimeException extends \RuntimeException implements MessagingException
{
    public function __construct(string $message = "", ?Throwable $previous = null)
    {
        parent::__construct($message, 500, $previous);
    }
}
