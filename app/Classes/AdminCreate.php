<?php
namespace App\Classes;

use App\Models\User;

class AdminCreate
{
    public function hasSuperAdmin()
    {
        return User::count() > 0;
    }
}
