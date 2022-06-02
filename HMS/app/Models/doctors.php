<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class doctors extends Model
{
    use HasFactory;
  protected $fillable = [
'link',

'department',
'amount',

  ];
  public function user(){

        return $this->belongsTo(User::class, 'name','link');

  }

    protected $guarded = [];

}
