<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'table_name', 'table_rows', 'table_columns',
    ];

    // for foreign key constraint
    public function sentence()
    {
        return $this->hasMany('App\Sentence');
    }
}
