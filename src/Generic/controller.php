<?php
namespace Generic\Controller;



use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;

abstract class Controller implements MiddlewareInterface
{
    public function __construct(TwigRenderer $twig)
    {
        $this->twig=$twig;
    }
protected function render(string $html): ResponseInterface {
    return new Response(200, [],$html);
}
}