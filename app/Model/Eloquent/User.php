<?php
declare(strict_types=1);

namespace App\Model\Eloquent;

use App\Traits\Database\Eloquent\Observers\UserObservable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, UserObservable;

    /**
     * @var string
     */
    protected $keyType = 'string';

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @param bool $orderd
     * @return void
     */
    public function generateUuid(bool $orderd = true): void
    {
        do {
            $this->id = Str::{$orderd ? 'orderedUuid' : 'uuid'}();
        } while ($this->find($this->id));
    }

    /**
     * @return void
     */
    public function hashPass(): void
    {
        if (! is_string($str = $this->password)) {
            throw new \InvalidArgumentException('The string for hashing is invalid.');
        }

        $this->password = bcrypt($str);
    }
}
