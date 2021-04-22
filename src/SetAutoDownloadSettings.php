<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets auto-download settings
 */
class SetAutoDownloadSettings extends TdFunction
{
    public const TYPE_NAME = 'setAutoDownloadSettings';

    /**
     * New user auto-download settings
     *
     * @var AutoDownloadSettings
     */
    protected AutoDownloadSettings $settings;

    /**
     * Type of the network for which the new settings are applied
     *
     * @var NetworkType
     */
    protected NetworkType $type;

    public function __construct(AutoDownloadSettings $settings, NetworkType $type)
    {
        $this->settings = $settings;
        $this->type = $type;
    }

    public static function fromArray(array $array): SetAutoDownloadSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['settings']),
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'settings' => $this->settings->typeSerialize(),
            'type' => $this->type->typeSerialize(),
        ];
    }

    public function getSettings(): AutoDownloadSettings
    {
        return $this->settings;
    }

    public function getType(): NetworkType
    {
        return $this->type;
    }
}
