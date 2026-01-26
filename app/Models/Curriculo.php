<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Curriculo extends Model
{
    public function user(): BelongsTo
=======

class Curriculo extends Model
{
    public function user()
>>>>>>> b787e46d1b9ad8bc91201eecd04ed6260afc6094
    {
        return $this->belongsTo(User::class);
    }
}
