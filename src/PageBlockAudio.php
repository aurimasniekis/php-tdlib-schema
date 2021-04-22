<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An audio file.
 */
class PageBlockAudio extends PageBlock
{
    public const TYPE_NAME = 'pageBlockAudio';

    /**
     * Audio file; may be null.
     */
    protected ?Audio $audio;

    /**
     * Audio file caption.
     */
    protected PageBlockCaption $caption;

    public function __construct(?Audio $audio, PageBlockCaption $caption)
    {
        parent::__construct();

        $this->audio   = $audio;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): PageBlockAudio
    {
        return new static(
            (isset($array['audio']) ? TdSchemaRegistry::fromArray($array['audio']) : null),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'audio'   => (isset($this->audio) ? $this->audio : null),
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }
}
