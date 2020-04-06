<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Disconnects website from the current user's Telegram account.
 */
class DisconnectWebsite extends TdFunction
{
    public const TYPE_NAME = 'disconnectWebsite';

    /**
     * Website identifier.
     *
     * @var string
     */
    protected string $websiteId;

    public function __construct(string $websiteId)
    {
        $this->websiteId = $websiteId;
    }

    public static function fromArray(array $array): DisconnectWebsite
    {
        return new static(
            $array['website_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'website_id' => $this->websiteId,
        ];
    }

    public function getWebsiteId(): string
    {
        return $this->websiteId;
    }
}
