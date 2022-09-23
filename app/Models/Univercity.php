<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Univercity extends Model
{
    use Notifiable ;

     # define table
      protected $table ='univercities';
      
      # define fillable fields
      protected $fillable = [
                           'name',
                           'status',
                           
      ];

         /**
       * The attributes that should be cast.
       *
       * @var array
       */
      protected $casts = [
          'created_at' => 'datetime:H:i:s a',
      ];
}
