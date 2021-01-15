<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is the owner of a chat and has all the administrator privileges.
 */
class ChatMemberStatusCreator extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusCreator';

    /**
     * A custom title of the owner; 0-16 characters without emojis; applicable to supergroups only.
     *
     * @var string
     */
    protected string $customTitle;

    /**
     * True, if the user is a member of the chat.
     *
     * @var bool
     */
    protected bool $isMember;

    public function __construct(string $customTitle, bool $isMember)
    {
        parent::__construct();

        $this->customTitle = $customTitle;
        $this->isMember    = $isMember;
    }

    public static function fromArray(array $array): ChatMemberStatusCreator
    {
        return new static(
            $array['custom_title'],
            $array['is_member'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'custom_title' => $this->customTitle,
            'is_member'    => $this->isMember,
        ];
    }

    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    public function getIsMember(): bool
    {
        return $this->isMember;
    }
}
