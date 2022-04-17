<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * New chat members were added
 */
class MessageChatAddMembers extends MessageContent
{
    public const TYPE_NAME = 'messageChatAddMembers';

    /**
     * User identifiers of the new members
     *
     * @var int[]
     */
    protected array $memberUserIds;

    public function __construct(array $memberUserIds)
    {
        parent::__construct();

        $this->memberUserIds = $memberUserIds;
    }

    public static function fromArray(array $array): MessageChatAddMembers
    {
        return new static(
            $array['member_user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'member_user_ids' => $this->memberUserIds,
        ];
    }

    public function getMemberUserIds(): array
    {
        return $this->memberUserIds;
    }
}
