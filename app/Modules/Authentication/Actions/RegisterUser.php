<?php

namespace App\Modules\Authentication\Actions;

use App\Modules\Core\Models\User;

class RegisterUser
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ) {}

    public function handle(): void
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
    }
}
