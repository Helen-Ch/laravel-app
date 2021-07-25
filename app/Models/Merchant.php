<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model; заменить на
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

//class Merchant extends Model
class Merchant extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'token'];

    public function createToken()
    {
        $token = Str::random(60);
        $this->token = hash('sha256', $token);
        $this->save();

        return $token;
    }
}
