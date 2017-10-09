<?php
declare(strict_types=1);
namespace ParagonIE\Discretion;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface HandlerInterface
 * @package ParagonIE\Chronicle
 */
interface HandlerInterface
{
    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param array $args
     * @return ResponseInterface
     */
    public function __invoke(
        RequestInterface $request,
        ResponseInterface $response,
        array $args = []
    ): ResponseInterface;
}
