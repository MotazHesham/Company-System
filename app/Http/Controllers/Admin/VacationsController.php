<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVacationRequest;
use App\Http\Requests\StoreVacationRequest;
use App\Http\Requests\UpdateVacationRequest;
use App\Models\User;
use App\Models\Vacation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class VacationsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('vacation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Vacation::with(['user', 'created_by'])->select(sprintf('%s.*', (new Vacation())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'vacation_show';
                $editGate = 'vacation_edit';
                $deleteGate = 'vacation_delete';
                $crudRoutePart = 'vacations';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->addColumn('user_email', function ($row) {
                return $row->user ? $row->user->email : '';
            });

            $table->editColumn('reason', function ($row) {
                return $row->reason ? $row->reason : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? Vacation::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'user']);

            return $table->make(true);
        }

        return view('admin.vacations.index');
    }

    public function create()
    {
        abort_if(Gate::denies('vacation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('email', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.vacations.create', compact('users'));
    }

    public function store(StoreVacationRequest $request)
    {
        $vacation = Vacation::create($request->all());

        return redirect()->route('admin.vacations.index');
    }

    public function edit(Vacation $vacation)
    {
        abort_if(Gate::denies('vacation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('email', 'id')->prepend(trans('global.pleaseSelect'), '');

        $vacation->load('user', 'created_by');

        return view('admin.vacations.edit', compact('users', 'vacation'));
    }

    public function update(UpdateVacationRequest $request, Vacation $vacation)
    {
        $vacation->update($request->all());

        return redirect()->route('admin.vacations.index');
    }

    public function show(Vacation $vacation)
    {
        abort_if(Gate::denies('vacation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vacation->load('user', 'created_by');

        return view('admin.vacations.show', compact('vacation'));
    }

    public function destroy(Vacation $vacation)
    {
        abort_if(Gate::denies('vacation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vacation->delete();

        return back();
    }

    public function massDestroy(MassDestroyVacationRequest $request)
    {
        Vacation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
