<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the background selected by the user; adds background to the list of installed backgrounds
 */
class SetBackground extends TdFunction
{
    public const TYPE_NAME = 'setBackground';

    /**
     * The input background to use; pass null to create a new filled backgrounds or to remove the current background
     *
     * @var InputBackground
     */
    protected InputBackground $background;

    /**
     * Background type; pass null to use the default type of the remote background or to remove the current background
     *
     * @var BackgroundType
     */
    protected BackgroundType $type;

    /**
     * True, if the background is chosen for dark theme
     *
     * @var bool
     */
    protected bool $forDarkTheme;

    public function __construct(InputBackground $background, BackgroundType $type, bool $forDarkTheme)
    {
        $this->background = $background;
        $this->type = $type;
        $this->forDarkTheme = $forDarkTheme;
    }

    public static function fromArray(array $array): SetBackground
    {
        return new static(
            TdSchemaRegistry::fromArray($array['background']),
            TdSchemaRegistry::fromArray($array['type']),
            $array['for_dark_theme'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'background' => $this->background->typeSerialize(),
            'type' => $this->type->typeSerialize(),
            'for_dark_theme' => $this->forDarkTheme,
        ];
    }

    public function getBackground(): InputBackground
    {
        return $this->background;
    }

    public function getType(): BackgroundType
    {
        return $this->type;
    }

    public function getForDarkTheme(): bool
    {
        return $this->forDarkTheme;
    }
}
