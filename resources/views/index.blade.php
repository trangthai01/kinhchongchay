<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ve-chung-toi')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ve-chung-toi/ho-so-cong-ty')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ve-chung-toi/gia-tri-cot-loi')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ve-chung-toi/khach-hang-than-thiet')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ve-chung-toi/cong-nghe-cat-lop')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('san-pham')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('du-an')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ky-thuat')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ky-thuat/kiem-thu')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ky-thuat/chung-chi')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ky-thuat/ung-dung/he-cua-truot')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ky-thuat/ung-dung/he-cua-day')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ky-thuat/ung-dung/he-vach-kinh')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('ky-thuat/videos')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('tin-tuc')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ url('lien-he')}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse('20240301')->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    @foreach ($posts as $post)
        <url>
            <loc>{{$post->url()}}</loc>
            <lastmod>{{ \Carbon\Carbon::parse($post->updated_at)->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>