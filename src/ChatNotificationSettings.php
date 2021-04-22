<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about notification settings for a chat
 */
class ChatNotificationSettings extends TdObject
{
    public const TYPE_NAME = 'chatNotificationSettings';

    /**
     * If true, mute_for is ignored and the value for the relevant type of chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultMuteFor;

    /**
     * Time left before notifications will be unmuted, in seconds
     *
     * @var int
     */
    protected int $muteFor;

    /**
     * If true, sound is ignored and the value for the relevant type of chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultSound;

    /**
     * The name of an audio file to be used for notification sounds; only applies to iOS applications
     *
     * @var string
     */
    protected string $sound;

    /**
     * If true, show_preview is ignored and the value for the relevant type of chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultShowPreview;

    /**
     * True, if message content should be displayed in notifications
     *
     * @var bool
     */
    protected bool $showPreview;

    /**
     * If true, disable_pinned_message_notifications is ignored and the value for the relevant type of chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultDisablePinnedMessageNotifications;

    /**
     * If true, notifications for incoming pinned messages will be created as for an ordinary unread message
     *
     * @var bool
     */
    protected bool $disablePinnedMessageNotifications;

    /**
     * If true, disable_mention_notifications is ignored and the value for the relevant type of chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultDisableMentionNotifications;

    /**
     * If true, notifications for messages with mentions will be created as for an ordinary unread message
     *
     * @var bool
     */
    protected bool $disableMentionNotifications;

    public function __construct(
        bool $useDefaultMuteFor,
        int $muteFor,
        bool $useDefaultSound,
        string $sound,
        bool $useDefaultShowPreview,
        bool $showPreview,
        bool $useDefaultDisablePinnedMessageNotifications,
        bool $disablePinnedMessageNotifications,
        bool $useDefaultDisableMentionNotifications,
        bool $disableMentionNotifications
    ) {
        $this->useDefaultMuteFor = $useDefaultMuteFor;
        $this->muteFor = $muteFor;
        $this->useDefaultSound = $useDefaultSound;
        $this->sound = $sound;
        $this->useDefaultShowPreview = $useDefaultShowPreview;
        $this->showPreview = $showPreview;
        $this->useDefaultDisablePinnedMessageNotifications = $useDefaultDisablePinnedMessageNotifications;
        $this->disablePinnedMessageNotifications = $disablePinnedMessageNotifications;
        $this->useDefaultDisableMentionNotifications = $useDefaultDisableMentionNotifications;
        $this->disableMentionNotifications = $disableMentionNotifications;
    }

    public static function fromArray(array $array): ChatNotificationSettings
    {
        return new static(
            $array['use_default_mute_for'],
            $array['mute_for'],
            $array['use_default_sound'],
            $array['sound'],
            $array['use_default_show_preview'],
            $array['show_preview'],
            $array['use_default_disable_pinned_message_notifications'],
            $array['disable_pinned_message_notifications'],
            $array['use_default_disable_mention_notifications'],
            $array['disable_mention_notifications'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'use_default_mute_for' => $this->useDefaultMuteFor,
            'mute_for' => $this->muteFor,
            'use_default_sound' => $this->useDefaultSound,
            'sound' => $this->sound,
            'use_default_show_preview' => $this->useDefaultShowPreview,
            'show_preview' => $this->showPreview,
            'use_default_disable_pinned_message_notifications' => $this->useDefaultDisablePinnedMessageNotifications,
            'disable_pinned_message_notifications' => $this->disablePinnedMessageNotifications,
            'use_default_disable_mention_notifications' => $this->useDefaultDisableMentionNotifications,
            'disable_mention_notifications' => $this->disableMentionNotifications,
        ];
    }

    public function getUseDefaultMuteFor(): bool
    {
        return $this->useDefaultMuteFor;
    }

    public function getMuteFor(): int
    {
        return $this->muteFor;
    }

    public function getUseDefaultSound(): bool
    {
        return $this->useDefaultSound;
    }

    public function getSound(): string
    {
        return $this->sound;
    }

    public function getUseDefaultShowPreview(): bool
    {
        return $this->useDefaultShowPreview;
    }

    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    public function getUseDefaultDisablePinnedMessageNotifications(): bool
    {
        return $this->useDefaultDisablePinnedMessageNotifications;
    }

    public function getDisablePinnedMessageNotifications(): bool
    {
        return $this->disablePinnedMessageNotifications;
    }

    public function getUseDefaultDisableMentionNotifications(): bool
    {
        return $this->useDefaultDisableMentionNotifications;
    }

    public function getDisableMentionNotifications(): bool
    {
        return $this->disableMentionNotifications;
    }
}
