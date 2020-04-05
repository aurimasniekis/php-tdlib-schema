<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a chat event.
 */
class ChatEvent extends TdObject
{
    public const TYPE_NAME = 'chatEvent';

    /**
     * Chat event identifier.
     *
     * @var int
     */
    protected int $id;

    /**
     * Point in time (Unix timestamp) when the event happened.
     *
     * @var int
     */
    protected int $date;

    /**
     * Identifier of the user who performed the action that triggered the event.
     *
     * @var int
     */
    protected int $userId;

    /**
     * Action performed by the user.
     *
     * @var ChatEventAction
     */
    protected ChatEventAction $action;

    public function __construct(int $id, int $date, int $userId, ChatEventAction $action)
    {
        $this->id     = $id;
        $this->date   = $date;
        $this->userId = $userId;
        $this->action = $action;
    }

    public static function fromArray(array $array): ChatEvent
    {
        return new static(
            $array['id'],
            $array['date'],
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'id'      => $this->id,
            'date'    => $this->date,
            'user_id' => $this->userId,
            'action'  => $this->action->typeSerialize(),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getAction(): ChatEventAction
    {
        return $this->action;
    }
}
