<?php

namespace App\Repositories;

use App\Models\Classroom;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ClassroomRepository
 *
 * @package App\Repositories
 */
class ClassroomRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Classroom::class;
    }
}
