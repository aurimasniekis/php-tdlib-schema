<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the result of a shipping query; for bots only.
 */
class AnswerShippingQuery extends TdFunction
{
    public const TYPE_NAME = 'answerShippingQuery';

    /**
     * Identifier of the shipping query.
     */
    protected string $shippingQueryId;

    /**
     * Available shipping options.
     *
     * @var ShippingOption[]
     */
    protected array $shippingOptions;

    /**
     * An error message, empty on success.
     */
    protected string $errorMessage;

    public function __construct(string $shippingQueryId, array $shippingOptions, string $errorMessage)
    {
        $this->shippingQueryId = $shippingQueryId;
        $this->shippingOptions = $shippingOptions;
        $this->errorMessage    = $errorMessage;
    }

    public static function fromArray(array $array): AnswerShippingQuery
    {
        return new static(
            $array['shipping_query_id'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['shipping_options']),
            $array['error_message'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'shipping_query_id' => $this->shippingQueryId,
            array_map(fn ($x)   => $x->typeSerialize(), $this->shippingOptions),
            'error_message'     => $this->errorMessage,
        ];
    }

    public function getShippingQueryId(): string
    {
        return $this->shippingQueryId;
    }

    public function getShippingOptions(): array
    {
        return $this->shippingOptions;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
