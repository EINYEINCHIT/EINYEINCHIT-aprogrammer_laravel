<?php

namespace App;

use App\Receipe;
use App\Events\CategoryCreatedEvent;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['name', 'description', 'author_id'];

    public $dispatchesEvents = [
        'created' => CategoryCreatedEvent::class
    ];

    protected static function boot()
    {
        parent::boot();

        static::created( function($category) {
 
            flash('Category has created successfully!');
        });

        static::updated( function($category) {

            flash('Category has been successfully updated!');
            
        });

        static::deleted( function($category) {

            flash('Category was deleted!');
            
        });
    }

    public function receipe()
    {
        return $this->hasMany(Receipe::class);
    }
}
