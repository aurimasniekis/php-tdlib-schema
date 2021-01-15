<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat voice chat state has changed.
 */
class UpdateChatVoiceChat extends Update
{
    public const TYPE_NAME = 'updateChatVoiceChat';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New value of voice_chat_group_call_id.
     */
    protected int $voiceChatGroupCallId;

    /**
     * New value of is_voice_chat_empty.
     */
    protected bool $isVoiceChatEmpty;

    public function __construct(int $chatId, int $voiceChatGroupCallId, bool $isVoiceChatEmpty)
    {
        parent::__construct();

        $this->chatId               = $chatId;
        $this->voiceChatGroupCallId = $voiceChatGroupCallId;
        $this->isVoiceChatEmpty     = $isVoiceChatEmpty;
    }

    public static function fromArray(array $array): UpdateChatVoiceChat
    {
        return new static(
            $array['chat_id'],
            $array['voice_chat_group_call_id'],
            $array['is_voice_chat_empty'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'chat_id'                  => $this->chatId,
            'voice_chat_group_call_id' => $this->voiceChatGroupCallId,
            'is_voice_chat_empty'      => $this->isVoiceChatEmpty,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getVoiceChatGroupCallId(): int
    {
        return $this->voiceChatGroupCallId;
    }

    public function getIsVoiceChatEmpty(): bool
    {
        return $this->isVoiceChatEmpty;
    }
}
