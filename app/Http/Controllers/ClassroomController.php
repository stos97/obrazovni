<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassroomRequest;
use App\Repositories\ClassroomRepository;
use Illuminate\Http\Request;

/**
 * Class ClassroomController
 *
 * @package App\Http\Controllers
 */
class ClassroomController extends Controller
{
    /**
     * @var ClassroomRepository $repository
     */
    private $repository;

    /**
     * ClassroomController constructor.
     *
     * @param ClassroomRepository $repository
     */
    public function __construct(ClassroomRepository  $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection|mixed
     */
    public function getAll(Request $request)
    {
        return $this->repository->paginate();
    }

    /**
     * @param CreateClassroomRequest $request
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection|mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function create(CreateClassroomRequest $request)
    {
        $data = $request->validated();

        return $this->repository->create($data);
    }
}
