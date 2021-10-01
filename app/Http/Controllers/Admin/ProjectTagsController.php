<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProjectTagRequest;
use App\Http\Requests\StoreProjectTagRequest;
use App\Http\Requests\UpdateProjectTagRequest;
use App\Models\ProjectTag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ProjectTagsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('project_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ProjectTag::query()->select(sprintf('%s.*', (new ProjectTag())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'project_tag_show';
                $editGate = 'project_tag_edit';
                $deleteGate = 'project_tag_delete';
                $crudRoutePart = 'project-tags';

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
            $table->editColumn('tag', function ($row) {
                return $row->tag ? $row->tag : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.projectTags.index');
    }

    public function create()
    {
        abort_if(Gate::denies('project_tag_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.projectTags.create');
    }

    public function store(StoreProjectTagRequest $request)
    {
        $projectTag = ProjectTag::create($request->all());

        return redirect()->route('admin.project-tags.index');
    }

    public function edit(ProjectTag $projectTag)
    {
        abort_if(Gate::denies('project_tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.projectTags.edit', compact('projectTag'));
    }

    public function update(UpdateProjectTagRequest $request, ProjectTag $projectTag)
    {
        $projectTag->update($request->all());

        return redirect()->route('admin.project-tags.index');
    }

    public function show(ProjectTag $projectTag)
    {
        abort_if(Gate::denies('project_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.projectTags.show', compact('projectTag'));
    }

    public function destroy(ProjectTag $projectTag)
    {
        abort_if(Gate::denies('project_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projectTag->delete();

        return back();
    }

    public function massDestroy(MassDestroyProjectTagRequest $request)
    {
        ProjectTag::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
