<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes application-specific data associated with a chat.
 */
class SetChatClientData extends TdFunction
{
    public const TYPE_NAME = 'setChatClientData';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New value of client_data.
     */
    protected string $clientData;

    public function __construct(int $chatId, string $clientData)
    {
        $this->chatId     = $chatId;
        $this->clientData = $clientData;
    }

    public static function fromArray(array $array): SetChatClientData
    {
        return new static(
            $array['chat_id'],
            $array['client_data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'client_data' => $this->clientData,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getClientData(): string
    {
        return $this->clientData;
    }
}
