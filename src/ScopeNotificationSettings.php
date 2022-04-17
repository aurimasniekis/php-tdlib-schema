<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about notification settings for several chats
 */
class ScopeNotificationSettings extends TdObject
{
    public const TYPE_NAME = 'scopeNotificationSettings';

    /**
     * Time left before notifications will be unmuted, in seconds
     *
     * @var int
     */
    protected int $muteFor;

    /**
     * The name of an audio file to be used for notification sounds; only applies to iOS applications
     *
     * @var string
     */
    protected string $sound;

    /**
     * True, if message content must be displayed in notifications
     *
     * @var bool
     */
    protected bool $showPreview;

    /**
     * True, if notifications for incoming pinned messages will be created as for an ordinary unread message
     *
     * @var bool
     */
    protected bool $disablePinnedMessageNotifications;

    /**
     * True, if notifications for messages with mentions will be created as for an ordinary unread message
     *
     * @var bool
     */
    protected bool $disableMentionNotifications;

    public function __construct(
        int $muteFor,
        string $sound,
        bool $showPreview,
        bool $disablePinnedMessageNotifications,
        bool $disableMentionNotifications
    ) {
        $this->muteFor = $muteFor;
        $this->sound = $sound;
        $this->showPreview = $showPreview;
        $this->disablePinnedMessageNotifications = $disablePinnedMessageNotifications;
        $this->disableMentionNotifications = $disableMentionNotifications;
    }

    public static function fromArray(array $array): ScopeNotificationSettings
    {
        return new static(
            $array['mute_for'],
            $array['sound'],
            $array['show_preview'],
            $array['disable_pinned_message_notifications'],
            $array['disable_mention_notifications'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'mute_for' => $this->muteFor,
            'sound' => $this->sound,
            'show_preview' => $this->showPreview,
            'disable_pinned_message_notifications' => $this->disablePinnedMessageNotifications,
            'disable_mention_notifications' => $this->disableMentionNotifications,
        ];
    }

    public function getMuteFor(): int
    {
        return $this->muteFor;
    }

    public function getSound(): string
    {
        return $this->sound;
    }

    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    public function getDisablePinnedMessageNotifications(): bool
    {
        return $this->disablePinnedMessageNotifications;
    }

    public function getDisableMentionNotifications(): bool
    {
        return $this->disableMentionNotifications;
    }
}
