<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class ThreadBuilder extends Builder
{
    public function wherePopular(): self
    {
        $this->where(function ($query) {
            $query->where('like_count', '>', 500)
                ->orWhere('share_count', '>', 100)
                ->orWhere('reply_count', '>', 50);
        });

        return $this;
    }
}
