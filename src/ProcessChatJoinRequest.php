<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Handles a pending join request in a chat
 */
class ProcessChatJoinRequest extends TdFunction
{
    public const TYPE_NAME = 'processChatJoinRequest';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the user that sent the request
     *
     * @var int
     */
    protected int $userId;

    /**
     * True, if the request is approved. Otherwise the request is declived
     *
     * @var bool
     */
    protected bool $approve;

    public function __construct(int $chatId, int $userId, bool $approve)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
        $this->approve = $approve;
    }

    public static function fromArray(array $array): ProcessChatJoinRequest
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
            $array['approve'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
            'approve' => $this->approve,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getApprove(): bool
    {
        return $this->approve;
    }
}
