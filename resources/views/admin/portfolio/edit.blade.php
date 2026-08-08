@extends('admin.layouts.admin')

@section('title', 'Edit Portfolio Item')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-8">
        <a href="{{ route('admin.portfolio.index') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-[#facc15] transition-colors text-sm">
            <i class="fas fa-arrow-left"></i> Back to Portfolio
        </a>
        <h1 class="text-3xl font-['Orbitron'] font-black mt-4">Edit <span class="text-[#facc15]">Portfolio Item</span></h1>
    </div>

    <form action="{{ route('admin.portfolio.update', $portfolio) }}" method="POST" enctype="multipart/form-data" class="bg-white/[0.03] border border-white/10 rounded-2xl p-6 lg:p-8 space-y-6">
        @csrf @method('PUT')
        <div>
            <label class="block text-sm text-gray-400 mb-2">Title *</label>
            <input type="text" name="title" value="{{ old('title', $portfolio->title) }}" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#facc15]/50 focus:bg-white/10 transition-all" placeholder="e.g., ClickIntel">
            @error('title') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Image</label>
            @if($portfolio->image)
            <div class="mb-3">
                <img src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->title }}" class="h-32 rounded-xl object-cover border border-white/10">
            </div>
            @endif
            <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-white/20 rounded-xl cursor-pointer hover:border-[#facc15]/50 hover:bg-white/5 transition-all">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <i class="fas fa-cloud-upload-alt text-2xl text-gray-500 mb-2"></i>
                    <p class="text-sm text-gray-400">Click to upload new image</p>
                    <p class="text-xs text-gray-600 mt-1">Leave empty to keep current image</p>
                </div>
                <input type="file" name="image" accept="image/*" class="hidden">
            </label>
            @error('image') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm text-gray-400 mb-2">URL</label>
                <input type="url" name="url" value="{{ old('url', $portfolio->url) }}" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all" placeholder="https://example.com">
                @error('url') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm text-gray-400 mb-2">Icon (Font Awesome)</label>
                <input type="text" name="icon" value="{{ old('icon', $portfolio->icon) }}" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all" placeholder="fa-chart-line">
            </div>
        </div>

        <div class="grid sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm text-gray-400 mb-2">Color</label>
                <input type="color" name="color" value="{{ old('color', $portfolio->color) }}" class="w-full h-12 bg-white/5 border border-white/10 rounded-xl cursor-pointer focus:outline-none focus:border-[#3b82f6]/50 transition-all">
            </div>
            <div>
                <label class="block text-sm text-gray-400 mb-2">Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $portfolio->sort_order) }}" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all">
            </div>
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Description</label>
            <textarea name="description" rows="3" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all resize-none" placeholder="Brief description...">{{ old('description', $portfolio->description) }}</textarea>
        </div>

        <div class="flex items-center gap-3">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" value="1" id="active" {{ old('is_active', $portfolio->is_active) ? 'checked' : '' }} class="w-4 h-4 rounded border-white/20 bg-white/5 text-[#facc15] focus:ring-[#facc15] focus:ring-offset-0">
            <label for="active" class="text-sm text-gray-300">Active (visible on portfolio page)</label>
        </div>

        <div class="flex gap-3 pt-4">
            <button type="submit" class="px-8 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all">
                <i class="fas fa-save mr-2"></i>Update Item
            </button>
            <a href="{{ route('admin.portfolio.index') }}" class="px-8 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider border border-white/20 text-gray-300 hover:text-white hover:border-white/40 transition-all">Cancel</a>
        </div>
    </form>
</div>
@endsection