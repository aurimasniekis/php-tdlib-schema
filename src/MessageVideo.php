<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video message.
 */
class MessageVideo extends MessageContent
{
    public const TYPE_NAME = 'messageVideo';

    /**
     * The video description.
     */
    protected Video $video;

    /**
     * Video caption.
     */
    protected FormattedText $caption;

    /**
     * True, if the video thumbnail must be blurred and the video must be shown only while tapped.
     */
    protected bool $isSecret;

    public function __construct(Video $video, FormattedText $caption, bool $isSecret)
    {
        parent::__construct();

        $this->video    = $video;
        $this->caption  = $caption;
        $this->isSecret = $isSecret;
    }

    public static function fromArray(array $array): MessageVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['is_secret'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'video'     => $this->video->typeSerialize(),
            'caption'   => $this->caption->typeSerialize(),
            'is_secret' => $this->isSecret,
        ];
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }
}
