<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains parameters for TDLib initialization.
 */
class TdlibParameters extends TdObject
{
    public const TYPE_NAME = 'tdlibParameters';

    /**
     * If set to true, the Telegram test environment will be used instead of the production environment.
     *
     * @var bool
     */
    protected bool $useTestDc;

    /**
     * The path to the directory for the persistent database; if empty, the current working directory will be used.
     *
     * @var string
     */
    protected string $databaseDirectory;

    /**
     * The path to the directory for storing files; if empty, database_directory will be used.
     *
     * @var string
     */
    protected string $filesDirectory;

    /**
     * If set to true, information about downloaded and uploaded files will be saved between application restarts.
     *
     * @var bool
     */
    protected bool $useFileDatabase;

    /**
     * If set to true, the library will maintain a cache of users, basic groups, supergroups, channels and secret chats. Implies use_file_database.
     *
     * @var bool
     */
    protected bool $useChatInfoDatabase;

    /**
     * If set to true, the library will maintain a cache of chats and messages. Implies use_chat_info_database.
     *
     * @var bool
     */
    protected bool $useMessageDatabase;

    /**
     * If set to true, support for secret chats will be enabled.
     *
     * @var bool
     */
    protected bool $useSecretChats;

    /**
     * Application identifier for Telegram API access, which can be obtained at https://my.telegram.org.
     *
     * @var int
     */
    protected int $apiId;

    /**
     * Application identifier hash for Telegram API access, which can be obtained at https://my.telegram.org.
     *
     * @var string
     */
    protected string $apiHash;

    /**
     * IETF language tag of the user's operating system language; must be non-empty.
     *
     * @var string
     */
    protected string $systemLanguageCode;

    /**
     * Model of the device the application is being run on; must be non-empty.
     *
     * @var string
     */
    protected string $deviceModel;

    /**
     * Version of the operating system the application is being run on; must be non-empty.
     *
     * @var string
     */
    protected string $systemVersion;

    /**
     * Application version; must be non-empty.
     *
     * @var string
     */
    protected string $applicationVersion;

    /**
     * If set to true, old files will automatically be deleted.
     *
     * @var bool
     */
    protected bool $enableStorageOptimizer;

    /**
     * If set to true, original file names will be ignored. Otherwise, downloaded files will be saved under names as close as possible to the original name.
     *
     * @var bool
     */
    protected bool $ignoreFileNames;

    public function __construct(
        bool $useTestDc,
        string $databaseDirectory,
        string $filesDirectory,
        bool $useFileDatabase,
        bool $useChatInfoDatabase,
        bool $useMessageDatabase,
        bool $useSecretChats,
        int $apiId,
        string $apiHash,
        string $systemLanguageCode,
        string $deviceModel,
        string $systemVersion,
        string $applicationVersion,
        bool $enableStorageOptimizer,
        bool $ignoreFileNames
    ) {
        $this->useTestDc              = $useTestDc;
        $this->databaseDirectory      = $databaseDirectory;
        $this->filesDirectory         = $filesDirectory;
        $this->useFileDatabase        = $useFileDatabase;
        $this->useChatInfoDatabase    = $useChatInfoDatabase;
        $this->useMessageDatabase     = $useMessageDatabase;
        $this->useSecretChats         = $useSecretChats;
        $this->apiId                  = $apiId;
        $this->apiHash                = $apiHash;
        $this->systemLanguageCode     = $systemLanguageCode;
        $this->deviceModel            = $deviceModel;
        $this->systemVersion          = $systemVersion;
        $this->applicationVersion     = $applicationVersion;
        $this->enableStorageOptimizer = $enableStorageOptimizer;
        $this->ignoreFileNames        = $ignoreFileNames;
    }

    public static function fromArray(array $array): TdlibParameters
    {
        return new static(
            $array['use_test_dc'],
            $array['database_directory'],
            $array['files_directory'],
            $array['use_file_database'],
            $array['use_chat_info_database'],
            $array['use_message_database'],
            $array['use_secret_chats'],
            $array['api_id'],
            $array['api_hash'],
            $array['system_language_code'],
            $array['device_model'],
            $array['system_version'],
            $array['application_version'],
            $array['enable_storage_optimizer'],
            $array['ignore_file_names'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'use_test_dc'              => $this->useTestDc,
            'database_directory'       => $this->databaseDirectory,
            'files_directory'          => $this->filesDirectory,
            'use_file_database'        => $this->useFileDatabase,
            'use_chat_info_database'   => $this->useChatInfoDatabase,
            'use_message_database'     => $this->useMessageDatabase,
            'use_secret_chats'         => $this->useSecretChats,
            'api_id'                   => $this->apiId,
            'api_hash'                 => $this->apiHash,
            'system_language_code'     => $this->systemLanguageCode,
            'device_model'             => $this->deviceModel,
            'system_version'           => $this->systemVersion,
            'application_version'      => $this->applicationVersion,
            'enable_storage_optimizer' => $this->enableStorageOptimizer,
            'ignore_file_names'        => $this->ignoreFileNames,
        ];
    }

    public function getUseTestDc(): bool
    {
        return $this->useTestDc;
    }

    public function getDatabaseDirectory(): string
    {
        return $this->databaseDirectory;
    }

    public function getFilesDirectory(): string
    {
        return $this->filesDirectory;
    }

    public function getUseFileDatabase(): bool
    {
        return $this->useFileDatabase;
    }

    public function getUseChatInfoDatabase(): bool
    {
        return $this->useChatInfoDatabase;
    }

    public function getUseMessageDatabase(): bool
    {
        return $this->useMessageDatabase;
    }

    public function getUseSecretChats(): bool
    {
        return $this->useSecretChats;
    }

    public function getApiId(): int
    {
        return $this->apiId;
    }

    public function getApiHash(): string
    {
        return $this->apiHash;
    }

    public function getSystemLanguageCode(): string
    {
        return $this->systemLanguageCode;
    }

    public function getDeviceModel(): string
    {
        return $this->deviceModel;
    }

    public function getSystemVersion(): string
    {
        return $this->systemVersion;
    }

    public function getApplicationVersion(): string
    {
        return $this->applicationVersion;
    }

    public function getEnableStorageOptimizer(): bool
    {
        return $this->enableStorageOptimizer;
    }

    public function getIgnoreFileNames(): bool
    {
        return $this->ignoreFileNames;
    }
}
