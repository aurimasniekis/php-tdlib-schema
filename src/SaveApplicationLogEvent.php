<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Saves application log event on the server. Can be called before authorization
 */
class SaveApplicationLogEvent extends TdFunction
{
    public const TYPE_NAME = 'saveApplicationLogEvent';

    /**
     * Event type
     *
     * @var string
     */
    protected string $type;

    /**
     * Optional chat identifier, associated with the event
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The log event data
     *
     * @var JsonValue
     */
    protected JsonValue $data;

    public function __construct(string $type, int $chatId, JsonValue $data)
    {
        $this->type = $type;
        $this->chatId = $chatId;
        $this->data = $data;
    }

    public static function fromArray(array $array): SaveApplicationLogEvent
    {
        return new static(
            $array['type'],
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['data']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type,
            'chat_id' => $this->chatId,
            'data' => $this->data->typeSerialize(),
        ];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getData(): JsonValue
    {
        return $this->data;
    }
}
