<?php

namespace App\Models;

use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPanelShield;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'can_track',
    ];

    protected $hidden = [
        'password',
    ];


    protected $casts = [
        'password' => 'hashed',
    ];

    // if the user is super admin, the user can access
    public function getCanTrackAttribute(): bool
    {
        if ($this->hasRole('super_admin')) {
            return true;
        }
        return $this->attributes['can_track'] ?? false;
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function scopeDoesHaveRole($query)
    {
        return $query->has("roles");
    }

    public function scopeDoesntHaveRole($query)
    {
        return $query->doesntHave('roles');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->roles->toArray()  != [];
    }
}
