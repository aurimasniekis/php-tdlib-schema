<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * One of the data fields contains an error. The error will be considered resolved when the value of the field changes.
 */
class PassportElementErrorSourceDataField extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceDataField';

    /**
     * Field name.
     */
    protected string $fieldName;

    public function __construct(string $fieldName)
    {
        parent::__construct();

        $this->fieldName = $fieldName;
    }

    public static function fromArray(array $array): PassportElementErrorSourceDataField
    {
        return new static(
            $array['field_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'field_name' => $this->fieldName,
        ];
    }

    public function getFieldName(): string
    {
        return $this->fieldName;
    }
}
