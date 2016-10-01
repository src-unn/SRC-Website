<?php
namespace App\Models;

use App\Models\Traits\Validates;
use App\Models\Traits\SoftDeletes;
use App\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable, SoftDeletes, Validates;

    protected $hidden = ['password', 'remember_token'];

    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    const ROLE_SUPER_ADMIN   = 'super_admin';
    const ROLE_CONTENT_ADMIN = 'content_admin';
    const ROLE_MEMBER        = 'member';

    /**
     * Roles that this user can act as, M:N Rel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /**
     * Tracked user sessions, 1:M Rel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    /**
     * Events created by this user, 1:M Rel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function created_events()
    {
        return $this->hasMany(Event::class, 'created_by');
    }

    /**
     * Projects created by this user, 1:M Rel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function created_projects()
    {
        return $this->hasMany(Project::class, 'created_by');
    }

    /**
     * Projects for which this user is assigned to, M:N Rel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function assigned_projects()
    {
        return $this->belongsToMany(Project::class)->withTimestamps();
    }

    /**
     * Teams to which this user belongs, M:N Rel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class)->withTimestamps();
    }

    /**
     * @return array
     */
    public function getNamesArr()
    {
        return ['first_name' => $this->first_name, 'middle_name' => $this->middle_name, 'last_name' => $this->last_name];
    }

    /**
     * @param string $separator
     *
     * @return string
     */
    public function getNamesStr($separator = ' ')
    {
        return implode($separator, $this->getNamesArr());
    }

    /**
     * @param Role $role
     *
     * @return mixed
     */
    public function hasRole(Role $role)
    {
        return $this->roles->contains($role);
    }

    /**
     * @return bool
     */
    public function isSuperAdmin()
    {
        return in_array($this::ROLE_SUPER_ADMIN, $this->roles->pluck('name')->all());
    }

    /**
     * @return bool
     */
    public function isContentAdmin()
    {
        return in_array($this::ROLE_CONTENT_ADMIN, $this->roles->pluck('name')->all());
    }

    /**
     * This method is mostly redundant at the moment since all users are members.
     * However, there could be a situation very soon where we have users that are not members, e.g. Client
     *
     * @return bool
     */
    public function isMember()
    {
        return in_array($this::ROLE_MEMBER, $this->roles->pluck('name')->all());
    }

    /**
     * @param string $email
     *
     * @return null | User
     */
    public static function findByEmail($email)
    {
        return self::where('email', $email)->first();
    }

    /**
     * @param string $phone
     *
     * @return null | User
     */
    public static function findByPhone($phone)
    {
        return self::where('phone', $phone)->first();
    }

    /**
     *
     */
    protected function validator()
    {
        // TODO: Implement validator() method.
    }

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
