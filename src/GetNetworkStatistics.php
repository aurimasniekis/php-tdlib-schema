<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns network data usage statistics. Can be called before authorization
 */
class GetNetworkStatistics extends TdFunction
{
    public const TYPE_NAME = 'getNetworkStatistics';

    /**
     * If true, returns only data for the current library launch
     *
     * @var bool
     */
    protected bool $onlyCurrent;

    public function __construct(bool $onlyCurrent)
    {
        $this->onlyCurrent = $onlyCurrent;
    }

    public static function fromArray(array $array): GetNetworkStatistics
    {
        return new static(
            $array['only_current'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'only_current' => $this->onlyCurrent,
        ];
    }

    public function getOnlyCurrent(): bool
    {
        return $this->onlyCurrent;
    }
}
