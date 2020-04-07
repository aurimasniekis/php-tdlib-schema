<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes imported contacts using the list of current user contacts saved on the device. Imports newly added contacts and, if at least the file database is enabled, deletes recently deleted contacts. Query result depends on the result of the previous query, so only one query is possible at the same time.
 */
class ChangeImportedContacts extends TdFunction
{
    public const TYPE_NAME = 'changeImportedContacts';

    /**
     * The new list of contacts, contact's vCard are ignored and are not imported.
     *
     * @var Contact[]
     */
    protected array $contacts;

    public function __construct(array $contacts)
    {
        $this->contacts = $contacts;
    }

    public static function fromArray(array $array): ChangeImportedContacts
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
