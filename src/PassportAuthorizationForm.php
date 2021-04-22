<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a Telegram Passport authorization form that was requested
 */
class PassportAuthorizationForm extends TdObject
{
    public const TYPE_NAME = 'passportAuthorizationForm';

    /**
     * Unique identifier of the authorization form
     *
     * @var int
     */
    protected int $id;

    /**
     * Information about the Telegram Passport elements that must be provided to complete the form
     *
     * @var PassportRequiredElement[]
     */
    protected array $requiredElements;

    /**
     * URL for the privacy policy of the service; may be empty
     *
     * @var string
     */
    protected string $privacyPolicyUrl;

    public function __construct(int $id, array $requiredElements, string $privacyPolicyUrl)
    {
        $this->id = $id;
        $this->requiredElements = $requiredElements;
        $this->privacyPolicyUrl = $privacyPolicyUrl;
    }

    public static function fromArray(array $array): PassportAuthorizationForm
    {
        return new static(
            $array['id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['required_elements']),
            $array['privacy_policy_url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            array_map(fn($x) => $x->typeSerialize(), $this->requiredElements),
            'privacy_policy_url' => $this->privacyPolicyUrl,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRequiredElements(): array
    {
        return $this->requiredElements;
    }

    public function getPrivacyPolicyUrl(): string
    {
        return $this->privacyPolicyUrl;
    }
}
