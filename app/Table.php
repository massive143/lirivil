<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Table extends Model
{
    protected $fillable = ['nama','password'];
    public $timestamps = false;

     public function searchableAs()
    {
        return 'items_index';
    }
}
