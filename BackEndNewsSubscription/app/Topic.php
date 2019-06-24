<?php

namespace App;

use App\News;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = [
    	'name',
    ];

    public function users() {
    	return $this->belongsToMany(User::class);
    }

    public function news() {
    	return $this->hasMany(News::class);
    }
}
