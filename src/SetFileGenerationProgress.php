<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Informs TDLib on a file generation progress.
 */
class SetFileGenerationProgress extends TdFunction
{
    public const TYPE_NAME = 'setFileGenerationProgress';

    /**
     * The identifier of the generation process.
     */
    protected string $generationId;

    /**
     * Expected size of the generated file, in bytes; 0 if unknown.
     */
    protected int $expectedSize;

    /**
     * The number of bytes already generated.
     */
    protected int $localPrefixSize;

    public function __construct(string $generationId, int $expectedSize, int $localPrefixSize)
    {
        $this->generationId    = $generationId;
        $this->expectedSize    = $expectedSize;
        $this->localPrefixSize = $localPrefixSize;
    }

    public static function fromArray(array $array): SetFileGenerationProgress
    {
        return new static(
            $array['generation_id'],
            $array['expected_size'],
            $array['local_prefix_size'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'generation_id'     => $this->generationId,
            'expected_size'     => $this->expectedSize,
            'local_prefix_size' => $this->localPrefixSize,
        ];
    }

    public function getGenerationId(): string
    {
        return $this->generationId;
    }

    public function getExpectedSize(): int
    {
        return $this->expectedSize;
    }

    public function getLocalPrefixSize(): int
    {
        return $this->localPrefixSize;
    }
}
