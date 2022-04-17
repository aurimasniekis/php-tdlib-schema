<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The is_all_history_available setting of a supergroup was toggled
 */
class ChatEventIsAllHistoryAvailableToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventIsAllHistoryAvailableToggled';

    /**
     * New value of is_all_history_available
     *
     * @var bool
     */
    protected bool $isAllHistoryAvailable;

    public function __construct(bool $isAllHistoryAvailable)
    {
        parent::__construct();

        $this->isAllHistoryAvailable = $isAllHistoryAvailable;
    }

    public static function fromArray(array $array): ChatEventIsAllHistoryAvailableToggled
    {
        return new static(
            $array['is_all_history_available'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_all_history_available' => $this->isAllHistoryAvailable,
        ];
    }

    public function getIsAllHistoryAvailable(): bool
    {
        return $this->isAllHistoryAvailable;
    }
}
