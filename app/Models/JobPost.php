<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "user_id",
        "company_name",
        "title",
        "designation",
        "description",
        "isActive",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobApplies()
    {
        return $this->hasMany(JobApply::class);
    }
}
