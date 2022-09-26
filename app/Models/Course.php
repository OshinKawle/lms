<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Course extends Model
{

    use Notifiable ;

     # define table
      protected $table ='courses';
      
      # define fillable fields
      protected $fillable = [
                           "name",
                           'univercity_id'
                           
                           
                           
      ];


         /**
       * The attributes that should be cast.
       *
       * @var array
       */
      protected $casts = [
          'created_at' => 'datetime:H:i:s a',
      ];
      public function univercity(){
        return $this->hasOne(Univercity::class, 'id', 'univercity_id');
    }
}
