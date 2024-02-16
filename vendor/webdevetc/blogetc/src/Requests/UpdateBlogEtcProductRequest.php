<?php

namespace WebDevEtc\BlogEtc\Requests;

use Illuminate\Validation\Rule;
use WebDevEtc\BlogEtc\Interfaces\LegacyGetImageFileInterface;
use WebDevEtc\BlogEtc\Requests\Traits\HasCategoriesTrait;
use WebDevEtc\BlogEtc\Requests\Traits\HasImageUploadTrait;

class UpdateBlogEtcProductRequest extends BaseBlogEtcProductRequest implements LegacyGetImageFileInterface
{
    use HasCategoriesTrait;
    use HasImageUploadTrait;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $return = $this->baseProductPostRules();
        $return['slug'][] = Rule::unique('products', 'slug')->ignore($this->route()->parameter('productId'), 'product_id');
        return $return;
    }
}
