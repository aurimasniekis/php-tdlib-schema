<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new message was received; can also be an outgoing message.
 */
class UpdateNewMessage extends Update
{
    public const TYPE_NAME = 'updateNewMessage';

    /**
     * The new message.
     */
    protected Message $message;

    public function __construct(Message $message)
    {
        parent::__construct();

        $this->message = $message;
    }

    public static function fromArray(array $array): UpdateNewMessage
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
        ];
    }

    public function getMessage(): Message
    {
        return $this->message;
    }
}
