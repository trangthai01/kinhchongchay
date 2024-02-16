<?php

namespace WebDevEtc\BlogEtc\Requests;

abstract class BaseBlogEtcProductRequest extends BaseAdminRequest
{
    /**
     * Shared rules for blog posts.
     *
     * @todo tidy this up! It is a bit of a mess!
     */
    protected function baseProductPostRules(): array
    {

        $show_error_if_has_value = static function ($attribute, $value, $fail) {
            if ($value) {
                // return $fail if this had a value...
                return $fail($attribute.' must be empty');
            }
        };

        $disabled_use_view_file = static function ($attribute, $value, $fail) {
            if ($value) {
                // return $fail if this had a value
                return $fail('The use of custom view files is not enabled for this site, so you cannot submit a value for it');
            }
        };

        // generate the main set of rules:
        $return = [
            'created_at'         => ['nullable', 'date'],
            'product_id'         => ['required', 'string', 'min:1', 'max:255'],
            'qty'                => ['nullable', 'integer'],
            'unit_price'         => ['nullable', 'numeric'],
            'price'              => ['nullable', 'numeric'],
            'product_name'       => ['required', 'string', 'min:1', 'max:255'],
            'description'        => ['required_without:use_view_file', 'max:2000000'], //medium text
            'meta_desc'          => ['nullable', 'string', 'min:1', 'max:1000'],
            'slug'               => [
                'nullable',
                'string',
                'min:1',
                'max:150',
                'alpha_dash', // this field should have some additional rules, which is done in the subclasses.
            ],
            'category' => ['nullable', 'string'],
        ];

        // is use_custom_view_files true?
        if (config('blogetc.use_custom_view_files')) {
            $return['use_view_file'] = ['nullable', 'string', 'alpha_num', 'min:1', 'max:75'];
        } else {
            // use_view_file is disabled, so give an empty if anything is submitted via this function:
            $return['use_view_file'] = ['string', $disabled_use_view_file];
        }

        // some additional rules for uploaded images
        foreach ((array) config('blogetc.product_image_sizes') as $size => $image_detail) {
            if ($image_detail['enabled'] && config('blogetc.image_upload_enabled')) {
                $return[$size] = ['nullable', 'image'];
            } else {
                // was not enabled (or all images are disabled), so show an error if it was submitted:
                $return[$size] = $show_error_if_has_value;
            }
        }

        return $return;
    }
}
