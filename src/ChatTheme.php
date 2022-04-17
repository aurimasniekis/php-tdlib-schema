<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a chat theme
 */
class ChatTheme extends TdObject
{
    public const TYPE_NAME = 'chatTheme';

    /**
     * Theme name
     *
     * @var string
     */
    protected string $name;

    /**
     * Theme settings for a light chat theme
     *
     * @var ThemeSettings
     */
    protected ThemeSettings $lightSettings;

    /**
     * Theme settings for a dark chat theme
     *
     * @var ThemeSettings
     */
    protected ThemeSettings $darkSettings;

    public function __construct(string $name, ThemeSettings $lightSettings, ThemeSettings $darkSettings)
    {
        $this->name = $name;
        $this->lightSettings = $lightSettings;
        $this->darkSettings = $darkSettings;
    }

    public static function fromArray(array $array): ChatTheme
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['light_settings']),
            TdSchemaRegistry::fromArray($array['dark_settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'light_settings' => $this->lightSettings->typeSerialize(),
            'dark_settings' => $this->darkSettings->typeSerialize(),
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLightSettings(): ThemeSettings
    {
        return $this->lightSettings;
    }

    public function getDarkSettings(): ThemeSettings
    {
        return $this->darkSettings;
    }
}
