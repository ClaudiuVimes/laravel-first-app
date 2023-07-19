<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use HasFactory;
	protected $fillable = [
		'title',
		'excerpt',
		'body',
		'images_path',
		'is_published',
		'min_to_read',
	];
	// OPTIONAL, - Laravel already knows to look for the table posts
	//	protected $table = 'posts';

	// Change the primary key of the table
	//	protected $primaryKey = 'title';

	//	protected $timestamps = false;
	//	protected $dateTime = 'U';

	//	protected $connection = 'sqlite';
	//
	//	protected $attributes = [
	//		'is_published' => true,
	//	];
}
