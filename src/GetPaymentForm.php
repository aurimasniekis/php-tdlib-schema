<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an invoice payment form. This method must be called when the user presses inlineKeyboardButtonBuy
 */
class GetPaymentForm extends TdFunction
{
    public const TYPE_NAME = 'getPaymentForm';

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
     * Preferred payment form theme; pass null to use the default theme
     *
     * @var PaymentFormTheme
     */
    protected PaymentFormTheme $theme;

    public function __construct(int $chatId, int $messageId, PaymentFormTheme $theme)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->theme = $theme;
    }

    public static function fromArray(array $array): GetPaymentForm
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['theme']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'theme' => $this->theme->typeSerialize(),
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

    public function getTheme(): PaymentFormTheme
    {
        return $this->theme;
    }
}
