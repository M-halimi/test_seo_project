<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  // Import the HasFactory trait
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class News extends Model
    {
        use HasSEO;

        use HasFactory;  // Add the HasFactory trait
    }

