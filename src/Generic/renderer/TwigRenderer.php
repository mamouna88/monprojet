<?php

namespace Generic\Renderer;

use Twig\Environment;
use Twig\Loader\FileSystemLoader;

class TwigRenderer
{
    public function__construct()
{
$loader = new FilesystemLoader('/path/to/templates');
$twig = new Environment($loader, [
'cache' => false
]);
}
public function render(string $view,array $variables= []): string
{

}
}