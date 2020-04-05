<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The file generation process needs to be started by the client.
 */
class UpdateFileGenerationStart extends Update
{
    public const TYPE_NAME = 'updateFileGenerationStart';

    /**
     * Unique identifier for the generation process.
     *
     * @var int
     */
    protected int $generationId;

    /**
     * The path to a file from which a new file is generated; may be empty.
     *
     * @var string
     */
    protected string $originalPath;

    /**
     * The path to a file that should be created and where the new file should be generated.
     *
     * @var string
     */
    protected string $destinationPath;

    /**
     * String specifying the conversion applied to the original file. If conversion is "#url#" than original_path contains an HTTP/HTTPS URL of a file, which should be downloaded by the client.
     *
     * @var string
     */
    protected string $conversion;

    public function __construct(int $generationId, string $originalPath, string $destinationPath, string $conversion)
    {
        parent::__construct();

        $this->generationId    = $generationId;
        $this->originalPath    = $originalPath;
        $this->destinationPath = $destinationPath;
        $this->conversion      = $conversion;
    }

    public static function fromArray(array $array): UpdateFileGenerationStart
    {
        return new static(
            $array['generation_id'],
            $array['original_path'],
            $array['destination_path'],
            $array['conversion'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'generation_id'    => $this->generationId,
            'original_path'    => $this->originalPath,
            'destination_path' => $this->destinationPath,
            'conversion'       => $this->conversion,
        ];
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    public function getOriginalPath(): string
    {
        return $this->originalPath;
    }

    public function getDestinationPath(): string
    {
        return $this->destinationPath;
    }

    public function getConversion(): string
    {
        return $this->conversion;
    }
}
