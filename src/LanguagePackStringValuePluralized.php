<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A language pack string which has different forms based on the number of some object it mentions. See https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more info.
 */
class LanguagePackStringValuePluralized extends LanguagePackStringValue
{
    public const TYPE_NAME = 'languagePackStringValuePluralized';

    /**
     * Value for zero objects.
     */
    protected string $zeroValue;

    /**
     * Value for one object.
     */
    protected string $oneValue;

    /**
     * Value for two objects.
     */
    protected string $twoValue;

    /**
     * Value for few objects.
     */
    protected string $fewValue;

    /**
     * Value for many objects.
     */
    protected string $manyValue;

    /**
     * Default value.
     */
    protected string $otherValue;

    public function __construct(string $zeroValue, string $oneValue, string $twoValue, string $fewValue, string $manyValue, string $otherValue)
    {
        parent::__construct();

        $this->zeroValue  = $zeroValue;
        $this->oneValue   = $oneValue;
        $this->twoValue   = $twoValue;
        $this->fewValue   = $fewValue;
        $this->manyValue  = $manyValue;
        $this->otherValue = $otherValue;
    }

    public static function fromArray(array $array): LanguagePackStringValuePluralized
    {
        return new static(
            $array['zero_value'],
            $array['one_value'],
            $array['two_value'],
            $array['few_value'],
            $array['many_value'],
            $array['other_value'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'zero_value'  => $this->zeroValue,
            'one_value'   => $this->oneValue,
            'two_value'   => $this->twoValue,
            'few_value'   => $this->fewValue,
            'many_value'  => $this->manyValue,
            'other_value' => $this->otherValue,
        ];
    }

    public function getZeroValue(): string
    {
        return $this->zeroValue;
    }

    public function getOneValue(): string
    {
        return $this->oneValue;
    }

    public function getTwoValue(): string
    {
        return $this->twoValue;
    }

    public function getFewValue(): string
    {
        return $this->fewValue;
    }

    public function getManyValue(): string
    {
        return $this->manyValue;
    }

    public function getOtherValue(): string
    {
        return $this->otherValue;
    }
}
