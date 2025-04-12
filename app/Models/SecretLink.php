<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SecretLink extends Model
{
    protected $fillable = [
        'token',
        'text',
        'expires_at'
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
