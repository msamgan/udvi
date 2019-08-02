<?php
namespace msamgan\udvi;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        static::creating(function (Model $model) {
            $uuidKey = $model->getUuidKey();
            $model->$uuidKey = $model->generateUuid();
        });
    }

    /**
     * @return \Ramsey\Uuid\UuidInterface
     */
    public function generateUuid()
    {
        return Str::uuid();
    }

    /**
     * @return string
     */
    public function getUuidKey()
    {
        return 'uuid';
    }
}
