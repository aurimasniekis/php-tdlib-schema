<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns current verbosity level for a specified TDLib internal log tag. Can be called synchronously.
 */
class GetLogTagVerbosityLevel extends TdFunction
{
    public const TYPE_NAME = 'getLogTagVerbosityLevel';

    /**
     * Logging tag to change verbosity level.
     */
    protected string $tag;

    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    public static function fromArray(array $array): GetLogTagVerbosityLevel
    {
        return new static(
            $array['tag'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'tag'   => $this->tag,
        ];
    }

    public function getTag(): string
    {
        return $this->tag;
    }
}
