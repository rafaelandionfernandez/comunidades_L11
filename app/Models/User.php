<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\NewAccessToken;

class User extends Authenticatable
{

    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellidos',
        'fechalta',
        'email',
        'password',
        'tratamiento',
        'tipo',
        'doi',
        'telefono1',
        'telefono2',
        'direccion',
        'cp',
        'municipio',
        'localidad',
        'pais',
        'comentario',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

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


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function comunidades(): BelongsToMany
    {
        return $this->belongsToMany(Comunidad::class, 'comunidad_user', 'user_id', 'comunidad_id')->withPivot('role_name')->withTimestamps();
    }

    public function propiedades(): HasMany
    {
        return $this->hasMany(Propiedad::class);
    }
    // Instalado paquete Spatie/laravel-permission que es incompatible con el método roles().
    // Tampoco puede haber una propiedad role o roles en este modelo ni en la tabla correspondiente de la B.D.
    // Lo mismo sucede con las propiedades permission, permissions, y el método permissions()
//    public function roles() {
//        return $this->belongsToMany(Role::class, 'comunidad_user', 'user_id', 'role_id')->withTimestamps();
//    }

    public function createToken(string $name, array $abilities = ['*']): NewAccessToken
    {
        $token = $this->tokens()->create([
            'name' => $name,
            'token' => hash('sha256', $plainTextToken = Str::random(40)),
            'abilities' => $abilities,
            'plainTextToken' => $plainTextToken,   // añadida por randion
        ]);

        return new NewAccessToken($token, $token->getKey() . '|' . $plainTextToken);
    }

}
