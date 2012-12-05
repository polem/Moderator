<?php

namespace Moderator\Service;

use Guzzle\Http\Client;
use Guzzle\Plugin\Oauth\OauthPlugin;

use Moderator\Content;

class MollomService extends AbstractService
{
    protected $publicKey;
    protected $privateKey;
    protected $serviceUrl = 'http://rest.mollom.com';

    public function __construct($publicKey, $privateKey) {
        $this->publicKey = $publicKey;
        $this->privateKey = $privateKey;
        $this->client = new Client($this->serviceUrl);
    }

    public function checkContent(Content $content) {

        $this->authenticate();

        $datas = array(
            'postTitle' => $content->getTitle(),
            'postBody'  => $content->getBody()
        );

        $request =  $this->client
            ->post('/v1/content', null, $datas)
            ->setHeader('accept', 'application/json;q=0.8, */*;q=0.5');

        $response = json_decode($request->send()->getBody(), true);

        return $response['content']['spamClassification'] === 'ham';
    }

    private function authenticate() {
        $oauth = new OauthPlugin(array(
            'consumer_key'    => $this->publicKey,
            'consumer_secret' => $this->privateKey
        ));

        $this->client->addSubscriber($oauth);
    }
}
