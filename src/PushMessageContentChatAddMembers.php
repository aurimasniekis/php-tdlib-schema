<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * New chat members were invited to a group
 */
class PushMessageContentChatAddMembers extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatAddMembers';

    /**
     * Name of the added member
     *
     * @var string
     */
    protected string $memberName;

    /**
     * True, if the current user was added to the group
     *
     * @var bool
     */
    protected bool $isCurrentUser;

    /**
     * True, if the user has returned to the group themself
     *
     * @var bool
     */
    protected bool $isReturned;

    public function __construct(string $memberName, bool $isCurrentUser, bool $isReturned)
    {
        parent::__construct();

        $this->memberName = $memberName;
        $this->isCurrentUser = $isCurrentUser;
        $this->isReturned = $isReturned;
    }

    public static function fromArray(array $array): PushMessageContentChatAddMembers
    {
        return new static(
            $array['member_name'],
            $array['is_current_user'],
            $array['is_returned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'member_name' => $this->memberName,
            'is_current_user' => $this->isCurrentUser,
            'is_returned' => $this->isReturned,
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

    public function getIsReturned(): bool
    {
        return $this->isReturned;
    }
}
