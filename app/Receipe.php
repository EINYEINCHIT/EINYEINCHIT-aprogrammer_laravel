<?php

namespace App;

use App\Category;
use App\Events\ReceipeCreatedEvent;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ReceipeStored;

class Receipe extends Model
{
    protected $table = 'receipe';

    protected $fillable = ['name', 'ingredients', 'category', 'author_id'];

    // protected $guarded = [];

    public $dispatchesEvents = [
        'created' => ReceipeCreatedEvent::class
    ];

    protected static function boot()
    {
        parent::boot();

        static::created( function($receipe) {
 
            flash('Receipe has created successfully!');
            
        });

        static::updated( function($receipe) {

            flash('Receipe has updated!');
            
        });

        static::deleted( function($receipe) {

            flash('Receipe has deleted!');
            
        });
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
