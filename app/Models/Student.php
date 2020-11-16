<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $firstname
 * @property $lastname
 * @property $image
 * @property $classroom_id
 *
 * @package App\Models
 */
class Student extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'height',
        'image',
        'classroom_id',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function classroom()
    {
        return $this->belongsToMany(Classroom::class);
    }
}
