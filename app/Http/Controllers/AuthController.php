<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\ResponseResource;
use App\Services\Auth\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(RegisterRequest $request)
    {
        try {
            $data = $request->validated();
            $user = $this->authService->register($data);

            return new ResponseResource($user, 'User registered successfully', 201);
        } catch (\Throwable $e) {
            return new ResponseResource(null, 'Registration failed: ' . $e->getMessage(), 500);
        }
    }
}
