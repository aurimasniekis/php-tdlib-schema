<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The order of the chat in the chat list has changed. Instead of this update updateChatLastMessage, updateChatIsPinned, updateChatDraftMessage, or updateChatIsSponsored might be sent.
 */
class UpdateChatOrder extends Update
{
    public const TYPE_NAME = 'updateChatOrder';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New value of the order.
     */
    protected string $order;

    public function __construct(int $chatId, string $order)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->order  = $order;
    }

    public static function fromArray(array $array): UpdateChatOrder
    {
        return new static(
            $array['chat_id'],
            $array['order'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'order'   => $this->order,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getOrder(): string
    {
        return $this->order;
    }
}
