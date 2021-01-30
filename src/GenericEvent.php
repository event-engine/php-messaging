<?php
/**
 * This file is part of event-engine/php-messaging.
 * (c) 2018-2021 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngine\Messaging;

final class GenericEvent extends GenericSchemaMessage implements Event
{
    public const META_AGGREGATE_ID = '_aggregate_id';
    public const META_AGGREGATE_TYPE = '_aggregate_type';
    public const META_AGGREGATE_VERSION = '_aggregate_version';
    public const META_CAUSATION_ID = '_causation_id';
    public const META_CAUSATION_NAME = '_causation_name';
    public const META_CORRELATION_ID = '_correlation_id';

    public static function fromMessage(Message $message): self
    {
        return self::fromArray([
            'uuid' => $message->uuid()->toString(),
            'message_name' => $message->messageName(),
            'payload' => $message->payload(),
            'metadata' => $message->metadata(),
            'created_at' => $message->createdAt()
        ]);
    }

    /**
     * Should be one of Message::TYPE_COMMAND, Message::TYPE_EVENT or Message::TYPE_QUERY
     */
    public function messageType(): string
    {
        return self::TYPE_EVENT;
    }

    public function version(): int
    {
        return $this->metadata[self::META_AGGREGATE_VERSION] ?? 0;
    }

    public function aggregateId(): string
    {
        return $this->metadata[self::META_AGGREGATE_ID] ?? '';
    }

    public function aggregateType(): string
    {
        return $this->metadata[self::META_AGGREGATE_TYPE] ?? '';
    }

    public function causationId(): string
    {
        return $this->metadata[self::META_CAUSATION_ID] ?? '';
    }

    public function causationName(): string
    {
        return $this->metadata[self::META_CAUSATION_NAME] ?? '';
    }
}
