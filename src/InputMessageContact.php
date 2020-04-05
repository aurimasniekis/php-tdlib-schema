<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message containing a user contact.
 */
class InputMessageContact extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageContact';

    /**
     * Contact to send.
     *
     * @var Contact
     */
    protected Contact $contact;

    public function __construct(Contact $contact)
    {
        parent::__construct();

        $this->contact = $contact;
    }

    public static function fromArray(array $array): InputMessageContact
    {
        return new static(
            TdSchemaRegistry::fromArray($array['contact']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'contact' => $this->contact->typeSerialize(),
        ];
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }
}
