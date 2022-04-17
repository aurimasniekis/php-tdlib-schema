<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Hides a suggested action
 */
class HideSuggestedAction extends TdFunction
{
    public const TYPE_NAME = 'hideSuggestedAction';

    /**
     * Suggested action to hide
     *
     * @var SuggestedAction
     */
    protected SuggestedAction $action;

    public function __construct(SuggestedAction $action)
    {
        $this->action = $action;
    }

    public static function fromArray(array $array): HideSuggestedAction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'action' => $this->action->typeSerialize(),
        ];
    }

    public function getAction(): SuggestedAction
    {
        return $this->action;
    }
}
