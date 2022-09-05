<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset_Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path'
        
        
    ];




    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assets_media';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
