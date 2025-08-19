<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class JwtAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $authHeader = $request->getHeaderLine('Authorization');
        if (!$authHeader) {
            return Services::response()->setJSON(['error' => 'Token required'])->setStatusCode(401);
        }

        $token = str_replace('Bearer ', '', $authHeader);

        $decoded = validateJWT($token);
        if (!$decoded) {
            return Services::response()->setJSON(['error' => 'Invalid or expired token'])->setStatusCode(401);
        }

        // Make user data available globally
        $request->userData = (array) $decoded;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nothing needed
    }
}
