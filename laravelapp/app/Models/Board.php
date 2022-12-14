<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

    public function person() {
        return $this->belongsTo('App\Models\Person');
    }

    public function getData() {
        if($this->person != null) {
            return $this->id . ': ' . $this->title . ' (' . $this->person['name'] . ')';
        }
    }
}
