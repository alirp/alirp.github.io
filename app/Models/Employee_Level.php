<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'priority'
        
        
    ];




    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employee_levels';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
