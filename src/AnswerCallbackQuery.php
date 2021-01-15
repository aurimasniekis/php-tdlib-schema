<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the result of a callback query; for bots only.
 */
class AnswerCallbackQuery extends TdFunction
{
    public const TYPE_NAME = 'answerCallbackQuery';

    /**
     * Identifier of the callback query.
     */
    protected string $callbackQueryId;

    /**
     * Text of the answer.
     */
    protected string $text;

    /**
     * If true, an alert should be shown to the user instead of a toast notification.
     */
    protected bool $showAlert;

    /**
     * URL to be opened.
     */
    protected string $url;

    /**
     * Time during which the result of the query can be cached, in seconds.
     */
    protected int $cacheTime;

    public function __construct(string $callbackQueryId, string $text, bool $showAlert, string $url, int $cacheTime)
    {
        $this->callbackQueryId = $callbackQueryId;
        $this->text            = $text;
        $this->showAlert       = $showAlert;
        $this->url             = $url;
        $this->cacheTime       = $cacheTime;
    }

    public static function fromArray(array $array): AnswerCallbackQuery
    {
        return new static(
            $array['callback_query_id'],
            $array['text'],
            $array['show_alert'],
            $array['url'],
            $array['cache_time'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'callback_query_id' => $this->callbackQueryId,
            'text'              => $this->text,
            'show_alert'        => $this->showAlert,
            'url'               => $this->url,
            'cache_time'        => $this->cacheTime,
        ];
    }

    public function getCallbackQueryId(): string
    {
        return $this->callbackQueryId;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getShowAlert(): bool
    {
        return $this->showAlert;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getCacheTime(): int
    {
        return $this->cacheTime;
    }
}
