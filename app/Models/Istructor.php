<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Istructor extends Model
{
    use HasFactory;
    protected $primaryKey = 'instructor_id';
    public function office(): HasOne
    {
        return $this->hasOne(OfficeAssign::class, 'officeAssign_id');
    }
}
