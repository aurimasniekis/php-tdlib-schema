<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the period of inactivity after which sessions will automatically be terminated
 */
class SetInactiveSessionTtl extends TdFunction
{
    public const TYPE_NAME = 'setInactiveSessionTtl';

    /**
     * New number of days of inactivity before sessions will be automatically terminated; 1-366 days
     *
     * @var int
     */
    protected int $inactiveSessionTtlDays;

    public function __construct(int $inactiveSessionTtlDays)
    {
        $this->inactiveSessionTtlDays = $inactiveSessionTtlDays;
    }

    public static function fromArray(array $array): SetInactiveSessionTtl
    {
        return new static(
            $array['inactive_session_ttl_days'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inactive_session_ttl_days' => $this->inactiveSessionTtlDays,
        ];
    }

    public function getInactiveSessionTtlDays(): int
    {
        return $this->inactiveSessionTtlDays;
    }
}
