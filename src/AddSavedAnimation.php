<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Manually adds a new animation to the list of saved animations. The new animation is added to the beginning of the list. If the animation was already in the list, it is removed first. Only non-secret video animations with MIME type "video/mp4" can be added to the list.
 */
class AddSavedAnimation extends TdFunction
{
    public const TYPE_NAME = 'addSavedAnimation';

    /**
     * The animation file to be added. Only animations known to the server (i.e. successfully sent via a message) can be added to the list.
     */
    protected InputFile $animation;

    public function __construct(InputFile $animation)
    {
        $this->animation = $animation;
    }

    public static function fromArray(array $array): AddSavedAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animation']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'animation' => $this->animation->typeSerialize(),
        ];
    }

    public function getAnimation(): InputFile
    {
        return $this->animation;
    }
}
