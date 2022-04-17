<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's bank statement
 */
class PassportElementBankStatement extends PassportElement
{
    public const TYPE_NAME = 'passportElementBankStatement';

    /**
     * Bank statement
     *
     * @var PersonalDocument
     */
    protected PersonalDocument $bankStatement;

    public function __construct(PersonalDocument $bankStatement)
    {
        parent::__construct();

        $this->bankStatement = $bankStatement;
    }

    public static function fromArray(array $array): PassportElementBankStatement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['bank_statement']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bank_statement' => $this->bankStatement->typeSerialize(),
        ];
    }

    public function getBankStatement(): PersonalDocument
    {
        return $this->bankStatement;
    }
}
