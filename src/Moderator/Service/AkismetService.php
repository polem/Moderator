<?php

namespace Moderator\Service;

use Guzzle\Http\Client;

use Moderator\Content;

class AkismetService extends AbstractService
{
    protected $apiKey;
    protected $serviceUrl = 'rest.akismet.com';

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
        $this->client = new Client($apiKey . '.' . $serviceUrl);
    }

    public function checkContent(Content $content) {
        /*
        $datas = array(
            'blog'                 => $content->getSubjectUrl(),
            'comment_content'      => $content->getTitle() . "\n" . $content->getBody(),
            'comment_author'       => $content->getAuthor()->getName(),
            'comment_author_email' => $content->getAuthor()->getEmail(),
            'comment_author_url'   => $content->getAuthor()->getUrl(),
            'user_ip'              => $content->getAuthor()->getIp(),
            'user_agent'           => $content->getAuthor()->getUserAgent(),
        );

        return $this->client->post('/1.1/comment-check');
        */
    }
}
