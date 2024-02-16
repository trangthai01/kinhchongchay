<?php

namespace WebDevEtc\BlogEtc\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;

/**
 * Class ProductAdded.
 */
class ProductAdded
{
    use Dispatchable;
    use SerializesModels;

    /** @var Post */
    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
}
