<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of saved animations was updated
 */
class UpdateSavedAnimations extends Update
{
    public const TYPE_NAME = 'updateSavedAnimations';

    /**
     * The new list of file identifiers of saved animations
     *
     * @var int[]
     */
    protected array $animationIds;

    public function __construct(array $animationIds)
    {
        parent::__construct();

        $this->animationIds = $animationIds;
    }

    public static function fromArray(array $array): UpdateSavedAnimations
    {
        return new static(
            $array['animation_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'animation_ids' => $this->animationIds,
        ];
    }

    public function getAnimationIds(): array
    {
        return $this->animationIds;
    }
}
