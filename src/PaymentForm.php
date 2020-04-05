<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about an invoice payment form.
 */
class PaymentForm extends TdObject
{
    public const TYPE_NAME = 'paymentForm';

    /**
     * Full information of the invoice.
     *
     * @var Invoice
     */
    protected Invoice $invoice;

    /**
     * Payment form URL.
     *
     * @var string
     */
    protected string $url;

    /**
     * Contains information about the payment provider, if available, to support it natively without the need for opening the URL; may be null.
     *
     * @var PaymentsProviderStripe|null
     */
    protected ?PaymentsProviderStripe $paymentsProvider;

    /**
     * Saved server-side order information; may be null.
     *
     * @var OrderInfo|null
     */
    protected ?OrderInfo $savedOrderInfo;

    /**
     * Contains information about saved card credentials; may be null.
     *
     * @var SavedCredentials|null
     */
    protected ?SavedCredentials $savedCredentials;

    /**
     * True, if the user can choose to save credentials.
     *
     * @var bool
     */
    protected bool $canSaveCredentials;

    /**
     * True, if the user will be able to save credentials protected by a password they set up.
     *
     * @var bool
     */
    protected bool $needPassword;

    public function __construct(
        Invoice $invoice,
        string $url,
        ?PaymentsProviderStripe $paymentsProvider,
        ?OrderInfo $savedOrderInfo,
        ?SavedCredentials $savedCredentials,
        bool $canSaveCredentials,
        bool $needPassword
    ) {
        $this->invoice            = $invoice;
        $this->url                = $url;
        $this->paymentsProvider   = $paymentsProvider;
        $this->savedOrderInfo     = $savedOrderInfo;
        $this->savedCredentials   = $savedCredentials;
        $this->canSaveCredentials = $canSaveCredentials;
        $this->needPassword       = $needPassword;
    }

    public static function fromArray(array $array): PaymentForm
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invoice']),
            $array['url'],
            (null !== $array['payments_provider'] ? TdSchemaRegistry::fromArray($array['payments_provider']) : null),
            (null !== $array['saved_order_info'] ? TdSchemaRegistry::fromArray($array['saved_order_info']) : null),
            (null !== $array['saved_credentials'] ? TdSchemaRegistry::fromArray($array['saved_credentials']) : null),
            $array['can_save_credentials'],
            $array['need_password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'invoice'              => $this->invoice->typeSerialize(),
            'url'                  => $this->url,
            'payments_provider'    => (null !== $this->paymentsProvider ? $this->paymentsProvider : null),
            'saved_order_info'     => (null !== $this->savedOrderInfo ? $this->savedOrderInfo : null),
            'saved_credentials'    => (null !== $this->savedCredentials ? $this->savedCredentials : null),
            'can_save_credentials' => $this->canSaveCredentials,
            'need_password'        => $this->needPassword,
        ];
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getUrl(): string
    {
        return $this->url;
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
