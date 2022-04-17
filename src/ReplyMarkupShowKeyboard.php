<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a custom keyboard layout to quickly reply to bots
 */
class ReplyMarkupShowKeyboard extends ReplyMarkup
{
    public const TYPE_NAME = 'replyMarkupShowKeyboard';

    /**
     * A list of rows of bot keyboard buttons
     *
     * @var KeyboardButton[][]
     */
    protected array $rows;

    /**
     * True, if the application needs to resize the keyboard vertically
     *
     * @var bool
     */
    protected bool $resizeKeyboard;

    /**
     * True, if the application needs to hide the keyboard after use
     *
     * @var bool
     */
    protected bool $oneTime;

    /**
     * True, if the keyboard must automatically be shown to the current user. For outgoing messages, specify true to show the keyboard only for the mentioned users and for the target user of a reply
     *
     * @var bool
     */
    protected bool $isPersonal;

    /**
     * If non-empty, the placeholder to be shown in the input field when the keyboard is active; 0-64 characters
     *
     * @var string
     */
    protected string $inputFieldPlaceholder;

    public function __construct(
        array $rows,
        bool $resizeKeyboard,
        bool $oneTime,
        bool $isPersonal,
        string $inputFieldPlaceholder
    ) {
        parent::__construct();

        $this->rows = $rows;
        $this->resizeKeyboard = $resizeKeyboard;
        $this->oneTime = $oneTime;
        $this->isPersonal = $isPersonal;
        $this->inputFieldPlaceholder = $inputFieldPlaceholder;
    }

    public static function fromArray(array $array): ReplyMarkupShowKeyboard
    {
        return new static(
            array_map(fn($x) => array_map(fn($y) => TdSchemaRegistry::fromArray($y), $x), $array['rows']),
            $array['resize_keyboard'],
            $array['one_time'],
            $array['is_personal'],
            $array['input_field_placeholder'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => array_map(fn($y) => $y->typeSerialize(), $x), $this->rows),
            'resize_keyboard' => $this->resizeKeyboard,
            'one_time' => $this->oneTime,
            'is_personal' => $this->isPersonal,
            'input_field_placeholder' => $this->inputFieldPlaceholder,
        ];
    }

    public function getRows(): array
    {
        return $this->rows;
    }

    public function getResizeKeyboard(): bool
    {
        return $this->resizeKeyboard;
    }

    public function getOneTime(): bool
    {
        return $this->oneTime;
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    public function getInputFieldPlaceholder(): string
    {
        return $this->inputFieldPlaceholder;
    }
}
