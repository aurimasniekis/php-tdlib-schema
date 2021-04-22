<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the result of a pre-checkout query; for bots only.
 */
class AnswerPreCheckoutQuery extends TdFunction
{
    public const TYPE_NAME = 'answerPreCheckoutQuery';

    /**
     * Identifier of the pre-checkout query.
     */
    protected string $preCheckoutQueryId;

    /**
     * An error message, empty on success.
     */
    protected string $errorMessage;

    public function __construct(string $preCheckoutQueryId, string $errorMessage)
    {
        $this->preCheckoutQueryId = $preCheckoutQueryId;
        $this->errorMessage       = $errorMessage;
    }

    public static function fromArray(array $array): AnswerPreCheckoutQuery
    {
        return new static(
            $array['pre_checkout_query_id'],
            $array['error_message'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'pre_checkout_query_id' => $this->preCheckoutQueryId,
            'error_message'         => $this->errorMessage,
        ];
    }

    public function getPreCheckoutQueryId(): string
    {
        return $this->preCheckoutQueryId;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
