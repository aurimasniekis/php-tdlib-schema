<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes actions that a user is allowed to take in a chat
 */
class ChatPermissions extends TdObject
{
    public const TYPE_NAME = 'chatPermissions';

    /**
     * True, if the user can send text messages, contacts, locations, and venues
     *
     * @var bool
     */
    protected bool $canSendMessages;

    /**
     * True, if the user can send audio files, documents, photos, videos, video notes, and voice notes. Implies can_send_messages permissions
     *
     * @var bool
     */
    protected bool $canSendMediaMessages;

    /**
     * True, if the user can send polls. Implies can_send_messages permissions
     *
     * @var bool
     */
    protected bool $canSendPolls;

    /**
     * True, if the user can send animations, games, stickers, and dice and use inline bots. Implies can_send_messages permissions
     *
     * @var bool
     */
    protected bool $canSendOtherMessages;

    /**
     * True, if the user may add a web page preview to their messages. Implies can_send_messages permissions
     *
     * @var bool
     */
    protected bool $canAddWebPagePreviews;

    /**
     * True, if the user can change the chat title, photo, and other settings
     *
     * @var bool
     */
    protected bool $canChangeInfo;

    /**
     * True, if the user can invite new users to the chat
     *
     * @var bool
     */
    protected bool $canInviteUsers;

    /**
     * True, if the user can pin messages
     *
     * @var bool
     */
    protected bool $canPinMessages;

    public function __construct(
        bool $canSendMessages,
        bool $canSendMediaMessages,
        bool $canSendPolls,
        bool $canSendOtherMessages,
        bool $canAddWebPagePreviews,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPinMessages
    ) {
        $this->canSendMessages = $canSendMessages;
        $this->canSendMediaMessages = $canSendMediaMessages;
        $this->canSendPolls = $canSendPolls;
        $this->canSendOtherMessages = $canSendOtherMessages;
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
        $this->canChangeInfo = $canChangeInfo;
        $this->canInviteUsers = $canInviteUsers;
        $this->canPinMessages = $canPinMessages;
    }

    public static function fromArray(array $array): ChatPermissions
    {
        return new static(
            $array['can_send_messages'],
            $array['can_send_media_messages'],
            $array['can_send_polls'],
            $array['can_send_other_messages'],
            $array['can_add_web_page_previews'],
            $array['can_change_info'],
            $array['can_invite_users'],
            $array['can_pin_messages'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'can_send_messages' => $this->canSendMessages,
            'can_send_media_messages' => $this->canSendMediaMessages,
            'can_send_polls' => $this->canSendPolls,
            'can_send_other_messages' => $this->canSendOtherMessages,
            'can_add_web_page_previews' => $this->canAddWebPagePreviews,
            'can_change_info' => $this->canChangeInfo,
            'can_invite_users' => $this->canInviteUsers,
            'can_pin_messages' => $this->canPinMessages,
        ];
    }

    public function getCanSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    public function getCanSendMediaMessages(): bool
    {
        return $this->canSendMediaMessages;
    }

    public function getCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    public function getCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    public function getCanAddWebPagePreviews(): bool
    {
        return $this->canAddWebPagePreviews;
    }

    public function getCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }
}
