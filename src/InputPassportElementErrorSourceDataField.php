<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A data field contains an error. The error is considered resolved when the field's value changes.
 */
class InputPassportElementErrorSourceDataField extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceDataField';

    /**
     * Field name.
     */
    protected string $fieldName;

    /**
     * Current data hash.
     */
    protected string $dataHash;

    public function __construct(string $fieldName, string $dataHash)
    {
        parent::__construct();

        $this->fieldName = $fieldName;
        $this->dataHash  = $dataHash;
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceDataField
    {
        return new static(
            $array['field_name'],
            $array['data_hash'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'field_name' => $this->fieldName,
            'data_hash'  => $this->dataHash,
        ];
    }

    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    public function getDataHash(): string
    {
        return $this->dataHash;
    }
}
