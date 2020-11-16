<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Classroom
 *
 * @property $name
 *
 * @package App\Models
 */
class Classroom extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @var string[]
     */
    protected $with = [
        'students',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
