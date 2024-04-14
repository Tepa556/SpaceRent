<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premises extends Model
{
    use HasFactory;
    protected $table = 'our_premises';
    public static function getRole($userId)
    {
        $role = self::select('role')->where('id', $userId)->first();

        if ($role) {
            return $role->role;
        } else {
            return 'Роль не найдена';
        }
    }
}
