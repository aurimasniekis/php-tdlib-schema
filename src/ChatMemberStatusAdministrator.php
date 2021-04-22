<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is a member of a chat and has some additional privileges. In basic groups, administrators can edit and delete messages sent by others, add new members, and ban unprivileged members. In supergroups and channels, there are more detailed options for administrator privileges
 */
class ChatMemberStatusAdministrator extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusAdministrator';

    /**
     * A custom title of the administrator; 0-16 characters without emojis; applicable to supergroups only
     *
     * @var string
     */
    protected string $customTitle;

    /**
     * True, if the current user can edit the administrator privileges for the called user
     *
     * @var bool
     */
    protected bool $canBeEdited;

    /**
     * True, if the administrator can change the chat title, photo, and other settings
     *
     * @var bool
     */
    protected bool $canChangeInfo;

    /**
     * True, if the administrator can create channel posts; applicable to channels only
     *
     * @var bool
     */
    protected bool $canPostMessages;

    /**
     * True, if the administrator can edit messages of other users and pin messages; applicable to channels only
     *
     * @var bool
     */
    protected bool $canEditMessages;

    /**
     * True, if the administrator can delete messages of other users
     *
     * @var bool
     */
    protected bool $canDeleteMessages;

    /**
     * True, if the administrator can invite new users to the chat
     *
     * @var bool
     */
    protected bool $canInviteUsers;

    /**
     * True, if the administrator can restrict, ban, or unban chat members
     *
     * @var bool
     */
    protected bool $canRestrictMembers;

    /**
     * True, if the administrator can pin messages; applicable to groups only
     *
     * @var bool
     */
    protected bool $canPinMessages;

    /**
     * True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that were directly or indirectly promoted by them
     *
     * @var bool
     */
    protected bool $canPromoteMembers;

    /**
     * True, if the administrator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only
     *
     * @var bool
     */
    protected bool $isAnonymous;

    public function __construct(
        string $customTitle,
        bool $canBeEdited,
        bool $canChangeInfo,
        bool $canPostMessages,
        bool $canEditMessages,
        bool $canDeleteMessages,
        bool $canInviteUsers,
        bool $canRestrictMembers,
        bool $canPinMessages,
        bool $canPromoteMembers,
        bool $isAnonymous
    ) {
        parent::__construct();

        $this->customTitle = $customTitle;
        $this->canBeEdited = $canBeEdited;
        $this->canChangeInfo = $canChangeInfo;
        $this->canPostMessages = $canPostMessages;
        $this->canEditMessages = $canEditMessages;
        $this->canDeleteMessages = $canDeleteMessages;
        $this->canInviteUsers = $canInviteUsers;
        $this->canRestrictMembers = $canRestrictMembers;
        $this->canPinMessages = $canPinMessages;
        $this->canPromoteMembers = $canPromoteMembers;
        $this->isAnonymous = $isAnonymous;
    }

    public static function fromArray(array $array): ChatMemberStatusAdministrator
    {
        return new static(
            $array['custom_title'],
            $array['can_be_edited'],
            $array['can_change_info'],
            $array['can_post_messages'],
            $array['can_edit_messages'],
            $array['can_delete_messages'],
            $array['can_invite_users'],
            $array['can_restrict_members'],
            $array['can_pin_messages'],
            $array['can_promote_members'],
            $array['is_anonymous'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'custom_title' => $this->customTitle,
            'can_be_edited' => $this->canBeEdited,
            'can_change_info' => $this->canChangeInfo,
            'can_post_messages' => $this->canPostMessages,
            'can_edit_messages' => $this->canEditMessages,
            'can_delete_messages' => $this->canDeleteMessages,
            'can_invite_users' => $this->canInviteUsers,
            'can_restrict_members' => $this->canRestrictMembers,
            'can_pin_messages' => $this->canPinMessages,
            'can_promote_members' => $this->canPromoteMembers,
            'is_anonymous' => $this->isAnonymous,
        ];
    }

    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function getCanPostMessages(): bool
    {
        return $this->canPostMessages;
    }

    public function getCanEditMessages(): bool
    {
        return $this->canEditMessages;
    }

    public function getCanDeleteMessages(): bool
    {
        return $this->canDeleteMessages;
    }

    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function getCanRestrictMembers(): bool
    {
        return $this->canRestrictMembers;
    }

    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    public function getCanPromoteMembers(): bool
    {
        return $this->canPromoteMembers;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }
}
