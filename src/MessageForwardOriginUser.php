<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message was originally sent by a known user.
 */
class MessageForwardOriginUser extends MessageForwardOrigin
{
    public const TYPE_NAME = 'messageForwardOriginUser';

    /**
     * Identifier of the user that originally sent the message.
     */
    protected int $senderUserId;

    public function __construct(int $senderUserId)
    {
        parent::__construct();

        $this->senderUserId = $senderUserId;
    }

    public static function fromArray(array $array): MessageForwardOriginUser
    {
        return new static(
            $array['sender_user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'sender_user_id' => $this->senderUserId,
        ];
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }
}
