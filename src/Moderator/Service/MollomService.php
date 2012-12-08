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
    protected $maxProfanityScore = 0;

    public function __construct($publicKey, $privateKey) {
        $this->publicKey = $publicKey;
        $this->privateKey = $privateKey;
        $this->client = new Client($this->serviceUrl);
    }

    public function checkContent(Content $content, $contentId = null) {
        $this->authenticate();

        $datas = array(
            'checks'    => "profanity",
            'postTitle' => $content->getTitle(),
            'postBody'  => $content->getBody()
        );

        $request =  $this->client
            ->post('/v1/content/', null, $datas)
            ->setHeader('accept', 'application/json;q=0.8, */*;q=0.5');

        $response = json_decode($request->send()->getBody(), true);

        var_dump($response['content']);

        return $response['content']['profanityScore'] <= $this->maxProfanityScore;
    }

    private function authenticate() {
        $oauth = new OauthPlugin(array(
            'consumer_key'    => $this->publicKey,
            'consumer_secret' => $this->privateKey
        ));

        $this->client->addSubscriber($oauth);
    }

    /**
     * Get maxProfanityScore.
     *
     * @return maxProfanityScore.
     */
    public function getMaxProfanityScore()
    {
        return $this->maxProfanityScore;
    }

    /**
     * Set maxProfanityScore.
     *
     * @param maxProfanityScore the value to set.
     */
    public function setMaxProfanityScore($maxProfanityScore)
    {
        $this->maxProfanityScore = $maxProfanityScore;
    }

}
