<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The information about interactions with a message has changed.
 */
class UpdateMessageInteractionInfo extends Update
{
    public const TYPE_NAME = 'updateMessageInteractionInfo';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * Message identifier.
     */
    protected int $messageId;

    /**
     * New information about interactions with the message; may be null.
     */
    protected ?MessageInteractionInfo $interactionInfo;

    public function __construct(int $chatId, int $messageId, ?MessageInteractionInfo $interactionInfo)
    {
        parent::__construct();

        $this->chatId          = $chatId;
        $this->messageId       = $messageId;
        $this->interactionInfo = $interactionInfo;
    }

    public static function fromArray(array $array): UpdateMessageInteractionInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            (isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
            'interaction_info' => (isset($this->interactionInfo) ? $this->interactionInfo : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getInteractionInfo(): ?MessageInteractionInfo
    {
        return $this->interactionInfo;
    }
}
