<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResponseResource extends JsonResource
{
    protected $message;
    protected $statusCode;

    public function __construct($resource, string $message = 'Success', int $statusCode = 200)
    {
        parent::__construct($resource);
        $this->message = $message;
        $this->statusCode = $statusCode;
    }

    public function toArray(Request $request): array
    {
        return [
            'meta' => [
                'status' => $this->statusCode >= 200 && $this->statusCode < 300 ? 'success' : 'error',
                'statusCode' => $this->statusCode,
                'message' => $this->message,
            ],
            'data' => $this->resource,
        ];
    }

    public function withResponse($request, $response)
    {
        $response->setStatusCode($this->statusCode);
    }
}
