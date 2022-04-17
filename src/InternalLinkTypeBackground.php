<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a background. Call searchBackground with the given background name to process the link
 */
class InternalLinkTypeBackground extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBackground';

    /**
     * Name of the background
     *
     * @var string
     */
    protected string $backgroundName;

    public function __construct(string $backgroundName)
    {
        parent::__construct();

        $this->backgroundName = $backgroundName;
    }

    public static function fromArray(array $array): InternalLinkTypeBackground
    {
        return new static(
            $array['background_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'background_name' => $this->backgroundName,
        ];
    }

    public function getBackgroundName(): string
    {
        return $this->backgroundName;
    }
}
