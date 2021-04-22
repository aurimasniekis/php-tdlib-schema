<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns backgrounds installed by the user.
 */
class GetBackgrounds extends TdFunction
{
    public const TYPE_NAME = 'getBackgrounds';

    /**
     * True, if the backgrounds must be ordered for dark theme.
     */
    protected bool $forDarkTheme;

    public function __construct(bool $forDarkTheme)
    {
        $this->forDarkTheme = $forDarkTheme;
    }

    public static function fromArray(array $array): GetBackgrounds
    {
        return new static(
            $array['for_dark_theme'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'for_dark_theme' => $this->forDarkTheme,
        ];
    }

    public function getForDarkTheme(): bool
    {
        return $this->forDarkTheme;
    }
}
