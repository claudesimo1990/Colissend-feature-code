<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */
    protected function dateFrom(): Attribute
    {
        return Attribute::get(
          get:  fn ($value) => Carbon::parse($value)->format('d.m.Y h:m')
        );
    }

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */
    protected function dateTo(): Attribute
    {
        return Attribute::get(
            get:  fn ($value) => Carbon::parse($value)->format('d.m.Y h:m')
        );
    }

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */
    protected function price(): Attribute
    {
        return Attribute::get(
            get:  fn ($value) => $value / 100
        );
    }

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */
    protected function createdAt(): Attribute
    {
        return Attribute::get(
            get:  fn ($value) => Carbon::parse($value)->format('d.m.Y h:m')
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
