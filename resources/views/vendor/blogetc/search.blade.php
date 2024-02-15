@extends("layouts.default",['title' => 'Kết quả tìm kiếm trong Blog Đá Phong Thủy Hoa Cương'] )
@section("content")
    <div class="vnt_product">
        <div class="wrapper">
            <header class="page_heading">
                <h1>Kết quả tìm kiếm: {{ $query }}</h1>
                <hr class="dashed">
            </header>
            <div class="vhpadding-lg-bottom-20 vhpadding-sm-bottom-20">
                <div class="blog_listing_sec">
                    <div class="row">
                        <div class="appendText">
                            @forelse($search_results as $result)
                                @include('blogetc::partials.index_loop', ['post' => $result->indexable])
                            @empty
                                <div class="alert alert-danger">Xin lỗi, không tìm thấy kết quả nào!</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            @include('blogetc::sitewide.search_form')
        </div>
    </div>
@endsection

