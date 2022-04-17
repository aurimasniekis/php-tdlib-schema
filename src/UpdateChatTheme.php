<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat theme was changed
 */
class UpdateChatTheme extends Update
{
    public const TYPE_NAME = 'updateChatTheme';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new name of the chat theme; may be empty if theme was reset to default
     *
     * @var string
     */
    protected string $themeName;

    public function __construct(int $chatId, string $themeName)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->themeName = $themeName;
    }

    public static function fromArray(array $array): UpdateChatTheme
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
