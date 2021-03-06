<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan',
              $guarded = [];
    public $timestamps = false;

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
}
