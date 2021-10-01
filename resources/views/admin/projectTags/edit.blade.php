@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.projectTag.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.project-tags.update", [$projectTag->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="tag">{{ trans('cruds.projectTag.fields.tag') }}</label>
                <input class="form-control {{ $errors->has('tag') ? 'is-invalid' : '' }}" type="text" name="tag" id="tag" value="{{ old('tag', $projectTag->tag) }}" required>
                @if($errors->has('tag'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tag') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.projectTag.fields.tag_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection