<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Theme colors for a payment form
 */
class PaymentFormTheme extends TdObject
{
    public const TYPE_NAME = 'paymentFormTheme';

    /**
     * A color of the payment form background in the RGB24 format
     *
     * @var int
     */
    protected int $backgroundColor;

    /**
     * A color of text in the RGB24 format
     *
     * @var int
     */
    protected int $textColor;

    /**
     * A color of hints in the RGB24 format
     *
     * @var int
     */
    protected int $hintColor;

    /**
     * A color of links in the RGB24 format
     *
     * @var int
     */
    protected int $linkColor;

    /**
     * A color of the buttons in the RGB24 format
     *
     * @var int
     */
    protected int $buttonColor;

    /**
     * A color of text on the buttons in the RGB24 format
     *
     * @var int
     */
    protected int $buttonTextColor;

    public function __construct(
        int $backgroundColor,
        int $textColor,
        int $hintColor,
        int $linkColor,
        int $buttonColor,
        int $buttonTextColor
    ) {
        $this->backgroundColor = $backgroundColor;
        $this->textColor = $textColor;
        $this->hintColor = $hintColor;
        $this->linkColor = $linkColor;
        $this->buttonColor = $buttonColor;
        $this->buttonTextColor = $buttonTextColor;
    }

    public static function fromArray(array $array): PaymentFormTheme
    {
        return new static(
            $array['background_color'],
            $array['text_color'],
            $array['hint_color'],
            $array['link_color'],
            $array['button_color'],
            $array['button_text_color'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'background_color' => $this->backgroundColor,
            'text_color' => $this->textColor,
            'hint_color' => $this->hintColor,
            'link_color' => $this->linkColor,
            'button_color' => $this->buttonColor,
            'button_text_color' => $this->buttonTextColor,
        ];
    }

    public function getBackgroundColor(): int
    {
        return $this->backgroundColor;
    }

    public function getTextColor(): int
    {
        return $this->textColor;
    }

    public function getHintColor(): int
    {
        return $this->hintColor;
    }

    public function getLinkColor(): int
    {
        return $this->linkColor;
    }

    public function getButtonColor(): int
    {
        return $this->buttonColor;
    }

    public function getButtonTextColor(): int
    {
        return $this->buttonTextColor;
    }
}
