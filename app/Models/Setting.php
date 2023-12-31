<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $guarded = [];

    protected $appends = ['logo_path','icon_path','cover_path'];

    public function getLogoPathAttribute(){
        return asset('/uploads/setting_images/' . $this->logo);
    }

    public function getIconPathAttribute(){
        return asset('/uploads/setting_images/' . $this->icon);
    }

    public function getCoverPathAttribute(){
        return asset('/uploads/setting_images/' . $this->cover);
    }
}
