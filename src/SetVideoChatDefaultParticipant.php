<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes default participant identifier, on whose behalf a video chat in the chat will be joined
 */
class SetVideoChatDefaultParticipant extends TdFunction
{
    public const TYPE_NAME = 'setVideoChatDefaultParticipant';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Default group call participant identifier to join the video chats
     *
     * @var MessageSender
     */
    protected MessageSender $defaultParticipantId;

    public function __construct(int $chatId, MessageSender $defaultParticipantId)
    {
        $this->chatId = $chatId;
        $this->defaultParticipantId = $defaultParticipantId;
    }

    public static function fromArray(array $array): SetVideoChatDefaultParticipant
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['default_participant_id']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'default_participant_id' => $this->defaultParticipantId->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDefaultParticipantId(): MessageSender
    {
        return $this->defaultParticipantId;
    }
}
