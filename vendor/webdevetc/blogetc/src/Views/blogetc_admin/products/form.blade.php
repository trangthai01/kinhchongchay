
<div class="form-group">
</div>
<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label for="product_id">Product ID</label>
            <input type="text" class="form-control" required id="product_id" aria-describedby="product_id_help" name="product_id"
                value="{{ old('product_id',$product->product_id) ?? (\App\Models\Product::max('product_id') + 1) }}">
            <small id="product_id_help" class="form-text text-muted">The product ID</small>
        </div>
    </div>
    <div class="col-sm-6 col-md-8">
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" required id="product_name" aria-describedby="product_name_help" name="product_name"
                value="{{old("product_name",$product->product_name)}}">
            <small id="product_name_help" class="form-text text-muted">The product name</small>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label for="product_qty">Qty</label>
            <input type="text" class="form-control" required id="product_qty" aria-describedby="product_qty_help" name="qty"
                value="{{old("qty",$product->qty) ?? 1}}">
            <small id="product_qty_help" class="form-text text-muted">The product qty</small>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="form-group">
            <label for="unit_price">Unit Price / Sales Price</label>
            <input type="text" class="form-control" required id="unit_price" aria-describedby="unit_price_help" name="unit_price"
                value="{{old("unit_price",$product->unit_price) ?? 0}}">
            <small id="unit_price_help" class="form-text text-muted">The product Unit Price</small>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="form-group">
            <label for="price">Sales Price</label>
            <input type="text" class="form-control" required id="price" aria-describedby="price_help" name="price"
                value="{{old("price",$product->price) ?? 0}}">
            <small id="price_help" class="form-text text-muted">The product Sales Price</small>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label for="product_slug">Product Slug</label>
            <input type="text" class="form-control" id="product_slug" aria-describedby="product_slug_help" name="slug"
                   value="{{old("slug",$product->slug)}}">
            <small id="product_slug_help" class="form-text text-muted">The slug (leave blank to auto generate) -
                i.e. {{ route("blogetc.single", "" )}}/<u><em>this_part</em></u></small>
        </div>

    </div>
    <div class="col-sm-6 col-md-4">
        <div class="form-group">
            <label for="blog_is_published">Published?</label>

            <select name="is_published" class="form-control" id="blog_is_published"
                    aria-describedby="blog_is_published_help">

                <option @if(old("is_published",$product->use_yn) == '1') selected="selected" @endif value="1">
                    Published
                </option>
                <option @if(old("is_published",$product->use_yn) == '0') selected="selected" @endif value="0">
                    Not Published
                </option>

            </select>
            <small id="blog_is_published_help" class="form-text text-muted">
                Should this be published? If not, then it won't be publicly viewable.
            </small>
        </div>

    </div>
    <div class="col-sm-6 col-md-4">
        <div class="form-group">
            <label for="product_created_at">Created at</label>
            <input type="text" class="form-control" id="product_created_at" aria-describedby="product_created_at_help"
                   name="created_at"
                   value="{{old("created_at",$product->created_at ?? \Carbon\Carbon::now())}}">
            <small id="product_created_at_help" class="form-text text-muted">
                When this should be published. If this value is greater than now ({{\Carbon\Carbon::now()}})
                then it will not (yet) appear on your blog. Should be in the <code>YYYY-MM-DD HH:MM:SS</code> format.
            </small>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="product_description">Product Description
        @if(config("blogetc.echo_html"))
            (HTML)
        @else
             (Html will be escaped)
        @endif

    </label>
    <textarea style="min-height:600px;" class="form-control" id="product_description" aria-describedby="description_help"
              name="description">{{old("description",$product->description)}}</textarea>

    <div class="alert alert-danger">
        Please note that any HTML (including any JS code) that is entered here will be
        echoed (without escaping)
    </div>
</div>

<div class="form-group">
    <label for="product_meta_desc">Meta Desc (optional)</label>
    <textarea class="form-control" id="product_meta_desc" aria-describedby="product_meta_desc_help"
              name="meta_desc">{{old("meta_desc",$product->meta_desc)}}</textarea>
    <small id="product_meta_desc_help" class="form-text text-muted">Meta description (optional)</small>
</div>
<div class="form-group">
    <label for="product_tags">Product Tags (optional)</label>
    <input type="text" class="form-control" id="product_tags" aria-describedby="product_tags_help"
                   name="product_tags" data-role="tagsinput"
                   value="{{old("product_tags",$product->product_tags())}}">
    <small id="product_tags_help" class="form-text text-muted">Product Tags (optional)</small>
</div>

<div class="bg-white pt-4 px-4 pb-0 my-2 mb-4 rounded border">
    <h4>Featured Images</h4>
    <div class="form-group mb-4 p-2">
        <div class="form-group mb-4 p-2 ">
            <label for="product_image">Image Main</label>
            <small id="product_image_help" class="form-text text-muted">
                Upload Product Image -
                <code>500x666px</code>
            </small>
            <input class="form-control" type="file" name="image" id="product_image" aria-describedby="product_image_help">
        </div>
    </div>
    <div class="form-group mb-4 p-2">
        <div class="form-group mb-4 p-2 ">
            <label for="product_image_oth">Image Oth</label>
            <small id="product_image_oth_help" class="form-text text-muted">
                Upload Product Image -
                <code>500x666px</code>
            </small>
            <input class="form-control" type="file" name="image_oth" id="product_image_oth" aria-describedby="product_image_oth_help">
        </div>
    </div>
    <div class="form-group mb-4 p-2">
        <div class="form-group mb-4 p-2 ">
            <label for="product_image_oth_1">Image Oth 1</label>
            <small id="product_image_oth_1_help" class="form-text text-muted">
                Upload Product Image -
                <code>500x666px</code>
            </small>
            <input class="form-control" type="file" name="image_oth_1" id="product_image_oth_1" aria-describedby="product_image_oth_1_help">
        </div>
    </div>
    <div class="form-group mb-4 p-2">
        <div class="form-group mb-4 p-2 ">
            <label for="product_image_oth_2">Image Oth 2</label>
            <small id="product_image_oth_2_help" class="form-text text-muted">
                Upload Product Image -
                <code>500x666px</code>
            </small>
            <input class="form-control" type="file" name="image_oth_2" id="product_image_oth_2" aria-describedby="product_image_oth_2_help">
        </div>
    </div>
    <div class="form-group mb-4 p-2">
        <div class="form-group mb-4 p-2 ">
            <label for="product_image_oth_3">Image Oth 3</label>
            <small id="product_image_oth_3_help" class="form-text text-muted">
                Upload Product Image -
                <code>500x666px</code>
            </small>
            <input class="form-control" type="file" name="image_oth_3" id="product_image_oth_3" aria-describedby="product_image_oth_3_help">
        </div>
    </div>

</div>


<div class="bg-white pt-4 px-4 pb-0 my-2 mb-4 rounded border">
    <h4>Categories:</h4>
    <div class="row">
        @forelse(\App\Models\ProductCategory::orderBy("category_name","asc")->limit(1000)->get() as $category)
            <div class="form-check col-sm-6">
                <input type="radio" value="{{ $category->category_id }}" name="category_id"
                       @if($category->category_id == $product->category_id) checked="checked"
                       @endif name="category[{{$category->category_id}}]" id="category_check{{$category->category_id}}">
                <label class="form-check-label" for="category_check{{$category->category_id}}">
                    {{$category->category_name}}
                </label>
            </div>
        @empty
            <div class="col-md-12">
                No categories
            </div>
        @endforelse

        <div class="col-md-12 my-3 text-center">

            <em>
                <a target="_blank" href="{{route("blogetc.admin.categories.create_category")}}">
                    <i class="fa fa-external-link" aria-hidden="true"></i>
                    Add new categories here
                </a>
            </em>
        </div>
    </div>
</div>
