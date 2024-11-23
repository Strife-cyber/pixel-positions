<?php

namespace App\Models;

use Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static where(string $string, string $string1, string $string2)
 * @method static latest()
 */
class Job extends Model
{
    /** @use HasFactory<JobFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'salary', 'location', 'schedule', 'url', 'featured'
    ];

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->attach($tag);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function employer() : BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
