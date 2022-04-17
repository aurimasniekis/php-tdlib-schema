<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A photo message
 */
class PushMessageContentPhoto extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentPhoto';

    /**
     * Message content; may be null
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    /**
     * Photo caption
     *
     * @var string
     */
    protected string $caption;

    /**
     * True, if the photo is secret
     *
     * @var bool
     */
    protected bool $isSecret;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(?Photo $photo, string $caption, bool $isSecret, bool $isPinned)
    {
        parent::__construct();

        $this->photo = $photo;
        $this->caption = $caption;
        $this->isSecret = $isSecret;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentPhoto
    {
        return new static(
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['caption'],
            $array['is_secret'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'caption' => $this->caption,
            'is_secret' => $this->isSecret,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
