<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the verbosity level of the internal logging of TDLib. Can be called synchronously
 */
class SetLogVerbosityLevel extends TdFunction
{
    public const TYPE_NAME = 'setLogVerbosityLevel';

    /**
     * New value of the verbosity level for logging. Value 0 corresponds to fatal errors, value 1 corresponds to errors, value 2 corresponds to warnings and debug warnings, value 3 corresponds to informational, value 4 corresponds to debug, value 5 corresponds to verbose debug, value greater than 5 and up to 1023 can be used to enable even more logging
     *
     * @var int
     */
    protected int $newVerbosityLevel;

    public function __construct(int $newVerbosityLevel)
    {
        $this->newVerbosityLevel = $newVerbosityLevel;
    }

    public static function fromArray(array $array): SetLogVerbosityLevel
    {
        return new static(
            $array['new_verbosity_level'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'new_verbosity_level' => $this->newVerbosityLevel,
        ];
    }

    public function getNewVerbosityLevel(): int
    {
        return $this->newVerbosityLevel;
    }
}
