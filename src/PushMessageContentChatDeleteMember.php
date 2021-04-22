<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat member was deleted.
 */
class PushMessageContentChatDeleteMember extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatDeleteMember';

    /**
     * Name of the deleted member.
     */
    protected string $memberName;

    /**
     * True, if the current user was deleted from the group.
     */
    protected bool $isCurrentUser;

    /**
     * True, if the user has left the group themself.
     */
    protected bool $isLeft;

    public function __construct(string $memberName, bool $isCurrentUser, bool $isLeft)
    {
        parent::__construct();

        $this->memberName    = $memberName;
        $this->isCurrentUser = $isCurrentUser;
        $this->isLeft        = $isLeft;
    }

    public static function fromArray(array $array): PushMessageContentChatDeleteMember
    {
        return new static(
            $array['member_name'],
            $array['is_current_user'],
            $array['is_left'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'member_name'     => $this->memberName,
            'is_current_user' => $this->isCurrentUser,
            'is_left'         => $this->isLeft,
        ];
    }

    public function getMemberName(): string
    {
        return $this->memberName;
    }

    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    public function getIsLeft(): bool
    {
        return $this->isLeft;
    }
}
