<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiler extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'team_type',
        'project_type',
        'project_floors',
        'activity_type',
        'sub_activity'
        
        
    ];




    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profilers';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
