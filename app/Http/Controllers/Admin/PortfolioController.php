<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {
        $items = PortfolioItem::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('admin.portfolio.index', compact('items'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|url|max:500',
            'description' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'icon' => 'nullable|string|max:100',
            'color' => 'nullable|string|max:7',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $validated['image'] = 'images/' . $imageName;
        }

        PortfolioItem::create($validated);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit(PortfolioItem $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, PortfolioItem $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|url|max:500',
            'description' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'icon' => 'nullable|string|max:100',
            'color' => 'nullable|string|max:7',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($portfolio->image && File::exists(public_path($portfolio->image))) {
                File::delete(public_path($portfolio->image));
            }
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $validated['image'] = 'images/' . $imageName;
        }

        $portfolio->update($validated);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(PortfolioItem $portfolio)
    {
        // Delete image file
        if ($portfolio->image && File::exists(public_path($portfolio->image))) {
            File::delete(public_path($portfolio->image));
        }
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item deleted successfully.');
    }
}