<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bonus()
    {
        return $this->belongsTo('App\Bonus')->withTrashed();
    }

    public function bank()
    {
        return $this->belongsTo('App\Bank');
    }

    public function logs()
    {
        return $this->hasMany('App\Log');
    }
}
