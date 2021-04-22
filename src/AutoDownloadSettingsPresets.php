<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains auto-download settings presets for the user
 */
class AutoDownloadSettingsPresets extends TdObject
{
    public const TYPE_NAME = 'autoDownloadSettingsPresets';

    /**
     * Preset with lowest settings; supposed to be used by default when roaming
     *
     * @var AutoDownloadSettings
     */
    protected AutoDownloadSettings $low;

    /**
     * Preset with medium settings; supposed to be used by default when using mobile data
     *
     * @var AutoDownloadSettings
     */
    protected AutoDownloadSettings $medium;

    /**
     * Preset with highest settings; supposed to be used by default when connected on Wi-Fi
     *
     * @var AutoDownloadSettings
     */
    protected AutoDownloadSettings $high;

    public function __construct(AutoDownloadSettings $low, AutoDownloadSettings $medium, AutoDownloadSettings $high)
    {
        $this->low = $low;
        $this->medium = $medium;
        $this->high = $high;
    }

    public static function fromArray(array $array): AutoDownloadSettingsPresets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['low']),
            TdSchemaRegistry::fromArray($array['medium']),
            TdSchemaRegistry::fromArray($array['high']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'low' => $this->low->typeSerialize(),
            'medium' => $this->medium->typeSerialize(),
            'high' => $this->high->typeSerialize(),
        ];
    }

    public function getLow(): AutoDownloadSettings
    {
        return $this->low;
    }

    public function getMedium(): AutoDownloadSettings
    {
        return $this->medium;
    }

    public function getHigh(): AutoDownloadSettings
    {
        return $this->high;
    }
}
