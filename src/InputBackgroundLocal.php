<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A background from a local file
 */
class InputBackgroundLocal extends InputBackground
{
    public const TYPE_NAME = 'inputBackgroundLocal';

    /**
     * Background file to use. Only inputFileLocal and inputFileGenerated are supported. The file must be in JPEG format for wallpapers and in PNG format for patterns
     *
     * @var InputFile
     */
    protected InputFile $background;

    public function __construct(InputFile $background)
    {
        parent::__construct();

        $this->background = $background;
    }

    public static function fromArray(array $array): InputBackgroundLocal
    {
        return new static(
            TdSchemaRegistry::fromArray($array['background']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'background' => $this->background->typeSerialize(),
        ];
    }

    public function getBackground(): InputFile
    {
        return $this->background;
    }
}
