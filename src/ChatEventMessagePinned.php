<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message was pinned
 */
class ChatEventMessagePinned extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessagePinned';

    /**
     * Pinned message
     *
     * @var Message
     */
    protected Message $message;

    public function __construct(Message $message)
    {
        parent::__construct();

        $this->message = $message;
    }

    public static function fromArray(array $array): ChatEventMessagePinned
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
        ];
    }

    public function getMessage(): Message
    {
        return $this->message;
    }
}
