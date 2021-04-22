<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of websites the current user is logged in with Telegram
 */
class ConnectedWebsites extends TdObject
{
    public const TYPE_NAME = 'connectedWebsites';

    /**
     * List of connected websites
     *
     * @var ConnectedWebsite[]
     */
    protected array $websites;

    public function __construct(array $websites)
    {
        $this->websites = $websites;
    }

    public static function fromArray(array $array): ConnectedWebsites
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['websites']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->websites),
        ];
    }

    public function getWebsites(): array
    {
        return $this->websites;
    }
}
