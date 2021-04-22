<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents the results of the inline query. Use sendInlineQueryResultMessage to send the result of the query.
 */
class InlineQueryResults extends TdObject
{
    public const TYPE_NAME = 'inlineQueryResults';

    /**
     * Unique identifier of the inline query.
     */
    protected string $inlineQueryId;

    /**
     * The offset for the next request. If empty, there are no more results.
     */
    protected string $nextOffset;

    /**
     * Results of the query.
     *
     * @var InlineQueryResult[]
     */
    protected array $results;

    /**
     * If non-empty, this text should be shown on the button, which opens a private chat with the bot and sends the bot a start message with the switch_pm_parameter.
     */
    protected string $switchPmText;

    /**
     * Parameter for the bot start message.
     */
    protected string $switchPmParameter;

    public function __construct(
        string $inlineQueryId,
        string $nextOffset,
        array $results,
        string $switchPmText,
        string $switchPmParameter
    ) {
        $this->inlineQueryId     = $inlineQueryId;
        $this->nextOffset        = $nextOffset;
        $this->results           = $results;
        $this->switchPmText      = $switchPmText;
        $this->switchPmParameter = $switchPmParameter;
    }

    public static function fromArray(array $array): InlineQueryResults
    {
        return new static(
            $array['inline_query_id'],
            $array['next_offset'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['results']),
            $array['switch_pm_text'],
            $array['switch_pm_parameter'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'inline_query_id'     => $this->inlineQueryId,
            'next_offset'         => $this->nextOffset,
            array_map(fn ($x)     => $x->typeSerialize(), $this->results),
            'switch_pm_text'      => $this->switchPmText,
            'switch_pm_parameter' => $this->switchPmParameter,
        ];
    }

    public function getInlineQueryId(): string
    {
        return $this->inlineQueryId;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getResults(): array
    {
        return $this->results;
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
