<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    protected $table = 'statuses';

    protected $fillable = [
        "id",
        'name',
        'description',
        'active',
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function providers(): HasMany
    {
        return $this->hasMany(Provider::class);
    }
}
