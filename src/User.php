<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a user.
 */
class User extends TdObject
{
    public const TYPE_NAME = 'user';

    /**
     * User identifier.
     */
    protected int $id;

    /**
     * First name of the user.
     */
    protected string $firstName;

    /**
     * Last name of the user.
     */
    protected string $lastName;

    /**
     * Username of the user.
     */
    protected string $username;

    /**
     * Phone number of the user.
     */
    protected string $phoneNumber;

    /**
     * Current online status of the user.
     */
    protected UserStatus $status;

    /**
     * Profile photo of the user; may be null.
     */
    protected ?ProfilePhoto $profilePhoto;

    /**
     * The user is a contact of the current user.
     */
    protected bool $isContact;

    /**
     * The user is a contact of the current user and the current user is a contact of the user.
     */
    protected bool $isMutualContact;

    /**
     * True, if the user is verified.
     */
    protected bool $isVerified;

    /**
     * True, if the user is Telegram support account.
     */
    protected bool $isSupport;

    /**
     * If non-empty, it contains a human-readable description of the reason why access to this user must be restricted.
     */
    protected string $restrictionReason;

    /**
     * True, if many users reported this user as a scam.
     */
    protected bool $isScam;

    /**
     * If false, the user is inaccessible, and the only information known about the user is inside this class. It can't be passed to any method except GetUser.
     */
    protected bool $haveAccess;

    /**
     * Type of the user.
     */
    protected UserType $type;

    /**
     * IETF language tag of the user's language; only available to bots.
     */
    protected string $languageCode;

    public function __construct(
        int $id,
        string $firstName,
        string $lastName,
        string $username,
        string $phoneNumber,
        UserStatus $status,
        ?ProfilePhoto $profilePhoto,
        bool $isContact,
        bool $isMutualContact,
        bool $isVerified,
        bool $isSupport,
        string $restrictionReason,
        bool $isScam,
        bool $haveAccess,
        UserType $type,
        string $languageCode
    ) {
        $this->id                = $id;
        $this->firstName         = $firstName;
        $this->lastName          = $lastName;
        $this->username          = $username;
        $this->phoneNumber       = $phoneNumber;
        $this->status            = $status;
        $this->profilePhoto      = $profilePhoto;
        $this->isContact         = $isContact;
        $this->isMutualContact   = $isMutualContact;
        $this->isVerified        = $isVerified;
        $this->isSupport         = $isSupport;
        $this->restrictionReason = $restrictionReason;
        $this->isScam            = $isScam;
        $this->haveAccess        = $haveAccess;
        $this->type              = $type;
        $this->languageCode      = $languageCode;
    }

    public static function fromArray(array $array): User
    {
        return new static(
            $array['id'],
            $array['first_name'],
            $array['last_name'],
            $array['username'],
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['status']),
            (isset($array['profile_photo']) ? TdSchemaRegistry::fromArray($array['profile_photo']) : null),
            $array['is_contact'],
            $array['is_mutual_contact'],
            $array['is_verified'],
            $array['is_support'],
            $array['restriction_reason'],
            $array['is_scam'],
            $array['have_access'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['language_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'id'                 => $this->id,
            'first_name'         => $this->firstName,
            'last_name'          => $this->lastName,
            'username'           => $this->username,
            'phone_number'       => $this->phoneNumber,
            'status'             => $this->status->typeSerialize(),
            'profile_photo'      => (isset($this->profilePhoto) ? $this->profilePhoto : null),
            'is_contact'         => $this->isContact,
            'is_mutual_contact'  => $this->isMutualContact,
            'is_verified'        => $this->isVerified,
            'is_support'         => $this->isSupport,
            'restriction_reason' => $this->restrictionReason,
            'is_scam'            => $this->isScam,
            'have_access'        => $this->haveAccess,
            'type'               => $this->type->typeSerialize(),
            'language_code'      => $this->languageCode,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getStatus(): UserStatus
    {
        return $this->status;
    }

    public function getProfilePhoto(): ?ProfilePhoto
    {
        return $this->profilePhoto;
    }

    public function getIsContact(): bool
    {
        return $this->isContact;
    }

    public function getIsMutualContact(): bool
    {
        return $this->isMutualContact;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function getIsSupport(): bool
    {
        return $this->isSupport;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }

    public function getHaveAccess(): bool
    {
        return $this->haveAccess;
    }

    public function getType(): UserType
    {
        return $this->type;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
}
