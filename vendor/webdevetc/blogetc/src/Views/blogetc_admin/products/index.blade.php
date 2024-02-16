@extends("blogetc_admin::layouts.admin_layout")
@section("content")
    <h5>Admin - Manage Products</h5>

    @forelse($products as $product)
    <div class="card m-4">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('san-pham/'.$product->slug) }}">{{ $product->product_name }}</a></h5>
                <p class="card-text">{{$product->html}}</p>

                {!! $product->imageTag('thumbnail', false, 'float-right') !!}

                <dl>
                    <dt>Posted at</dt>
                    <dd>{{$product->created_at}}</dd>
                    <dt>Is published?</dt>
                    <dd>
                        {!!($product->use_yn ? "Yes" : '<span class="border border-danger rounded p-1">No</span>')!!}
                    </dd>
                </dl>

                <a href="{{ url('san-pham/'.$product->slug) }}" class="card-link btn btn-outline-secondary"><i class="fa fa-file-text-o"
                                                                                          aria-hidden="true"></i>
                    View Product</a>
                <a href="{{$product->edit_url()}}" class="card-link btn btn-primary">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Edit Product</a>
            </div>
        </div>
    @empty
        <div class="alert alert-warning">No posts to show you. Why don't you add one?</div>
    @endforelse

    <div class="text-center">
        {{$products->appends( [] )->links()}}
    </div>
@endsection
