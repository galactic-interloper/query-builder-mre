<?php

namespace App\Models;

use App\Enums\Roles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permission extends Model {
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @property Roles $role_id
     *
     * @var array<string, string>
     */
    protected $casts = [
        'role_id' => Roles::class,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(): BelongsTo {
        return $this->belongsTo(Role::class);
    }
}
