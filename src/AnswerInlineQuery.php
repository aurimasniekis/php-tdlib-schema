<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the result of an inline query; for bots only.
 */
class AnswerInlineQuery extends TdFunction
{
    public const TYPE_NAME = 'answerInlineQuery';

    /**
     * Identifier of the inline query.
     *
     * @var string
     */
    protected string $inlineQueryId;

    /**
     * True, if the result of the query can be cached for the specified user.
     *
     * @var bool
     */
    protected bool $isPersonal;

    /**
     * The results of the query.
     *
     * @var InputInlineQueryResult[]
     */
    protected array $results;

    /**
     * Allowed time to cache the results of the query, in seconds.
     *
     * @var int
     */
    protected int $cacheTime;

    /**
     * Offset for the next inline query; pass an empty string if there are no more results.
     *
     * @var string
     */
    protected string $nextOffset;

    /**
     * If non-empty, this text should be shown on the button that opens a private chat with the bot and sends a start message to the bot with the parameter switch_pm_parameter.
     *
     * @var string
     */
    protected string $switchPmText;

    /**
     * The parameter for the bot start message.
     *
     * @var string
     */
    protected string $switchPmParameter;

    public function __construct(
        string $inlineQueryId,
        bool $isPersonal,
        array $results,
        int $cacheTime,
        string $nextOffset,
        string $switchPmText,
        string $switchPmParameter
    ) {
        $this->inlineQueryId     = $inlineQueryId;
        $this->isPersonal        = $isPersonal;
        $this->results           = $results;
        $this->cacheTime         = $cacheTime;
        $this->nextOffset        = $nextOffset;
        $this->switchPmText      = $switchPmText;
        $this->switchPmParameter = $switchPmParameter;
    }

    public static function fromArray(array $array): AnswerInlineQuery
    {
        return new static(
            $array['inline_query_id'],
            $array['is_personal'],
            array_map(fn ($x) => InputInlineQueryResult::fromArray($x), $array['results']),
            $array['cache_time'],
            $array['next_offset'],
            $array['switch_pm_text'],
            $array['switch_pm_parameter'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'inline_query_id'     => $this->inlineQueryId,
            'is_personal'         => $this->isPersonal,
            array_map(fn ($x)     => $x->typeSerialize(), $this->results),
            'cache_time'          => $this->cacheTime,
            'next_offset'         => $this->nextOffset,
            'switch_pm_text'      => $this->switchPmText,
            'switch_pm_parameter' => $this->switchPmParameter,
        ];
    }

    public function getInlineQueryId(): string
    {
        return $this->inlineQueryId;
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    public function getResults(): array
    {
        return $this->results;
    }

    public function getCacheTime(): int
    {
        return $this->cacheTime;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getSwitchPmText(): string
    {
        return $this->switchPmText;
    }

    public function getSwitchPmParameter(): string
    {
        return $this->switchPmParameter;
    }
}
