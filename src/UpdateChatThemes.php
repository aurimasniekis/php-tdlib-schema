<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of available chat themes has changed
 */
class UpdateChatThemes extends Update
{
    public const TYPE_NAME = 'updateChatThemes';

    /**
     * The new list of chat themes
     *
     * @var ChatTheme[]
     */
    protected array $chatThemes;

    public function __construct(array $chatThemes)
    {
        parent::__construct();

        $this->chatThemes = $chatThemes;
    }

    public static function fromArray(array $array): UpdateChatThemes
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_themes']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->chatThemes),
        ];
    }

    public function getChatThemes(): array
    {
        return $this->chatThemes;
    }
}
