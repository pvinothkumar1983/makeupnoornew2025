<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class GalleryImage extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's pluralization rules.
    protected $table = 'gallery_image';

    // Define the fields that can be mass-assigned.
    protected $fillable = [
        'image',
        'gallery_id'
    ];

    /**
     * Relationship: Each GalleryImage belongs to a Gallery.
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }
}
