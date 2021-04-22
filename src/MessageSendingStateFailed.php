<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message failed to be sent
 */
class MessageSendingStateFailed extends MessageSendingState
{
    public const TYPE_NAME = 'messageSendingStateFailed';

    /**
     * An error code; 0 if unknown
     *
     * @var int
     */
    protected int $errorCode;

    /**
     * Error message
     *
     * @var string
     */
    protected string $errorMessage;

    /**
     * True, if the message can be re-sent
     *
     * @var bool
     */
    protected bool $canRetry;

    /**
     * Time left before the message can be re-sent, in seconds. No update is sent when this field changes
     *
     * @var float
     */
    protected float $retryAfter;

    public function __construct(int $errorCode, string $errorMessage, bool $canRetry, float $retryAfter)
    {
        parent::__construct();

        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->canRetry = $canRetry;
        $this->retryAfter = $retryAfter;
    }

    public static function fromArray(array $array): MessageSendingStateFailed
    {
        return new static(
            $array['error_code'],
            $array['error_message'],
            $array['can_retry'],
            $array['retry_after'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'error_code' => $this->errorCode,
            'error_message' => $this->errorMessage,
            'can_retry' => $this->canRetry,
            'retry_after' => $this->retryAfter,
        ];
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getCanRetry(): bool
    {
        return $this->canRetry;
    }

    public function getRetryAfter(): float
    {
        return $this->retryAfter;
    }
}
