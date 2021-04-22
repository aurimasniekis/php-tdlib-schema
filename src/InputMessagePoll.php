<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a poll. Polls can't be sent to secret chats. Polls can be sent only to a private chat with a bot.
 */
class InputMessagePoll extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessagePoll';

    /**
     * Poll question, 1-255 characters (up to 300 characters for bots).
     */
    protected string $question;

    /**
     * List of poll answer options, 2-10 strings 1-100 characters each.
     *
     * @var string[]
     */
    protected array $options;

    /**
     * True, if the poll voters are anonymous. Non-anonymous polls can't be sent or forwarded to channels.
     */
    protected bool $isAnonymous;

    /**
     * Type of the poll.
     */
    protected PollType $type;

    /**
     * Amount of time the poll will be active after creation, in seconds; for bots only.
     */
    protected int $openPeriod;

    /**
     * Point in time (Unix timestamp) when the poll will be automatically closed; for bots only.
     */
    protected int $closeDate;

    /**
     * True, if the poll needs to be sent already closed; for bots only.
     */
    protected bool $isClosed;

    public function __construct(
        string $question,
        array $options,
        bool $isAnonymous,
        PollType $type,
        int $openPeriod,
        int $closeDate,
        bool $isClosed
    ) {
        parent::__construct();

        $this->question    = $question;
        $this->options     = $options;
        $this->isAnonymous = $isAnonymous;
        $this->type        = $type;
        $this->openPeriod  = $openPeriod;
        $this->closeDate   = $closeDate;
        $this->isClosed    = $isClosed;
    }

    public static function fromArray(array $array): InputMessagePoll
    {
        return new static(
            $array['question'],
            $array['options'],
            $array['is_anonymous'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['open_period'],
            $array['close_date'],
            $array['is_closed'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'question'     => $this->question,
            'options'      => $this->options,
            'is_anonymous' => $this->isAnonymous,
            'type'         => $this->type->typeSerialize(),
            'open_period'  => $this->openPeriod,
            'close_date'   => $this->closeDate,
            'is_closed'    => $this->isClosed,
        ];
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getType(): PollType
    {
        return $this->type;
    }

    public function getOpenPeriod(): int
    {
        return $this->openPeriod;
    }

    public function getCloseDate(): int
    {
        return $this->closeDate;
    }

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }
}
