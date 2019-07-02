<?php
declare(strict_types=1);

namespace App\Listeners\Database\Eloquent\Observers;

use Illuminate\Database\Eloquent\Model;

final class UserObserver
{
    /**
     * @param Model $model
     * @return mixed
     */
    public function creating(Model $model)
    {
        $model->generateUuid();
        $model->hashPass();
    }

    /**
     * @param Model $model
     * @return mixed
     */
    public function updating(Model $model)
    {
        //
    }

    /**
     * @param Model $model
     * @return mixed
     */
    public function saving(Model $model)
    {
        //
    }

    /**
     * @param Model $model
     * @return mixed
     */
    public function deleting(Model $model)
    {
        //
    }

    /**
     * @param Model $model
     * @return mixed
     */
    public function restoring(Model $model)
    {
        //
    }
}
