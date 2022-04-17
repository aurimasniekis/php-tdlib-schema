<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Reports a chat photo to the Telegram moderators. A chat photo can be reported only if chat.can_be_reported
 */
class ReportChatPhoto extends TdFunction
{
    public const TYPE_NAME = 'reportChatPhoto';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the photo to report. Only full photos from chatPhoto can be reported
     *
     * @var int
     */
    protected int $fileId;

    /**
     * The reason for reporting the chat photo
     *
     * @var ChatReportReason
     */
    protected ChatReportReason $reason;

    /**
     * Additional report details; 0-1024 characters
     *
     * @var string
     */
    protected string $text;

    public function __construct(int $chatId, int $fileId, ChatReportReason $reason, string $text)
    {
        $this->chatId = $chatId;
        $this->fileId = $fileId;
        $this->reason = $reason;
        $this->text = $text;
    }

    public static function fromArray(array $array): ReportChatPhoto
    {
        return new static(
            $array['chat_id'],
            $array['file_id'],
            TdSchemaRegistry::fromArray($array['reason']),
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'file_id' => $this->fileId,
            'reason' => $this->reason->typeSerialize(),
            'text' => $this->text,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getReason(): ChatReportReason
    {
        return $this->reason;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
