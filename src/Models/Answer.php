<?php

namespace Edumepro\Aymancontact\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

    protected $fillable = ['body', 'uploaded_file_path'];

    # Relationship to contacts definition
    public function contact()
    {
      return  $this->belongsTo('Edumepro\Aymancontact\models\Answer');
    }


}
