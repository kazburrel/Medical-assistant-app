<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guideline extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'query_type',
        'content',
    ];

    protected $keyType = 'string';
    public $incrementing = false;
}
