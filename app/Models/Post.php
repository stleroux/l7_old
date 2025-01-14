<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
use Carbon\Carbon;
use Str;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use OwenIt\Auditing\Contracts\Auditable;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
use Route;

class Post extends Model implements Searchable, Auditable, Likeable, Viewable
{

   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   use Likes;
   use InteractsWithViews;

   protected $fillable = ['slug'];

   protected $dates = ['deleted_at', 'published_at'];

   protected $removeViewsOnDelete = true;
   
   protected static function boot()
   {
      parent::boot();

      // Once post is created, add the slug
      static::created(function ($post) {
         $post->update(['slug' => $post->title]);
      });
   }

   public function setSlugAttribute($value)
   {
      // if slug already exists, add a dash and the id of the post to make the slug unique
      if (static::whereSlug($slug = str::slug($value))->exists()) {
         $slug = "{$slug}-{$this->id}";
      }
      $this->attributes['slug'] = $slug;
   }


//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
// 1 category belongs to many posts // a related entry needs to be added to the category model
   public function category()
   {
      return $this->belongsTo('App\Models\Category');
   }

   public function tags()
   {
      return $this->belongsToMany('App\Models\Tag')->orderBy('name','asc');
   }

   public function comments()
   {
      return $this->morphMany('\App\Models\Comment', 'commentable')->orderBy('id','desc');
   }

   public function user()
   {
      return $this->belongsTo('App\Models\User');
   }

   // public function updated_by()
   // {
   //    return $this->belongsTo('App\Models\User');
   // }

   public function modifiedBy()
   {
      return $this->belongsTo('App\Models\User');
   }

   public function lastViewedBy()
   {
      return $this->belongsTo('App\Models\User');
   }


//////////////////////////////////////////////////////////////////////////////////////
// SCOPES
//////////////////////////////////////////////////////////////////////////////////////
   public function scopeBlog($query)
   {
      return $query
         ->where('category','=',2);
   }

   public function scopeSiteBlocks($query)
   {
      return $query
         ->where();
   }

   public function scopeNewPosts($query)
   {
      return $query
         ->where('created_at', '>=' , Auth::user()->last_login_date)
         ->orderBy('title','DESC');
   }

   public function scopeFuturePosts($query)
   {
      return $query
         ->where('published_at', '>=' , Carbon::now())
         ->orderBy('title','DESC');
   }

   public function scopePublished($query)
   {
      return $query
         ->where('published_at', '<', Carbon::now());
         // ->where('category_id', '!=', 2);
   }

   public function scopeUnpublished($query)
   {
      return $query
         ->whereNull('published_at');
   }

   public function scopeTrashed($query)
   {
      return $query
         ->where('deleted_at', '!=', NULL)
         ->withTrashed();
   }


   public function scopeNewPostsCount($query)
   {
      return $query
         ->where('created_at', '>=' , Auth::user()->last_login_date);
   }

   public function scopeFuturePostsCount($query)
   {
      return $query
         ->where('published_at', '>=' , Carbon::now());
   }

   public function scopeTrashedCount($query)
   {
      return $query
         ->where('deleted_at', '!=', NULL)
         ->withTrashed();
   }


//////////////////////////////////////////////////////////////////////////////////////
// ACCESSORS
//////////////////////////////////////////////////////////////////////////////////////
   // public function getCreatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(setting('dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }

   // public function getUpdatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(setting('dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }

   // public function getPublishedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(setting('dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }

   // public function getDeletedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(setting('dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }

   public function getSearchResult(): SearchResult
   {
      
      if(Route::currentRouteName('') == 'admin.quickSearch' || Route::currentRouteName('') == 'admin.advSearch')
      {
         $url = route('admin.posts.show', $this->id);
      } else {
         $url = route('posts.show', $this->id);
      }

      return new SearchResult(
         $this,
         $this->title,
         $url
      );
   }

}