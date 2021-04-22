<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a phone number by its prefix. Can be called before authorization
 */
class GetPhoneNumberInfo extends TdFunction
{
    public const TYPE_NAME = 'getPhoneNumberInfo';

    /**
     * The phone number prefix
     *
     * @var string
     */
    protected string $phoneNumberPrefix;

    public function __construct(string $phoneNumberPrefix)
    {
        $this->phoneNumberPrefix = $phoneNumberPrefix;
    }

    public static function fromArray(array $array): GetPhoneNumberInfo
    {
        return new static(
            $array['phone_number_prefix'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'phone_number_prefix' => $this->phoneNumberPrefix,
        ];
    }

    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }
}
