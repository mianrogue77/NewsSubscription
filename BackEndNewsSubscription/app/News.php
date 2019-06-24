<?php

namespace App;

use App\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
	use SoftDeletes;

	protected $table = 'tidings';
	protected $dates = ['deleted_at'];

    protected $fillable = [
    	'title',
    	'description',
    	'publication_date',
    	'topic_id',
    ];

    public function topic() {
    	return $this->belongsTo(Topic::class);
    }
}
