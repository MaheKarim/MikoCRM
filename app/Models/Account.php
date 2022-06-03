<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    public function members(): HasMany
    {
        return $this->hasMany(
            Member::class,
            foreignKey: 'account_id'
        );
    }

    public function users(): HasMany
    {
        return $this->hasMany(
          related: User::class,foreignKey: 'account_id'
        );
    }

    public function deposits(): HasMany
    {
        return $this->hasMany(
          related: Deposit::class,foreignKey: 'account_id'
        );
    }
}
