<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a chat event
 */
class ChatEvent extends TdObject
{
    public const TYPE_NAME = 'chatEvent';

    /**
     * Chat event identifier
     *
     * @var string
     */
    protected string $id;

    /**
     * Point in time (Unix timestamp) when the event happened
     *
     * @var int
     */
    protected int $date;

    /**
     * Identifier of the user or chat who performed the action
     *
     * @var MessageSender
     */
    protected MessageSender $memberId;

    /**
     * The action
     *
     * @var ChatEventAction
     */
    protected ChatEventAction $action;

    public function __construct(string $id, int $date, MessageSender $memberId, ChatEventAction $action)
    {
        $this->id = $id;
        $this->date = $date;
        $this->memberId = $memberId;
        $this->action = $action;
    }

    public static function fromArray(array $array): ChatEvent
    {
        return new static(
            $array['id'],
            $array['date'],
            TdSchemaRegistry::fromArray($array['member_id']),
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'date' => $this->date,
            'member_id' => $this->memberId->typeSerialize(),
            'action' => $this->action->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }

    public function getAction(): ChatEventAction
    {
        return $this->action;
    }
}
