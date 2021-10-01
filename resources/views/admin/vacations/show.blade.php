@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.vacation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vacations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.vacation.fields.id') }}
                        </th>
                        <td>
                            {{ $vacation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vacation.fields.user') }}
                        </th>
                        <td>
                            {{ $vacation->user->email ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vacation.fields.start_date') }}
                        </th>
                        <td>
                            {{ $vacation->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vacation.fields.end_date') }}
                        </th>
                        <td>
                            {{ $vacation->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vacation.fields.reason') }}
                        </th>
                        <td>
                            {{ $vacation->reason }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vacation.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Vacation::STATUS_SELECT[$vacation->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vacations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection