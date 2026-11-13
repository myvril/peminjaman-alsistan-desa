<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


#[Fillable(['nama', 'email', 'password' , 'no_hp' , 'alamat'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    protected $primaryKey = 'id_user';
    protected $table = 'users';
    
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // METHOD HELPER ROLE ------------
    public function isPengelola(): bool{
        return $this->role === 'pengelola';
    }

    public function isPetani(): bool{
        return $this->role === 'petani';
    }
}
