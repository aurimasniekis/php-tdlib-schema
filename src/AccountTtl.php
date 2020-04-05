<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about the period of inactivity after which the current user's account will automatically be deleted.
 */
class AccountTtl extends TdObject
{
    public const TYPE_NAME = 'accountTtl';

    /**
     * Number of days of inactivity before the account will be flagged for deletion; should range from 30-366 days.
     *
     * @var int
     */
    protected int $days;

    public function __construct(int $days)
    {
        $this->days = $days;
    }

    public static function fromArray(array $array): AccountTtl
    {
        return new static(
            $array['days'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'days'  => $this->days,
        ];
    }

    public function getDays(): int
    {
        return $this->days;
    }
}
