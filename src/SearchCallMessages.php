<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for call messages. Returns the results in reverse chronological order (i. e., in order of decreasing message_id). For optimal performance the number of returned messages is chosen by the library.
 */
class SearchCallMessages extends TdFunction
{
    public const TYPE_NAME = 'searchCallMessages';

    /**
     * Identifier of the message from which to search; use 0 to get results from the last message.
     *
     * @var int
     */
    protected int $fromMessageId;

    /**
     * The maximum number of messages to be returned; up to 100. Fewer messages may be returned than specified by the limit, even if the end of the message history has not been reached.
     *
     * @var int
     */
    protected int $limit;

    /**
     * If true, returns only messages with missed calls.
     *
     * @var bool
     */
    protected bool $onlyMissed;

    public function __construct(int $fromMessageId, int $limit, bool $onlyMissed)
    {
        $this->fromMessageId = $fromMessageId;
        $this->limit         = $limit;
        $this->onlyMissed    = $onlyMissed;
    }

    public static function fromArray(array $array): SearchCallMessages
    {
        return new static(
            $array['from_message_id'],
            $array['limit'],
            $array['only_missed'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'from_message_id' => $this->fromMessageId,
            'limit'           => $this->limit,
            'only_missed'     => $this->onlyMissed,
        ];
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOnlyMissed(): bool
    {
        return $this->onlyMissed;
    }
}
