<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the chat theme. Supported only in private and secret chats
 */
class SetChatTheme extends TdFunction
{
    public const TYPE_NAME = 'setChatTheme';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Name of the new chat theme; pass an empty string to return the default theme
     *
     * @var string
     */
    protected string $themeName;

    public function __construct(int $chatId, string $themeName)
    {
        $this->chatId = $chatId;
        $this->themeName = $themeName;
    }

    public static function fromArray(array $array): SetChatTheme
    {
        return new static(
            $array['chat_id'],
            $array['theme_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'theme_name' => $this->themeName,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }
}
