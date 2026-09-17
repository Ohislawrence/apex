<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;

class SeoController extends Controller
{
    public function robots(): Response
    {
        $content = "User-agent: *\n";
        $content .= "Disallow: /admin\n";
        $content .= "Disallow: /profile\n";
        $content .= "Disallow: /login\n";
        $content .= "Disallow: /register\n";
        $content .= "Disallow: /forgot-password\n";
        $content .= "Disallow: /reset-password\n";
        $content .= "\n";
        $content .= "Sitemap: " . url('sitemap.xml') . "\n";

        return response($content, 200)->header('Content-Type', 'text/plain; charset=utf-8');
    }

    public function sitemap(): Response
    {
        $urls = [];

        $staticPages = [
            'home' => ['priority' => '1.0', 'changefreq' => 'weekly'],
            'about' => ['priority' => '0.8', 'changefreq' => 'monthly'],
            'services' => ['priority' => '0.9', 'changefreq' => 'monthly'],
            'portfolio' => ['priority' => '0.8', 'changefreq' => 'monthly'],
            'blogs' => ['priority' => '0.9', 'changefreq' => 'weekly'],
            'contact' => ['priority' => '0.7', 'changefreq' => 'monthly'],
            'refund-policy' => ['priority' => '0.3', 'changefreq' => 'yearly'],
            'terms-of-service' => ['priority' => '0.3', 'changefreq' => 'yearly'],
            'privacy-policy' => ['priority' => '0.3', 'changefreq' => 'yearly'],
        ];

        foreach ($staticPages as $route => $meta) {
            $urls[] = [
                'loc' => route($route),
                'changefreq' => $meta['changefreq'],
                'priority' => $meta['priority'],
            ];
        }

        foreach (Post::published()->get() as $post) {
            $urls[] = [
                'loc' => route('blog.show', $post->slug),
                'lastmod' => $post->updated_at->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ];
        }

        $xml = view('sitemap', ['urls' => $urls])->render();

        return response($xml, 200)->header('Content-Type', 'application/xml; charset=utf-8');
    }
}
