<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\App\Models\Project',
            'date_field' => 'end_date',
            'field'      => 'name',
            'prefix'     => 'deadline',
            'suffix'     => '',
            'route'      => 'admin.projects.edit',
        ],
        [
            'model'      => '\App\Models\Vacation',
            'date_field' => 'start_date',
            'field'      => 'id',
            'prefix'     => 'vacation',
            'suffix'     => '',
            'route'      => 'admin.vacations.edit',
        ],
        [
            'model'      => '\App\Models\Meeting',
            'date_field' => 'start_date',
            'field'      => 'type',
            'prefix'     => 'meeting',
            'suffix'     => '',
            'route'      => 'admin.meetings.edit',
        ],
    ];

    public function index()
    {
        $events = [];
        foreach ($this->sources as $source) {
            foreach ($source['model']::all() as $model) {
                $crudFieldValue = $model->getAttributes()[$source['date_field']];

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim($source['prefix'] . ' ' . $model->{$source['field']} . ' ' . $source['suffix']),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
