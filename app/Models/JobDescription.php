<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobDescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'department',
        'description',
        'requirements',
        'responsibilities',
        'skills_required',
        'experience_level',
        'education_level',
        'status',
        'created_by',
    ];

    /**
     * Get the user who created this job description
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
