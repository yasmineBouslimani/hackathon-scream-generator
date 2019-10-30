<?php


namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class AbstractApiManager
{
    const URL = 'https://hackathon-wild-hackoween.herokuapp.com/';
    /**
     * @var
     */
    protected $endpoint;

    /**
     * @var \Symfony\Contracts\HttpClient\HttpClientInterface
     */
    protected $client;

    /**
     * AbstractApiManager constructor.
     * @param $endpoint
     */
    public function __construct($endpoint)
    {
        $this->endpoint = $endpoint;
        $this->client = HttpClient::create();
    }

    /**
     * @return array
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function selectAll()
    {
        return $this->client->request('GET', self::URL .$this->endpoint)->toArray();
    }
}