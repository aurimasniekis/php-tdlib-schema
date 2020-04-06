<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about one session in a Telegram application used by the current user. Sessions should be shown to the user in the returned order.
 */
class Session extends TdObject
{
    public const TYPE_NAME = 'session';

    /**
     * Session identifier.
     *
     * @var string
     */
    protected string $id;

    /**
     * True, if this session is the current session.
     *
     * @var bool
     */
    protected bool $isCurrent;

    /**
     * True, if a password is needed to complete authorization of the session.
     *
     * @var bool
     */
    protected bool $isPasswordPending;

    /**
     * Telegram API identifier, as provided by the application.
     *
     * @var int
     */
    protected int $apiId;

    /**
     * Name of the application, as provided by the application.
     *
     * @var string
     */
    protected string $applicationName;

    /**
     * The version of the application, as provided by the application.
     *
     * @var string
     */
    protected string $applicationVersion;

    /**
     * True, if the application is an official application or uses the api_id of an official application.
     *
     * @var bool
     */
    protected bool $isOfficialApplication;

    /**
     * Model of the device the application has been run or is running on, as provided by the application.
     *
     * @var string
     */
    protected string $deviceModel;

    /**
     * Operating system the application has been run or is running on, as provided by the application.
     *
     * @var string
     */
    protected string $platform;

    /**
     * Version of the operating system the application has been run or is running on, as provided by the application.
     *
     * @var string
     */
    protected string $systemVersion;

    /**
     * Point in time (Unix timestamp) when the user has logged in.
     *
     * @var int
     */
    protected int $logInDate;

    /**
     * Point in time (Unix timestamp) when the session was last used.
     *
     * @var int
     */
    protected int $lastActiveDate;

    /**
     * IP address from which the session was created, in human-readable format.
     *
     * @var string
     */
    protected string $ip;

    /**
     * A two-letter country code for the country from which the session was created, based on the IP address.
     *
     * @var string
     */
    protected string $country;

    /**
     * Region code from which the session was created, based on the IP address.
     *
     * @var string
     */
    protected string $region;

    public function __construct(
        string $id,
        bool $isCurrent,
        bool $isPasswordPending,
        int $apiId,
        string $applicationName,
        string $applicationVersion,
        bool $isOfficialApplication,
        string $deviceModel,
        string $platform,
        string $systemVersion,
        int $logInDate,
        int $lastActiveDate,
        string $ip,
        string $country,
        string $region
    ) {
        $this->id                    = $id;
        $this->isCurrent             = $isCurrent;
        $this->isPasswordPending     = $isPasswordPending;
        $this->apiId                 = $apiId;
        $this->applicationName       = $applicationName;
        $this->applicationVersion    = $applicationVersion;
        $this->isOfficialApplication = $isOfficialApplication;
        $this->deviceModel           = $deviceModel;
        $this->platform              = $platform;
        $this->systemVersion         = $systemVersion;
        $this->logInDate             = $logInDate;
        $this->lastActiveDate        = $lastActiveDate;
        $this->ip                    = $ip;
        $this->country               = $country;
        $this->region                = $region;
    }

    public static function fromArray(array $array): Session
    {
        return new static(
            $array['id'],
            $array['is_current'],
            $array['is_password_pending'],
            $array['api_id'],
            $array['application_name'],
            $array['application_version'],
            $array['is_official_application'],
            $array['device_model'],
            $array['platform'],
            $array['system_version'],
            $array['log_in_date'],
            $array['last_active_date'],
            $array['ip'],
            $array['country'],
            $array['region'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'id'                      => $this->id,
            'is_current'              => $this->isCurrent,
            'is_password_pending'     => $this->isPasswordPending,
            'api_id'                  => $this->apiId,
            'application_name'        => $this->applicationName,
            'application_version'     => $this->applicationVersion,
            'is_official_application' => $this->isOfficialApplication,
            'device_model'            => $this->deviceModel,
            'platform'                => $this->platform,
            'system_version'          => $this->systemVersion,
            'log_in_date'             => $this->logInDate,
            'last_active_date'        => $this->lastActiveDate,
            'ip'                      => $this->ip,
            'country'                 => $this->country,
            'region'                  => $this->region,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsCurrent(): bool
    {
        return $this->isCurrent;
    }

    public function getIsPasswordPending(): bool
    {
        return $this->isPasswordPending;
    }

    public function getApiId(): int
    {
        return $this->apiId;
    }

    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    public function getApplicationVersion(): string
    {
        return $this->applicationVersion;
    }

    public function getIsOfficialApplication(): bool
    {
        return $this->isOfficialApplication;
    }

    public function getDeviceModel(): string
    {
        return $this->deviceModel;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function getSystemVersion(): string
    {
        return $this->systemVersion;
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

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getRegion(): string
    {
        return $this->region;
    }
}
