<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about one website the current user is logged in with Telegram
 */
class ConnectedWebsite extends TdObject
{
    public const TYPE_NAME = 'connectedWebsite';

    /**
     * Website identifier
     *
     * @var string
     */
    protected string $id;

    /**
     * The domain name of the website
     *
     * @var string
     */
    protected string $domainName;

    /**
     * User identifier of a bot linked with the website
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * The version of a browser used to log in
     *
     * @var string
     */
    protected string $browser;

    /**
     * Operating system the browser is running on
     *
     * @var string
     */
    protected string $platform;

    /**
     * Point in time (Unix timestamp) when the user was logged in
     *
     * @var int
     */
    protected int $logInDate;

    /**
     * Point in time (Unix timestamp) when obtained authorization was last used
     *
     * @var int
     */
    protected int $lastActiveDate;

    /**
     * IP address from which the user was logged in, in human-readable format
     *
     * @var string
     */
    protected string $ip;

    /**
     * Human-readable description of a country and a region, from which the user was logged in, based on the IP address
     *
     * @var string
     */
    protected string $location;

    public function __construct(
        string $id,
        string $domainName,
        int $botUserId,
        string $browser,
        string $platform,
        int $logInDate,
        int $lastActiveDate,
        string $ip,
        string $location
    ) {
        $this->id = $id;
        $this->domainName = $domainName;
        $this->botUserId = $botUserId;
        $this->browser = $browser;
        $this->platform = $platform;
        $this->logInDate = $logInDate;
        $this->lastActiveDate = $lastActiveDate;
        $this->ip = $ip;
        $this->location = $location;
    }

    public static function fromArray(array $array): ConnectedWebsite
    {
        return new static(
            $array['id'],
            $array['domain_name'],
            $array['bot_user_id'],
            $array['browser'],
            $array['platform'],
            $array['log_in_date'],
            $array['last_active_date'],
            $array['ip'],
            $array['location'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'domain_name' => $this->domainName,
            'bot_user_id' => $this->botUserId,
            'browser' => $this->browser,
            'platform' => $this->platform,
            'log_in_date' => $this->logInDate,
            'last_active_date' => $this->lastActiveDate,
            'ip' => $this->ip,
            'location' => $this->location,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDomainName(): string
    {
        return $this->domainName;
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getBrowser(): string
    {
        return $this->browser;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function getLogInDate(): int
    {
        return $this->logInDate;
    }

    public function getLastActiveDate(): int
    {
        return $this->lastActiveDate;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getLocation(): string
    {
        return $this->location;
    }
}
