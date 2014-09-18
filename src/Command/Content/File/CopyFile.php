<?php namespace AdammBalogh\Box\Command\Content\File;

use AdammBalogh\Box\Command\Command;
use AdammBalogh\Box\GuzzleHttp\Message\PostRequest;
use GuzzleHttp\Post\PostBody;

class CopyFile extends Command
{
    /**
     * @param string $fileId
     * @param string $folderId
     */
    public function __construct($fileId, $folderId)
    {
        $postBody = new PostBody();
        $postBody->setField('parent', ['id' => $folderId]);

        $this->request = new PostRequest("files/{$fileId}/copy");
        $this->request->setRawJsonBody((array)$postBody->getFields());
    }
}
