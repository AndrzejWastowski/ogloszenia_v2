<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserGroup extends Model
{
    protected $table = 'users_groups';
    protected $fillable = [
        'id',
        'name',
        'permisions'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'users_groups_id');
    }

}
