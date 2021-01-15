<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Finishes the file generation.
 */
class FinishFileGeneration extends TdFunction
{
    public const TYPE_NAME = 'finishFileGeneration';

    /**
     * The identifier of the generation process.
     *
     * @var string
     */
    protected string $generationId;

    /**
     * If set, means that file generation has failed and should be terminated.
     *
     * @var Error
     */
    protected Error $error;

    public function __construct(string $generationId, Error $error)
    {
        $this->generationId = $generationId;
        $this->error        = $error;
    }

    public static function fromArray(array $array): FinishFileGeneration
    {
        return new static(
            $array['generation_id'],
            TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'generation_id' => $this->generationId,
            'error'         => $this->error->typeSerialize(),
        ];
    }

    public function getGenerationId(): string
    {
        return $this->generationId;
    }

    public function getError(): Error
    {
        return $this->error;
    }
}
