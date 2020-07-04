<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban',
              $guarded = [];
    public $timestamps = false;

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }
}
