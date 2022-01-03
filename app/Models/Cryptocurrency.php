<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cryptocurrency extends Model
{
    use HasFactory;

    protected $table = 'cryptocurrencies';

    protected $appends = ['is_prefer'];

    public function getIsPreferAttribute()
    {
        $is_prefer = PreferredCryptoUser::where('cryptocurrency_id', $this->id)->where('user_id', Auth::id())->exists();
        return $is_prefer;
    }
}
