<?php
namespace App\Models;

use App\Models\Traits\MustValidate;
use App\Models\Traits\SoftDeletes;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable, SoftDeletes, MustValidate;

    protected $hidden = ['password', 'remember_token'];
    //protected $dates = ['deleted_at'];
    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    const ROLE_SUPER_ADMIN   = 'super_admin';
    const ROLE_CONTENT_ADMIN = 'content_admin';
    const ROLE_ACADEMIC      = 'academic';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sessions()
    {
        return $this->hasMany('App\Models\Session');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function library_entries()
    {
        return $this->belongsToMany('App\Entry')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favorite_authors()
    {
        return $this->belongsToMany('App\Entry')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uploaded_entries()
    {
        return $this->hasMany('App\Models\Entry', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function viewed_entries()
    {
        return $this->belongsToMany('App\Models\Entry', 'views', 'user_id', 'viewable_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function viewed_authors()
    {
        return $this->belongsToMany('App\Models\Author', 'views', 'user_id', 'viewable_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function rated_entries()
    {
        return $this->belongsToMany('App\Models\Entry', 'ratings', 'user_id', 'ratable_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function rated_authors()
    {
        return $this->belongsToMany('App\Models\Author', 'ratings', 'user_id', 'ratable_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reviewed_entries()
    {
        return $this->belongsToMany('App\Models\Entry', 'reviews', 'user_id', 'reviewable_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reviewed_authors()
    {
        return $this->belongsToMany('App\Models\Author', 'reviews', 'user_id', 'reviewable_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reported_entries()
    {
        return $this->belongsToMany('App\Models\Entry', 'reports', 'user_id', 'reportable_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reported_authors()
    {
        return $this->belongsToMany('App\Models\Author', 'reports', 'user_id', 'reportable_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function created_authors()
    {
        return $this->hasMany('App\Models\Author');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function created_institutions()
    {
        return $this->hasMany('App\Models\Institution');
    }

    /**
     * @return string
     */
    public function _names()
    {
        return ($this->first_name." ".$this->middle_name." ".$this->last_name);
    }

    /**
     * @param Role $role
     *
     * @return mixed
     */
    public function _hasRole(Role $role)
    {
        return $this->roles->contains($role);
    }

    /**
     * @return bool
     */
    public function _isSuperAdmin()
    {
        return in_array($this::ROLE_SUPER_ADMIN, $this->roles->pluck('name')->all());
    }

    /**
     * @return bool
     */
    public function _isContentAdmin()
    {
        return in_array($this::ROLE_CONTENT_ADMIN, $this->roles->pluck('name')->all());
    }

    /**
     * @return bool
     */
    public function _isAcademic()
    {
        return in_array($this::ROLE_ACADEMIC, $this->roles->pluck('name')->all());
    }

    /**
     * @param $email
     *
     * @return mixed
     */
    public static function _findByEmail($email)
    {
        return self::where('email', $email)->first();
    }

    /**
     * @param $phone
     *
     * @return mixed
     */
    public static function _findByPhone($phone)
    {
        return self::where('phone', $phone)->first();
    }

    public static function validator()
    {
        return null;
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
