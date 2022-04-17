<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable, HasFactory;
    // protected $fillable=['title','excerpt','body']; 
    protected $guarded=['id'];
    protected $with = ['user','category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    //search
    public function scopeFilter($query, array $filters){
        //search
        $query->when($filters['search'] ?? false, fn($query, $search) => 
            $query->where('title','like','%' . $search . '%')->
            orWhere('body','like','%' . $search . '%')->
            whereHas('user',fn($query) =>
                    $query->where('name','like','%' . $search . '%'))
        );
        //search + category
        $query->when($filters['category'] ?? false, fn($query, $category) => 
            $query->whereHas('category', fn($query) => 
            $query->where('slug', $category))
        );
        //search + user
        $query->when($filters['user'] ?? false, fn($query, $user) => 
            $query->whereHas('user', fn($query) => 
            $query->where('username', $user))
        );
    }

    public function getRouteKeyName(){
        return 'slug';
    }
    // otomatisasi pembuatan slug   
}