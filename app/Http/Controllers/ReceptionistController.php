<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReceptionistRequest;
use App\Http\Requests\UpdateReceptionistRequest;
use App\Repositories\ReceptionistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class ReceptionistController extends AppBaseController
{
    /** @var  ReceptionistRepository */
    private $receptionistRepository;

    public function __construct(ReceptionistRepository $receptionistRepo)
    {
        $this->receptionistRepository = $receptionistRepo;
    }

    /**
     * Display a listing of the Receptionist.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->type != [0,1])
        { return redirect()->back();}
        $receptionists = $this->receptionistRepository->all()->where('type','2');

        return view('receptionists.index')
            ->with('receptionists', $receptionists);
    }

    /**
     * Show the form for creating a new Receptionist.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::user()->type != [0,1])
        { return redirect()->back();}
        return view('receptionists.create');
    }

    /**
     * Store a newly created Receptionist in storage.
     *
     * @param CreateReceptionistRequest $request
     *
     * @return Response
     */
    public function store(CreateReceptionistRequest $request)
    {
        if(Auth::user()->type != [0,1])
        { return redirect()->back();}
        $input = $request->all();

        $receptionist = $this->receptionistRepository->create($input);

        Flash::success('Receptionist saved successfully.');

        return redirect(route('receptionists.index'));
    }

    /**
     * Display the specified Receptionist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(Auth::user()->type != [0,1])
        { return redirect()->back();}
        $receptionist = $this->receptionistRepository->find($id);

        if (empty($receptionist)) {
            Flash::error('Receptionist not found');

            return redirect(route('receptionists.index'));
        }

        return view('receptionists.show')->with('receptionist', $receptionist);
    }

    /**
     * Show the form for editing the specified Receptionist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if(Auth::user()->type != [0,1])
        { return redirect()->back();}
        $receptionist = $this->receptionistRepository->find($id);

        if (empty($receptionist)) {
            Flash::error('Receptionist not found');

            return redirect(route('receptionists.index'));
        }

        return view('receptionists.edit')->with('receptionist', $receptionist);
    }

    /**
     * Update the specified Receptionist in storage.
     *
     * @param int $id
     * @param UpdateReceptionistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReceptionistRequest $request)
    {
        if(Auth::user()->type != [0,1])
        { return redirect()->back();}
        $receptionist = $this->receptionistRepository->find($id);

        if (empty($receptionist)) {
            Flash::error('Receptionist not found');

            return redirect(route('receptionists.index'));
        }

        $receptionist = $this->receptionistRepository->update($request->all(), $id);

        Flash::success('Receptionist updated successfully.');

        return redirect(route('receptionists.index'));
    }

    /**
     * Remove the specified Receptionist from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $receptionist = $this->receptionistRepository->find($id);

        if (empty($receptionist)) {
            Flash::error('Receptionist not found');

            return redirect(route('receptionists.index'));
        }

        $this->receptionistRepository->delete($id);

        Flash::success('Receptionist deleted successfully.');

        return redirect(route('receptionists.index'));
    }
}
