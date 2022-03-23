<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property string $tenant_id
 * @property string $domain
 * @property string $created_at
 * @property string $updated_at
 * @property Tenant $tenant
 */
class Domain extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['tenant_id', 'domain', 'created_at', 'updated_at'];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->domain = \Str::lower($model->domain);
        });
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    public function getFullDomainAttribute() : string
    {
        return $this->domain . '.' . config('tenancy.central_domain');
    }
}
