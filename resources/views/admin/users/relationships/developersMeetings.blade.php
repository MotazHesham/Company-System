@can('meeting_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.meetings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.meeting.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.meeting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-developersMeetings">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.meeting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.meeting.fields.project') }}
                        </th>
                        <th>
                            {{ trans('cruds.meeting.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.meeting.fields.notes') }}
                        </th>
                        <th>
                            {{ trans('cruds.meeting.fields.developers') }}
                        </th>
                        <th>
                            {{ trans('cruds.meeting.fields.type') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meetings as $key => $meeting)
                        <tr data-entry-id="{{ $meeting->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $meeting->id ?? '' }}
                            </td>
                            <td>
                                {{ $meeting->project->name ?? '' }}
                            </td>
                            <td>
                                {{ $meeting->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $meeting->notes ?? '' }}
                            </td>
                            <td>
                                @foreach($meeting->developers as $key => $item)
                                    <span class="badge badge-info">{{ $item->email }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ App\Models\Meeting::TYPE_SELECT[$meeting->type] ?? '' }}
                            </td>
                            <td>
                                @can('meeting_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.meetings.show', $meeting->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('meeting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.meetings.edit', $meeting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('meeting_delete')
                                    <form action="{{ route('admin.meetings.destroy', $meeting->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('meeting_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.meetings.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  });
  let table = $('.datatable-developersMeetings:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection