<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The 2-step verification was enabled recently, user needs to wait.
 */
class CanTransferOwnershipResultPasswordTooFresh extends CanTransferOwnershipResult
{
    public const TYPE_NAME = 'canTransferOwnershipResultPasswordTooFresh';

    /**
     * Time left before the session can be used to transfer ownership of a chat, in seconds.
     *
     * @var int
     */
    protected int $retryAfter;

    public function __construct(int $retryAfter)
    {
        parent::__construct();

        $this->retryAfter = $retryAfter;
    }

    public static function fromArray(array $array): CanTransferOwnershipResultPasswordTooFresh
    {
        return new static(
            $array['retry_after'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'retry_after' => $this->retryAfter,
        ];
    }

    public function getRetryAfter(): int
    {
        return $this->retryAfter;
    }
}
