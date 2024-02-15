@if (config('blogetc.search.search_enabled') )
    <div style="max-width:500px; margin:50px auto;" class="search-form-outer">
        <form method="get" action="{{ route('blogetc.search') }}" class="text-center">
            <h4>Tìm kiếm trong Blog:</h4>
            <input type="text" name="s" placeholder="Search..." class="form-control" value="{{ Request::get('s') }}">
            <input type="submit" value="Tìm kiếm" class="btn btn-primary m-2">
        </form>
    </div>
@endif
