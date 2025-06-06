<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($routes as $route)
        @if($route->uri !== '/' && $route->uri !== 'sitemap.xml')
            <url>
                <loc>{{ url($route->uri) }}</loc>
                <lastmod>{{ $lastmod }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
        @endif
    @endforeach
</urlset> 