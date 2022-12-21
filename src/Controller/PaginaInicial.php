<?php

namespace DeboraMind\CalculadoraIMC\Controller;

use DeboraMind\CalculadoraIMC\Helper\RenderizadorDeHtmlTrait;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PaginaInicial
{
    use RenderizadorDeHtmlTrait;

    public function handle(ServerRequestInterface $request): Response
    {
        $html = $this->renderizaHtml('home.php',
            dados: [
            'titulo' => 'Calculadora IMC',
            ]);

        return new Response(200, [], $html);
    }
}
