@extends('blogetc_admin::layouts.admin_layout')
@section('content')
    <h5>Admin - Add Product</h5>

    <form method="POST" action="{{ route('blogetc.admin.products.store') }}" enctype="multipart/form-data">
        @csrf
        @include("blogetc_admin::products.form", ['product' => new App\Models\Product()])
        <input type="submit" class="btn btn-primary" value="Add new product">
    </form>
@endsection
