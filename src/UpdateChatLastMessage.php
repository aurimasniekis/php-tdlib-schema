<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The last message of a chat was changed. If last_message is null, then the last message in the chat became unknown. Some new unknown messages might be added to the chat in this case
 */
class UpdateChatLastMessage extends Update
{
    public const TYPE_NAME = 'updateChatLastMessage';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new last message in the chat; may be null
     *
     * @var Message|null
     */
    protected ?Message $lastMessage;

    /**
     * The new chat positions in the chat lists
     *
     * @var ChatPosition[]
     */
    protected array $positions;

    public function __construct(int $chatId, ?Message $lastMessage, array $positions)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->lastMessage = $lastMessage;
        $this->positions = $positions;
    }

    public static function fromArray(array $array): UpdateChatLastMessage
    {
        return new static(
            $array['chat_id'],
            (isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'last_message' => (isset($this->lastMessage) ? $this->lastMessage : null),
            array_map(fn($x) => $x->typeSerialize(), $this->positions),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLastMessage(): ?Message
    {
        return $this->lastMessage;
    }

    public function getPositions(): array
    {
        return $this->positions;
    }
}
