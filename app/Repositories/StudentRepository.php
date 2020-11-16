<?php

namespace App\Repositories;

use App\Models\Student;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class StudentRepository
 *
 * @package App\Repositories
 */
class StudentRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Student::class;
    }
}
