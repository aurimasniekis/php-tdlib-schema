<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a filled-out payment form to the bot for final verification
 */
class SendPaymentForm extends TdFunction
{
    public const TYPE_NAME = 'sendPaymentForm';

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
     * Payment form identifier returned by getPaymentForm
     *
     * @var string
     */
    protected string $paymentFormId;

    /**
     * Identifier returned by validateOrderInfo, or an empty string
     *
     * @var string
     */
    protected string $orderInfoId;

    /**
     * Identifier of a chosen shipping option, if applicable
     *
     * @var string
     */
    protected string $shippingOptionId;

    /**
     * The credentials chosen by user for payment
     *
     * @var InputCredentials
     */
    protected InputCredentials $credentials;

    /**
     * Chosen by the user amount of tip in the smallest units of the currency
     *
     * @var int
     */
    protected int $tipAmount;

    public function __construct(
        int $chatId,
        int $messageId,
        string $paymentFormId,
        string $orderInfoId,
        string $shippingOptionId,
        InputCredentials $credentials,
        int $tipAmount
    ) {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->paymentFormId = $paymentFormId;
        $this->orderInfoId = $orderInfoId;
        $this->shippingOptionId = $shippingOptionId;
        $this->credentials = $credentials;
        $this->tipAmount = $tipAmount;
    }

    public static function fromArray(array $array): SendPaymentForm
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['payment_form_id'],
            $array['order_info_id'],
            $array['shipping_option_id'],
            TdSchemaRegistry::fromArray($array['credentials']),
            $array['tip_amount'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'payment_form_id' => $this->paymentFormId,
            'order_info_id' => $this->orderInfoId,
            'shipping_option_id' => $this->shippingOptionId,
            'credentials' => $this->credentials->typeSerialize(),
            'tip_amount' => $this->tipAmount,
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

    public function getPaymentFormId(): string
    {
        return $this->paymentFormId;
    }

    public function getOrderInfoId(): string
    {
        return $this->orderInfoId;
    }

    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    public function getCredentials(): InputCredentials
    {
        return $this->credentials;
    }

    public function getTipAmount(): int
    {
        return $this->tipAmount;
    }
}
