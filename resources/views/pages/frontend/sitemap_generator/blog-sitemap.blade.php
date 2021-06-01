<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($blogs as $urls)
        <url>
            <loc>{{ $urls->slug }}</loc>
            <lastmod>{{ $urls->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
    @foreach ($categories as $urls)
        <url>
            <loc>{{ url('/category/'.$urls->slug) }}</loc>
            <lastmod>{{ $urls->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
    @foreach ($tags as $urls)
        <url>
            <loc>{{ url('/tag/'.$urls->slug) }}</loc>
            <lastmod>{{ $urls->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>