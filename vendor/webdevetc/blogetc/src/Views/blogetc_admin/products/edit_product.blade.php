@php
    /** @var \App\Models\Product $product */
@endphp
@extends('blogetc_admin::layouts.admin_layout')
@section('content')
    <h5>Admin - Editing Product
        <a target="_blank" href="{{ url('san-pham/'.$product->slug) }}" class="float-right btn btn-primary">
            View Product
        </a>
    </h5>

    <form method="post" action="{{ route('blogetc.admin.products.update', $product->product_id) }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('blogetc_admin::products.form', ['product' => $product])
        <input type="submit" class="btn btn-primary" value="Save Changes">
    </form>
@endsection
