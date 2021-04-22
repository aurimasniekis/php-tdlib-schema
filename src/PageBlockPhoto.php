<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A photo
 */
class PageBlockPhoto extends PageBlock
{
    public const TYPE_NAME = 'pageBlockPhoto';

    /**
     * Photo file; may be null
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    /**
     * Photo caption
     *
     * @var PageBlockCaption
     */
    protected PageBlockCaption $caption;

    /**
     * URL that needs to be opened when the photo is clicked
     *
     * @var string
     */
    protected string $url;

    public function __construct(?Photo $photo, PageBlockCaption $caption, string $url)
    {
        parent::__construct();

        $this->photo = $photo;
        $this->caption = $caption;
        $this->url = $url;
    }

    public static function fromArray(array $array): PageBlockPhoto
    {
        return new static(
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'caption' => $this->caption->typeSerialize(),
            'url' => $this->url,
        ];
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
