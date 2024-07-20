<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'content'
    ];
    /**
     * Get all of the post's images.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function comments():HasMany{
        return $this->hasMany(Comment::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
