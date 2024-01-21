<?php

namespace App\Models;

use App\Enums\Roles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleUser extends Pivot {
    public const PIVOT_FIELDS = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

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
    public function roles(): BelongsTo {
        return $this->belongsTo(Roles::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
