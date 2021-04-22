<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether the message history of a supergroup is available to new members; requires can_change_info rights
 */
class ToggleSupergroupIsAllHistoryAvailable extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupIsAllHistoryAvailable';

    /**
     * The identifier of the supergroup
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * The new value of is_all_history_available
     *
     * @var bool
     */
    protected bool $isAllHistoryAvailable;

    public function __construct(int $supergroupId, bool $isAllHistoryAvailable)
    {
        $this->supergroupId = $supergroupId;
        $this->isAllHistoryAvailable = $isAllHistoryAvailable;
    }

    public static function fromArray(array $array): ToggleSupergroupIsAllHistoryAvailable
    {
        return new static(
            $array['supergroup_id'],
            $array['is_all_history_available'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'is_all_history_available' => $this->isAllHistoryAvailable,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getIsAllHistoryAvailable(): bool
    {
        return $this->isAllHistoryAvailable;
    }
}
