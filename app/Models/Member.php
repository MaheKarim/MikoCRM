<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;

    public function account(): BelongsTo
    {
        return $this->belongsTo(
          related: Account::class,
          foreignKey: 'account_id',
        );
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(
          related: Deposit::class,foreignKey: 'member_id',
        );
    }
}
