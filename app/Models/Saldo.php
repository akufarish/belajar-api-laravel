<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Saldo extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function User(): hasMany
    {
        return $this->hasMany(User::class);
    }

    protected $fillable = [
        "saldo_referral",
        "saldo_mengajak"
    ];

    protected $hidden = [
        "id"
    ];

}
