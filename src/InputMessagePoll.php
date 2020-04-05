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
     * Poll question, 1-255 characters.
     *
     * @var string
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
     *
     * @var bool
     */
    protected bool $isAnonymous;

    /**
     * Type of the poll.
     *
     * @var PollType
     */
    protected PollType $type;

    /**
     * True, if the poll needs to be sent already closed; for bots only.
     *
     * @var bool
     */
    protected bool $isClosed;

    public function __construct(string $question, array $options, bool $isAnonymous, PollType $type, bool $isClosed)
    {
        parent::__construct();

        $this->question    = $question;
        $this->options     = $options;
        $this->isAnonymous = $isAnonymous;
        $this->type        = $type;
        $this->isClosed    = $isClosed;
    }

    public static function fromArray(array $array): InputMessagePoll
    {
        return new static(
            $array['question'],
            $array['options'],
            $array['is_anonymous'],
            TdSchemaRegistry::fromArray($array['type']),
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

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }
}
