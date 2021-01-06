<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Doctor;
use App\Models\User;
use App\Repositories\DoctorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Response;

class DoctorController extends AppBaseController
{
    use AuthenticatesUsers;
    /** @var  DoctorRepository */
    private $doctorRepository;

    public function __construct(DoctorRepository $doctorRepo)
    {
        $this->doctorRepository = $doctorRepo;
    }

    /**
     * Display a listing of the Doctor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function loginDoctor()
    {
        return view('loginDoctor');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::guard('doctor')->attempt(['email'=>$email,'password'=>$password]))
        {
            $doctor = Doctor::where('email','=',$email)->first();
            $request->session()->put('id',$doctor->id);
            $request->session()->put('name',$doctor->name);
            $request->session()->put('created_at',$doctor->created_at);
            return view('layouts.app',compact(Auth::user()));
        }
        else
        {
            return redirect()->back()->with('msg',"This Email Not Exist! please try again");
        }
    }
    public function index(Request $request)
    {
        $doctors = $this->doctorRepository->all();

        return view('doctors.index')
            ->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new Doctor.
     *
     * @return Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created Doctor in storage.
     *
     * @param CreateDoctorRequest $request
     *
     * @return Response
     */
    public function store(CreateDoctorRequest $request)
    {
        $input = $request->all();

        $doctor = $this->doctorRepository->create($input);

        Flash::success('Doctor saved successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Display the specified Doctor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.show')->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified Doctor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.edit')->with('doctor', $doctor);
    }

    /**
     * Update the specified Doctor in storage.
     *
     * @param int $id
     * @param UpdateDoctorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoctorRequest $request)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        $doctor = $this->doctorRepository->update($request->all(), $id);

        Flash::success('Doctor updated successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified Doctor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        $this->doctorRepository->delete($id);

        Flash::success('Doctor deleted successfully.');

        return redirect(route('doctors.index'));
    }
}
