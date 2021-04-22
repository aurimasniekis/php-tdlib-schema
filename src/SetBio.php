<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the bio of the current user.
 */
class SetBio extends TdFunction
{
    public const TYPE_NAME = 'setBio';

    /**
     * The new value of the user bio; 0-70 characters without line feeds.
     */
    protected string $bio;

    public function __construct(string $bio)
    {
        $this->bio = $bio;
    }

    public static function fromArray(array $array): SetBio
    {
        return new static(
            $array['bio'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bio'   => $this->bio,
        ];
    }

    public function getBio(): string
    {
        return $this->bio;
    }
}
