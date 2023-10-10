<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// Added by Nicholas Vogt
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // Added by for purchasing things
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone_number',
        'spouse',
        'password',
        'biography',
        'current_img',
        'veteran_img',
        'tombstone_img',
        'deceased',
        'mailing_address',
        'expiration_date',
        'associated_by',
        'honorary_member',
        'rank',
        'kia_or_mia',
        'kia_location',
        'injury_type',
        'burial_site',
        'day_of_death',
        'month_of_death',
        'year_of_death',
        'comments',
        'casualty_conflict_id',
        'unit',
        'when_displayed',
        'moh_recipient',
        'day_of_moh_action',
        'month_of_moh_action',
        'year_of_moh_action',
        'moh_location',
        'citation',
        'awarded_posthumously',
        'moh_conflict_id'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function all_user_roles() {
      return $this->belongsToMany('App\Models\Role');
    }

    public function all_user_conflicts() {
      return $this->belongsToMany('App\Models\Conflict');
    }

    // For example, this function is used by the 'UserRole.php' middleware that I made.
    public function check_for_role($role_title) {
      foreach ($this->all_user_roles as $one_role) {
        if ($one_role->title == $role_title) {
          return true;
        };
      };
      return false;
    }

    public function check_for_permission($permission_label) {
      foreach ($this->all_user_roles as $one_role) {
        $all_permissions = Role::find($one_role->id)->all_role_permissions;
        foreach ($all_permissions as $one_permission) {
          if ($one_permission->label == $permission_label) {
            return true;
          };
        };
      };
      return false;
    }
}
