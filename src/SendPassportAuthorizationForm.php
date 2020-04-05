<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a Telegram Passport authorization form, effectively sharing data with the service. This method must be called after getPassportAuthorizationFormAvailableElements if some previously available elements need to be used.
 */
class SendPassportAuthorizationForm extends TdFunction
{
    public const TYPE_NAME = 'sendPassportAuthorizationForm';

    /**
     * Authorization form identifier.
     *
     * @var int
     */
    protected int $autorizationFormId;

    /**
     * Types of Telegram Passport elements chosen by user to complete the authorization form.
     *
     * @var PassportElementType[]
     */
    protected array $types;

    public function __construct(int $autorizationFormId, array $types)
    {
        $this->autorizationFormId = $autorizationFormId;
        $this->types              = $types;
    }

    public static function fromArray(array $array): SendPassportAuthorizationForm
    {
        return new static(
            $array['autorization_form_id'],
            array_map(fn ($x) => PassportElementType::fromArray($x), $array['types']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'autorization_form_id' => $this->autorizationFormId,
            array_map(fn ($x)      => $x->typeSerialize(), $this->types),
        ];
    }

    public function getAutorizationFormId(): int
    {
        return $this->autorizationFormId;
    }

    public function getTypes(): array
    {
        return $this->types;
    }
}
