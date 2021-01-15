<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat's is_sponsored field has changed.
 */
class UpdateChatIsSponsored extends Update
{
    public const TYPE_NAME = 'updateChatIsSponsored';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New value of is_sponsored.
     */
    protected bool $isSponsored;

    /**
     * New value of chat order.
     */
    protected string $order;

    public function __construct(int $chatId, bool $isSponsored, string $order)
    {
        parent::__construct();

        $this->chatId      = $chatId;
        $this->isSponsored = $isSponsored;
        $this->order       = $order;
    }

    public static function fromArray(array $array): UpdateChatIsSponsored
    {
        return new static(
            $array['chat_id'],
            $array['is_sponsored'],
            $array['order'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'is_sponsored' => $this->isSponsored,
            'order'        => $this->order,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsSponsored(): bool
    {
        return $this->isSponsored;
    }

    public function getOrder(): string
    {
        return $this->order;
    }
}
