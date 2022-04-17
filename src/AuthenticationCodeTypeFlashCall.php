<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An authentication code is delivered by an immediately canceled call to the specified phone number. The phone number that calls is the code that must be entered automatically
 */
class AuthenticationCodeTypeFlashCall extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeFlashCall';

    /**
     * Pattern of the phone number from which the call will be made
     *
     * @var string
     */
    protected string $pattern;

    public function __construct(string $pattern)
    {
        parent::__construct();

        $this->pattern = $pattern;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFlashCall
    {
        return new static(
            $array['pattern'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'pattern' => $this->pattern,
        ];
    }

    public function getPattern(): string
    {
        return $this->pattern;
    }
}
