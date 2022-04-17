<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about an invoice payment form
 */
class PaymentForm extends TdObject
{
    public const TYPE_NAME = 'paymentForm';

    /**
     * The payment form identifier
     *
     * @var string
     */
    protected string $id;

    /**
     * Full information of the invoice
     *
     * @var Invoice
     */
    protected Invoice $invoice;

    /**
     * Payment form URL
     *
     * @var string
     */
    protected string $url;

    /**
     * User identifier of the seller bot
     *
     * @var int
     */
    protected int $sellerBotUserId;

    /**
     * User identifier of the payment provider bot
     *
     * @var int
     */
    protected int $paymentsProviderUserId;

    /**
     * Information about the payment provider, if available, to support it natively without the need for opening the URL; may be null
     *
     * @var PaymentsProviderStripe|null
     */
    protected ?PaymentsProviderStripe $paymentsProvider;

    /**
     * Saved server-side order information; may be null
     *
     * @var OrderInfo|null
     */
    protected ?OrderInfo $savedOrderInfo;

    /**
     * Information about saved card credentials; may be null
     *
     * @var SavedCredentials|null
     */
    protected ?SavedCredentials $savedCredentials;

    /**
     * True, if the user can choose to save credentials
     *
     * @var bool
     */
    protected bool $canSaveCredentials;

    /**
     * True, if the user will be able to save credentials protected by a password they set up
     *
     * @var bool
     */
    protected bool $needPassword;

    public function __construct(
        string $id,
        Invoice $invoice,
        string $url,
        int $sellerBotUserId,
        int $paymentsProviderUserId,
        ?PaymentsProviderStripe $paymentsProvider,
        ?OrderInfo $savedOrderInfo,
        ?SavedCredentials $savedCredentials,
        bool $canSaveCredentials,
        bool $needPassword
    ) {
        $this->id = $id;
        $this->invoice = $invoice;
        $this->url = $url;
        $this->sellerBotUserId = $sellerBotUserId;
        $this->paymentsProviderUserId = $paymentsProviderUserId;
        $this->paymentsProvider = $paymentsProvider;
        $this->savedOrderInfo = $savedOrderInfo;
        $this->savedCredentials = $savedCredentials;
        $this->canSaveCredentials = $canSaveCredentials;
        $this->needPassword = $needPassword;
    }

    public static function fromArray(array $array): PaymentForm
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['invoice']),
            $array['url'],
            $array['seller_bot_user_id'],
            $array['payments_provider_user_id'],
            (isset($array['payments_provider']) ? TdSchemaRegistry::fromArray($array['payments_provider']) : null),
            (isset($array['saved_order_info']) ? TdSchemaRegistry::fromArray($array['saved_order_info']) : null),
            (isset($array['saved_credentials']) ? TdSchemaRegistry::fromArray($array['saved_credentials']) : null),
            $array['can_save_credentials'],
            $array['need_password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'invoice' => $this->invoice->typeSerialize(),
            'url' => $this->url,
            'seller_bot_user_id' => $this->sellerBotUserId,
            'payments_provider_user_id' => $this->paymentsProviderUserId,
            'payments_provider' => (isset($this->paymentsProvider) ? $this->paymentsProvider : null),
            'saved_order_info' => (isset($this->savedOrderInfo) ? $this->savedOrderInfo : null),
            'saved_credentials' => (isset($this->savedCredentials) ? $this->savedCredentials : null),
            'can_save_credentials' => $this->canSaveCredentials,
            'need_password' => $this->needPassword,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getSellerBotUserId(): int
    {
        return $this->sellerBotUserId;
    }

    public function getPaymentsProviderUserId(): int
    {
        return $this->paymentsProviderUserId;
    }

    public function getPaymentsProvider(): ?PaymentsProviderStripe
    {
        return $this->paymentsProvider;
    }

    public function getSavedOrderInfo(): ?OrderInfo
    {
        return $this->savedOrderInfo;
    }

    public function getSavedCredentials(): ?SavedCredentials
    {
        return $this->savedCredentials;
    }

    public function getCanSaveCredentials(): bool
    {
        return $this->canSaveCredentials;
    }

    public function getNeedPassword(): bool
    {
        return $this->needPassword;
    }
}
