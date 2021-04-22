<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an HTTP URL with the chat statistics. Currently this method of getting the statistics are disabled and can be deleted in the future.
 */
class GetChatStatisticsUrl extends TdFunction
{
    public const TYPE_NAME = 'getChatStatisticsUrl';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * Parameters from "tg://statsrefresh?params=******" link.
     */
    protected string $parameters;

    /**
     * Pass true if a URL with the dark theme must be returned.
     */
    protected bool $isDark;

    public function __construct(int $chatId, string $parameters, bool $isDark)
    {
        $this->chatId     = $chatId;
        $this->parameters = $parameters;
        $this->isDark     = $isDark;
    }

    public static function fromArray(array $array): GetChatStatisticsUrl
    {
        return new static(
            $array['chat_id'],
            $array['parameters'],
            $array['is_dark'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'parameters' => $this->parameters,
            'is_dark'    => $this->isDark,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getParameters(): string
    {
        return $this->parameters;
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }
}
