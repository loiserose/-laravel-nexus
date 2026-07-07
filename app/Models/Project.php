<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ← ADD THIS LINE

class Project extends Model
{
    use HasFactory, SoftDeletes; // ← ADD SoftDeletes HERE

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'deadline',
    ];

    // Relationship: Project belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}