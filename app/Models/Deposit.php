<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deposit extends Model
{
    use HasFactory;

    public function member(): BelongsTo
    {
        return $this->belongsTo(
          related: Member::class,
            foreignKey: 'member_id',
        );
    }
}
