<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds a message to TDLib internal log. Can be called synchronously
 */
class AddLogMessage extends TdFunction
{
    public const TYPE_NAME = 'addLogMessage';

    /**
     * The minimum verbosity level needed for the message to be logged, 0-1023
     *
     * @var int
     */
    protected int $verbosityLevel;

    /**
     * Text of a message to log
     *
     * @var string
     */
    protected string $text;

    public function __construct(int $verbosityLevel, string $text)
    {
        $this->verbosityLevel = $verbosityLevel;
        $this->text = $text;
    }

    public static function fromArray(array $array): AddLogMessage
    {
        return new static(
            $array['verbosity_level'],
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'verbosity_level' => $this->verbosityLevel,
            'text' => $this->text,
        ];
    }

    public function getVerbosityLevel(): int
    {
        return $this->verbosityLevel;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
