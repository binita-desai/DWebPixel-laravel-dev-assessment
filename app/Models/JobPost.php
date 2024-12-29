<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;


class JobPost extends Model
{
    protected $appends = ['company_logo_url','extra'];
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }

    protected function getExtraAttribute(): array
    {
        return explode(",",$this->extra_info   );
    }

    protected function getCompanyLogoUrlAttribute(): string
    {
        return Storage::url($this->company_logo);
    }


}
