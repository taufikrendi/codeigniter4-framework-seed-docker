<?php

namespace App\Filters;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Exception;
use Firebase\JWT\JWT;

class JWTAuthenticationFilter implements FilterInterface
{
    use ResponseTrait;

    public function before(RequestInterface $request, $arguments = null)
    {
        try {
            if (!preg_match('/Bearer\s(\S+)/', $request->getServer('HTTP_AUTHORIZATION'), $matches)) {
                return Services::response()
                    ->setJSON(
                        [
                            'message' => 'Missing or invalid in request',
                        ]
                    )
                    ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
            }else{
                return $matches[1];
            }
            helper('jwt');
            $encodedToken = getJWTFromRequest($matches[1]);
            validateJWTFromRequest($encodedToken);
            return $request;

        } catch (Exception $e) {

            return Services::response()
                ->setJSON(
                    [
                        'error' => $e->getTrace(),
                    ]
                )
                ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);

        }
    }

    public function after(RequestInterface $request,
                          ResponseInterface $response,
        $arguments = null)
    {
    }
}