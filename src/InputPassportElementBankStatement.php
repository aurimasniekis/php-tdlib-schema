<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's bank statement.
 */
class InputPassportElementBankStatement extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementBankStatement';

    /**
     * The bank statement to be saved.
     *
     * @var InputPersonalDocument
     */
    protected InputPersonalDocument $bankStatement;

    public function __construct(InputPersonalDocument $bankStatement)
    {
        parent::__construct();

        $this->bankStatement = $bankStatement;
    }

    public static function fromArray(array $array): InputPassportElementBankStatement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['bank_statement']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'bank_statement' => $this->bankStatement->typeSerialize(),
        ];
    }

    public function getBankStatement(): InputPersonalDocument
    {
        return $this->bankStatement;
    }
}
