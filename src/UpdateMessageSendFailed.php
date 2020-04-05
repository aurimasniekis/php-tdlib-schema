<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message failed to send. Be aware that some messages being sent can be irrecoverably deleted, in which case updateDeleteMessages will be received instead of this update.
 */
class UpdateMessageSendFailed extends Update
{
    public const TYPE_NAME = 'updateMessageSendFailed';

    /**
     * Contains information about the message which failed to send.
     *
     * @var Message
     */
    protected Message $message;

    /**
     * The previous temporary message identifier.
     *
     * @var int
     */
    protected int $oldMessageId;

    /**
     * An error code.
     *
     * @var int
     */
    protected int $errorCode;

    /**
     * Error message.
     *
     * @var string
     */
    protected string $errorMessage;

    public function __construct(Message $message, int $oldMessageId, int $errorCode, string $errorMessage)
    {
        parent::__construct();

        $this->message      = $message;
        $this->oldMessageId = $oldMessageId;
        $this->errorCode    = $errorCode;
        $this->errorMessage = $errorMessage;
    }

    public static function fromArray(array $array): UpdateMessageSendFailed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['old_message_id'],
            $array['error_code'],
            $array['error_message'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'message'        => $this->message->typeSerialize(),
            'old_message_id' => $this->oldMessageId,
            'error_code'     => $this->errorCode,
            'error_message'  => $this->errorMessage,
        ];
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getOldMessageId(): int
    {
        return $this->oldMessageId;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
