<?php

namespace Cristal\ApiWrapper\Transports;

use Curl\Curl as CurlClient;

class LimeCRM extends Transport
{
    /**
     * @var string
     */
    protected $token;

    /**
     * Curl constructor.
     *
     * @param string     $token
     * @param string     $entrypoint
     * @param CurlClient $client
     */
    public function __construct(string $token, string $entrypoint, CurlClient $client)
    {
        parent::__construct($entrypoint, $client);
        $this->token = $token;
        $this->getClient()->setHeader('x-api-key', $this->getToken());
    }

    public function getToken()
    {
        return $this->token;
    }
}
