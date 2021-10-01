<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    use Auditable;

    public $table = 'projects';

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'budget',
        'status_id',
        'client_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function projectNotes()
    {
        return $this->hasMany(Note::class, 'project_id', 'id');
    }

    public function projectDocuments()
    {
        return $this->hasMany(Document::class, 'project_id', 'id');
    }

    public function projectTransactions()
    {
        return $this->hasMany(Transaction::class, 'project_id', 'id');
    }

    public function projectTasks()
    {
        return $this->hasMany(Task::class, 'project_id', 'id');
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function status()
    {
        return $this->belongsTo(ProjectStatus::class, 'status_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function tags()
    {
        return $this->belongsToMany(ProjectTag::class);
    }

    public function developers()
    {
        return $this->belongsToMany(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
