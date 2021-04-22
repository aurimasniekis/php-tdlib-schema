<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the value of the default disable_notification parameter, used when a message is sent to a chat
 */
class ToggleChatDefaultDisableNotification extends TdFunction
{
    public const TYPE_NAME = 'toggleChatDefaultDisableNotification';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of default_disable_notification
     *
     * @var bool
     */
    protected bool $defaultDisableNotification;

    public function __construct(int $chatId, bool $defaultDisableNotification)
    {
        $this->chatId = $chatId;
        $this->defaultDisableNotification = $defaultDisableNotification;
    }

    public static function fromArray(array $array): ToggleChatDefaultDisableNotification
    {
        return new static(
            $array['chat_id'],
            $array['default_disable_notification'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'default_disable_notification' => $this->defaultDisableNotification,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDefaultDisableNotification(): bool
    {
        return $this->defaultDisableNotification;
    }
}
