<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The password reset request is pending
 */
class ResetPasswordResultPending extends ResetPasswordResult
{
    public const TYPE_NAME = 'resetPasswordResultPending';

    /**
     * Point in time (Unix timestamp) after which the password can be reset immediately using resetPassword
     *
     * @var int
     */
    protected int $pendingResetDate;

    public function __construct(int $pendingResetDate)
    {
        parent::__construct();

        $this->pendingResetDate = $pendingResetDate;
    }

    public static function fromArray(array $array): ResetPasswordResultPending
    {
        return new static(
            $array['pending_reset_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'pending_reset_date' => $this->pendingResetDate,
        ];
    }

    public function getPendingResetDate(): int
    {
        return $this->pendingResetDate;
    }
}
