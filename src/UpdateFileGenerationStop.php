<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * File generation is no longer needed.
 */
class UpdateFileGenerationStop extends Update
{
    public const TYPE_NAME = 'updateFileGenerationStop';

    /**
     * Unique identifier for the generation process.
     *
     * @var int
     */
    protected int $generationId;

    public function __construct(int $generationId)
    {
        parent::__construct();

        $this->generationId = $generationId;
    }

    public static function fromArray(array $array): UpdateFileGenerationStop
    {
        return new static(
            $array['generation_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'generation_id' => $this->generationId,
        ];
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }
}
