<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat is a private chat with an administrator of a chat to which the user sent join request
 */
class ChatActionBarJoinRequest extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarJoinRequest';

    /**
     * Title of the chat to which the join request was sent
     *
     * @var string
     */
    protected string $title;

    /**
     * True, if the join request was sent to a channel chat
     *
     * @var bool
     */
    protected bool $isChannel;

    /**
     * Point in time (Unix timestamp) when the join request was sent
     *
     * @var int
     */
    protected int $requestDate;

    public function __construct(string $title, bool $isChannel, int $requestDate)
    {
        parent::__construct();

        $this->title = $title;
        $this->isChannel = $isChannel;
        $this->requestDate = $requestDate;
    }

    public static function fromArray(array $array): ChatActionBarJoinRequest
    {
        return new static(
            $array['title'],
            $array['is_channel'],
            $array['request_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'is_channel' => $this->isChannel,
            'request_date' => $this->requestDate,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getRequestDate(): int
    {
        return $this->requestDate;
    }
}
