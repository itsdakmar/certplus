<?php

namespace App\Models;

use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\{Concerns\GeneratesIds, Models\Tenant as BaseTenant, Concerns\HasDatabase, Concerns\HasDomains};
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Tenant
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property mixed $data
 * @property Domain[] $domains
 * @property-read int|null $domains_count
 * @method static \Stancl\Tenancy\Database\TenantCollection|static[] all($columns = ['*'])
 * @method static \Stancl\Tenancy\Database\TenantCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $members
 * @property-read int|null $members_count
 */
class Tenant extends BaseTenant implements TenantWithDatabase
{
    use GeneratesIds, HasDatabase, HasDomains;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'data'];

    public function domains(): HasMany
    {
        return $this->hasMany(Domain::class);
    }

    public function members(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
