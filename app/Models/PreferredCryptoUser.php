<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferredCryptoUser extends Model
{
    use HasFactory;
    protected $table = 'preferred_crypto_user';

    protected $fillable = ['cryptocurrency_id', 'user_id'];


}
