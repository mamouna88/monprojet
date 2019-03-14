<?php
namespace Appli\Controller;

use Controller;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ContactController extends Controller implements MiddlewareInterface
{
    public function process(ServerRequest $request, RequestHandlerInterface $handler): ResponseInterface
    {
        return new Response(200, [], '<h1>Bonjour depuis ContactController</h1>');
        return $this->render('<h1>page de contact</h1>h1>');
    }
}
