<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'table_id', 'sentence_text', 'sentence_row_column', 'sentence_style', 'sentence_color',
//    ];

    protected $fillable = [
        'table_id', 'sentence_text', 'sentence_row_column',
    ];

    // for foreign key constraint
    public function table()
    {
        return $this->belongsTo('App\Table','table_id');
    }
}
