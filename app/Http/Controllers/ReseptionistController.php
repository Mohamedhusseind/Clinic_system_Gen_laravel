<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReseptionistRequest;
use App\Http\Requests\UpdateReseptionistRequest;
use App\Repositories\ReseptionistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReseptionistController extends AppBaseController
{
    /** @var  ReseptionistRepository */
    private $reseptionistRepository;

    public function __construct(ReseptionistRepository $reseptionistRepo)
    {
        $this->reseptionistRepository = $reseptionistRepo;
    }

    /**
     * Display a listing of the Reseptionist.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reseptionists = $this->reseptionistRepository->all();

        return view('reseptionists.index')
            ->with('reseptionists', $reseptionists);
    }

    /**
     * Show the form for creating a new Reseptionist.
     *
     * @return Response
     */
    public function create()
    {
        return view('reseptionists.create');
    }

    /**
     * Store a newly created Reseptionist in storage.
     *
     * @param CreateReseptionistRequest $request
     *
     * @return Response
     */
    public function store(CreateReseptionistRequest $request)
    {
        $input = $request->all();

        $reseptionist = $this->reseptionistRepository->create($input);

        Flash::success('Reseptionist saved successfully.');

        return redirect(route('reseptionists.index'));
    }

    /**
     * Display the specified Reseptionist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reseptionist = $this->reseptionistRepository->find($id);

        if (empty($reseptionist)) {
            Flash::error('Reseptionist not found');

            return redirect(route('reseptionists.index'));
        }

        return view('reseptionists.show')->with('reseptionist', $reseptionist);
    }

    /**
     * Show the form for editing the specified Reseptionist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reseptionist = $this->reseptionistRepository->find($id);

        if (empty($reseptionist)) {
            Flash::error('Reseptionist not found');

            return redirect(route('reseptionists.index'));
        }

        return view('reseptionists.edit')->with('reseptionist', $reseptionist);
    }

    /**
     * Update the specified Reseptionist in storage.
     *
     * @param int $id
     * @param UpdateReseptionistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReseptionistRequest $request)
    {
        $reseptionist = $this->reseptionistRepository->find($id);

        if (empty($reseptionist)) {
            Flash::error('Reseptionist not found');

            return redirect(route('reseptionists.index'));
        }

        $reseptionist = $this->reseptionistRepository->update($request->all(), $id);

        Flash::success('Reseptionist updated successfully.');

        return redirect(route('reseptionists.index'));
    }

    /**
     * Remove the specified Reseptionist from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reseptionist = $this->reseptionistRepository->find($id);

        if (empty($reseptionist)) {
            Flash::error('Reseptionist not found');

            return redirect(route('reseptionists.index'));
        }

        $this->reseptionistRepository->delete($id);

        Flash::success('Reseptionist deleted successfully.');

        return redirect(route('reseptionists.index'));
    }
}
