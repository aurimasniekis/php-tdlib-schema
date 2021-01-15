<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a file with a map thumbnail in PNG format. Only map thumbnail files with size less than 1MB can be downloaded.
 */
class GetMapThumbnailFile extends TdFunction
{
    public const TYPE_NAME = 'getMapThumbnailFile';

    /**
     * Location of the map center.
     */
    protected Location $location;

    /**
     * Map zoom level; 13-20.
     */
    protected int $zoom;

    /**
     * Map width in pixels before applying scale; 16-1024.
     */
    protected int $width;

    /**
     * Map height in pixels before applying scale; 16-1024.
     */
    protected int $height;

    /**
     * Map scale; 1-3.
     */
    protected int $scale;

    /**
     * Identifier of a chat, in which the thumbnail will be shown. Use 0 if unknown.
     */
    protected int $chatId;

    public function __construct(Location $location, int $zoom, int $width, int $height, int $scale, int $chatId)
    {
        $this->location = $location;
        $this->zoom     = $zoom;
        $this->width    = $width;
        $this->height   = $height;
        $this->scale    = $scale;
        $this->chatId   = $chatId;
    }

    public static function fromArray(array $array): GetMapThumbnailFile
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['zoom'],
            $array['width'],
            $array['height'],
            $array['scale'],
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
            'zoom'     => $this->zoom,
            'width'    => $this->width,
            'height'   => $this->height,
            'scale'    => $this->scale,
            'chat_id'  => $this->chatId,
        ];
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getZoom(): int
    {
        return $this->zoom;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getScale(): int
    {
        return $this->scale;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
