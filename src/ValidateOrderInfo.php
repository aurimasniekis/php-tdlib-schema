<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Validates the order information provided by a user and returns the available shipping options for a flexible invoice
 */
class ValidateOrderInfo extends TdFunction
{
    public const TYPE_NAME = 'validateOrderInfo';

    /**
     * Chat identifier of the Invoice message
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The order information, provided by the user; pass null if empty
     *
     * @var OrderInfo
     */
    protected OrderInfo $orderInfo;

    /**
     * True, if the order information can be saved
     *
     * @var bool
     */
    protected bool $allowSave;

    public function __construct(int $chatId, int $messageId, OrderInfo $orderInfo, bool $allowSave)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->orderInfo = $orderInfo;
        $this->allowSave = $allowSave;
    }

    public static function fromArray(array $array): ValidateOrderInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['order_info']),
            $array['allow_save'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'order_info' => $this->orderInfo->typeSerialize(),
            'allow_save' => $this->allowSave,
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

    public function getOrderInfo(): OrderInfo
    {
        return $this->orderInfo;
    }

    public function getAllowSave(): bool
    {
        return $this->allowSave;
    }
}
