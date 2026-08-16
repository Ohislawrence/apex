<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::published()->latest('published_at')->take(3)->get();
        return view('pages.home', compact('posts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function blogs()
    {
        $posts = Post::published()->latest('published_at')->paginate(9);
        return view('pages.blogs', compact('posts'));
    }

    public function blogShow($slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        $recentPosts = Post::published()->where('id', '!=', $post->id)->latest('published_at')->take(3)->get();
        return view('pages.blog-show', compact('post', 'recentPosts'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function refundPolicy()
    {
        return view('pages.refund-policy');
    }

    public function termsOfService()
    {
        return view('pages.terms-of-service');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function portfolio()
    {
        $items = PortfolioItem::active()->ordered()->get();
        return view('pages.portfolio', compact('items'));
    }
}
