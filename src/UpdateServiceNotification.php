<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A service notification from the server was received. Upon receiving this the application must show a popup with the content of the notification
 */
class UpdateServiceNotification extends Update
{
    public const TYPE_NAME = 'updateServiceNotification';

    /**
     * Notification type. If type begins with "AUTH_KEY_DROP_", then two buttons "Cancel" and "Log out" must be shown under notification; if user presses the second, all local data must be destroyed using Destroy method
     *
     * @var string
     */
    protected string $type;

    /**
     * Notification content
     *
     * @var MessageContent
     */
    protected MessageContent $content;

    public function __construct(string $type, MessageContent $content)
    {
        parent::__construct();

        $this->type = $type;
        $this->content = $content;
    }

    public static function fromArray(array $array): UpdateServiceNotification
    {
        return new static(
            $array['type'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type,
            'content' => $this->content->typeSerialize(),
        ];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }
}
