<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a theme. TDLib has no theme support yet
 */
class InternalLinkTypeTheme extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeTheme';

    /**
     * Name of the theme
     *
     * @var string
     */
    protected string $themeName;

    public function __construct(string $themeName)
    {
        parent::__construct();

        $this->themeName = $themeName;
    }

    public static function fromArray(array $array): InternalLinkTypeTheme
    {
        return new static(
            $array['theme_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'theme_name' => $this->themeName,
        ];
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }
}
