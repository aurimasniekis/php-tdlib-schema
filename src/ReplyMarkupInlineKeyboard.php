<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains an inline keyboard layout.
 */
class ReplyMarkupInlineKeyboard extends ReplyMarkup
{
    public const TYPE_NAME = 'replyMarkupInlineKeyboard';

    /**
     * A list of rows of inline keyboard buttons.
     *
     * @var InlineKeyboardButton[][]
     */
    protected array $rows;

    public function __construct(array $rows)
    {
        parent::__construct();

        $this->rows = $rows;
    }

    public static function fromArray(array $array): ReplyMarkupInlineKeyboard
    {
        return new static(
            array_map(fn ($x) => array_map(fn ($y) => TdSchemaRegistry::fromArray($y), $x), $array['rows']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => array_map(fn ($y) => $y->typeSerialize(), $x), $this->rows),
        ];
    }

    public function getRows(): array
    {
        return $this->rows;
    }
}
