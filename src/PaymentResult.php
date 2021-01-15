<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the result of a payment request.
 */
class PaymentResult extends TdObject
{
    public const TYPE_NAME = 'paymentResult';

    /**
     * True, if the payment request was successful; otherwise the verification_url will be not empty.
     *
     * @var bool
     */
    protected bool $success;

    /**
     * URL for additional payment credentials verification.
     *
     * @var string
     */
    protected string $verificationUrl;

    public function __construct(bool $success, string $verificationUrl)
    {
        $this->success         = $success;
        $this->verificationUrl = $verificationUrl;
    }

    public static function fromArray(array $array): PaymentResult
    {
        return new static(
            $array['success'],
            $array['verification_url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'success'          => $this->success,
            'verification_url' => $this->verificationUrl,
        ];
    }

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function getVerificationUrl(): string
    {
        return $this->verificationUrl;
    }
}
