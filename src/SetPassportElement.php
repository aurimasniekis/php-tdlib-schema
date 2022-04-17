<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds an element to the user's Telegram Passport. May return an error with a message "PHONE_VERIFICATION_NEEDED" or "EMAIL_VERIFICATION_NEEDED" if the chosen phone number or the chosen email address must be verified first
 */
class SetPassportElement extends TdFunction
{
    public const TYPE_NAME = 'setPassportElement';

    /**
     * Input Telegram Passport element
     *
     * @var InputPassportElement
     */
    protected InputPassportElement $element;

    /**
     * Password of the current user
     *
     * @var string
     */
    protected string $password;

    public function __construct(InputPassportElement $element, string $password)
    {
        $this->element = $element;
        $this->password = $password;
    }

    public static function fromArray(array $array): SetPassportElement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['element']),
            $array['password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'element' => $this->element->typeSerialize(),
            'password' => $this->password,
        ];
    }

    public function getElement(): InputPassportElement
    {
        return $this->element;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
