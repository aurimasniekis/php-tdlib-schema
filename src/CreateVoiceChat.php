<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates a voice chat (a group call bound to a chat). Available only for basic groups and supergroups; requires can_manage_voice_chats rights.
 */
class CreateVoiceChat extends TdFunction
{
    public const TYPE_NAME = 'createVoiceChat';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): CreateVoiceChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
