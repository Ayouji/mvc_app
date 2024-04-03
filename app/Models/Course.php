<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\hasMany;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey = 'course_id';
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'departement_id');
    }
    
}
