<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ReceipeStored;

class Receipe extends Model
{
    protected $table = 'receipe';

    protected $fillable = ['name', 'ingredients', 'category', 'author_id'];

    // protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created( function($receipe) {

            flash('Receipe has created successfully!');

            \Mail::to('einyeinchit.sead@gmail.com')->send(new ReceipeStored($receipe));
            
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
