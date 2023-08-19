<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';

    protected $fillable = [
        'cbn',
        'name',
        'description',
        'status_id',
        'user_id',
        'type_id',
        'equipment_associated_id',
    ];

    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }


    public function type(): HasOne
    {
        return $this->hasOne(Type::class);
    }


    public function technitian(): HasOne
    {
        return $this->hasOne(User::class);
    }


    public function peripheral(): HasOne
    {
        return $this->hasOne(Equipment::class);
    }
}
