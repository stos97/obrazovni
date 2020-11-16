<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Models\Classroom;
use App\Repositories\StudentRepository;

/**
 * Class StudentController
 *
 * @package App\Http\Controllers
 */
class StudentController extends Controller
{
    /**
     * @var StudentRepository $repository
     */
    private $repository;

    /**
     * StudentController constructor.
     *
     * @param StudentRepository $repository
     */
    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Classroom $classroom
     *
     * @return array
     */
    public function getAll(Classroom $classroom)
    {
        return $this->repository->findWhere([
            'classroom_id' => $classroom->id,
        ])->all();
    }

    /**
     * @param CreateStudentRequest $request
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection|mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function create(CreateStudentRequest $request)
    {
        $data = $request->validated();

        return $this->repository->create($data);
    }
}
