<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a TDLib internal log verbosity level
 */
class LogVerbosityLevel extends TdObject
{
    public const TYPE_NAME = 'logVerbosityLevel';

    /**
     * Log verbosity level
     *
     * @var int
     */
    protected int $verbosityLevel;

    public function __construct(int $verbosityLevel)
    {
        $this->verbosityLevel = $verbosityLevel;
    }

    public static function fromArray(array $array): LogVerbosityLevel
    {
        return new static(
            $array['verbosity_level'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'verbosity_level' => $this->verbosityLevel,
        ];
    }

    public function getVerbosityLevel(): int
    {
        return $this->verbosityLevel;
    }
}
