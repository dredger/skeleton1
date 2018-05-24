<?php
namespace Skeleton1;

use GuzzleHttp\ClientInterface;

class Renderer
{
    /**
     * @var ClientInterface
     */
    private $client;

    const RENDER_URI = 'https://chart.googleapis.com/chart';

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function render($text, $width, $height)
    {
        $response = $this->client->request('get', self::RENDER_URI, ['query' => [
            'cht' => 'qr',
            'chs' => sprintf('%dx%d', $width, $height),
            'chl' => $text,
        ]]);

        return $response->getBody()->getContents();
    }
}
