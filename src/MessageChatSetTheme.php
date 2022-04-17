<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A theme in the chat has been changed
 */
class MessageChatSetTheme extends MessageContent
{
    public const TYPE_NAME = 'messageChatSetTheme';

    /**
     * If non-empty, name of a new theme, set for the chat. Otherwise chat theme was reset to the default one
     *
     * @var string
     */
    protected string $themeName;

    public function __construct(string $themeName)
    {
        parent::__construct();

        $this->themeName = $themeName;
    }

    public static function fromArray(array $array): MessageChatSetTheme
    {
        return new static(
            $array['theme_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'theme_name' => $this->themeName,
        ];
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }
}
