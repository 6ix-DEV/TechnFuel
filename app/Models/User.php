<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['name','email','password',];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = ['password','remember_token',];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return ['email_verified_at' => 'datetime','password' => 'hashed',];
    }

    
    //Branches des relations entre les tables
    //Relation -> Un Utilisateur a une ou plusieurs Commande -> 1-N vers Commande
    public function commandes()
    {
        return $this->hasMany(Commande::class); 
    }

    //Relation -> Un Utilisateur a un et un seule panier -> 1-1 vers Panier
    public function panier()
    {
        return $this->hasOne(Panier::class); 
    }
}