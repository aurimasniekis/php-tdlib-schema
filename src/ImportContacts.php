<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds new contacts or edits existing contacts by their phone numbers; contacts' user identifiers are ignored.
 */
class ImportContacts extends TdFunction
{
    public const TYPE_NAME = 'importContacts';

    /**
     * The list of contacts to import or edit; contacts' vCard are ignored and are not imported.
     *
     * @var Contact[]
     */
    protected array $contacts;

    public function __construct(array $contacts)
    {
        $this->contacts = $contacts;
    }

    public static function fromArray(array $array): ImportContacts
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['contacts']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->contacts),
        ];
    }

    public function getContacts(): array
    {
        return $this->contacts;
    }
}
