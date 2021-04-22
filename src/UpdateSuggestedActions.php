<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of suggested to the user actions has changed
 */
class UpdateSuggestedActions extends Update
{
    public const TYPE_NAME = 'updateSuggestedActions';

    /**
     * Added suggested actions
     *
     * @var SuggestedAction[]
     */
    protected array $addedActions;

    /**
     * Removed suggested actions
     *
     * @var SuggestedAction[]
     */
    protected array $removedActions;

    public function __construct(array $addedActions, array $removedActions)
    {
        parent::__construct();

        $this->addedActions = $addedActions;
        $this->removedActions = $removedActions;
    }

    public static function fromArray(array $array): UpdateSuggestedActions
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['added_actions']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['removed_actions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->addedActions),
            array_map(fn($x) => $x->typeSerialize(), $this->removedActions),
        ];
    }

    public function getAddedActions(): array
    {
        return $this->addedActions;
    }

    public function getRemovedActions(): array
    {
        return $this->removedActions;
    }
}
