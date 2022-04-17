<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Imports messages exported from another app
 */
class ImportMessages extends TdFunction
{
    public const TYPE_NAME = 'importMessages';

    /**
     * Identifier of a chat to which the messages will be imported. It must be an identifier of a private chat with a mutual contact or an identifier of a supergroup chat with can_change_info administrator right
     *
     * @var int
     */
    protected int $chatId;

    /**
     * File with messages to import. Only inputFileLocal and inputFileGenerated are supported. The file must not be previously uploaded
     *
     * @var InputFile
     */
    protected InputFile $messageFile;

    /**
     * Files used in the imported messages. Only inputFileLocal and inputFileGenerated are supported. The files must not be previously uploaded
     *
     * @var InputFile[]
     */
    protected array $attachedFiles;

    public function __construct(int $chatId, InputFile $messageFile, array $attachedFiles)
    {
        $this->chatId = $chatId;
        $this->messageFile = $messageFile;
        $this->attachedFiles = $attachedFiles;
    }

    public static function fromArray(array $array): ImportMessages
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['message_file']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['attached_files']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_file' => $this->messageFile->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->attachedFiles),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageFile(): InputFile
    {
        return $this->messageFile;
    }

    public function getAttachedFiles(): array
    {
        return $this->attachedFiles;
    }
}
