<?php
declare(strict_types=1);

namespace App\Http\Requests\Auth;

final class LoginRequest extends AuthRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => [
                'required',
                'max:255',
            ],
            'remember' => [
                'boolean',
            ],
        ];
    }
}
