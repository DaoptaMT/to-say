<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// class Role extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'name',
//     ];

//     public function permissions(): BelongsToMany
//     {
//         return $this->belongsToMany(Permission::class);
//     }

//     public function users(): BelongsToMany
//     {
//         return $this->belongsToMany(User::class);
//     }

//     public static function assignRole($name)
//     {
//         $role = Role::where('name', $name)->first();
//         return $role->id;
//     }

//     public function updatePermissions($permissions)
//     {
//         $this->permissions()->sync($permissions);
//     }

//     public function updateRoles(Array $data) {
//         $this->fill($data);
//         return $this->save();
//     }

//     protected static function boot()
//     {
        
//         parent::boot();

//         static::created(function ($role) {
//             Dashboard::create([
//                 'user_id' => auth()->id(),
//                 'activity' => "Created Role {$role->name}",
//                 'url' => route('roles.show', ['role' => $role->id])
//             ]);
//         });
//     }
// }
