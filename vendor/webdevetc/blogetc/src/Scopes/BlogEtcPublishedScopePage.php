<?php

namespace WebDevEtc\BlogEtc\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use WebDevEtc\BlogEtc\Helpers;

class BlogEtcPublishedScopePage implements Scope
{
    /**
     * Only show posts which are published in the past, unless the user has admin access.
     */
    public function apply(Builder $builder, Model $model)
    {
        if (Helpers::hasAdminGateAccess()) {
            return;
        }

        $builder->where('is_published', true);
        $builder->where('is_page',true);
        $builder->where('posted_at', '<=', Carbon::now());
    }
}
