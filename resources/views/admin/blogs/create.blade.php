@extends('admin.layouts.admin')

@section('title', 'Create Blog Post')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <a href="{{ route('admin.blogs.index') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-[#facc15] transition-colors text-sm">
            <i class="fas fa-arrow-left"></i> Back to Blogs
        </a>
        <h1 class="text-3xl font-['Orbitron'] font-black mt-4">Create <span class="text-[#facc15]">Blog Post</span></h1>
    </div>

    <form action="{{ route('admin.blogs.store') }}" method="POST" class="bg-white/[0.03] border border-white/10 rounded-2xl p-6 lg:p-8 space-y-6">
        @csrf
        <div>
            <label class="block text-sm text-gray-400 mb-2">Title *</label>
            <input type="text" name="title" value="{{ old('title') }}" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#facc15]/50 focus:bg-white/10 transition-all" placeholder="Enter post title">
            @error('title') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm text-gray-400 mb-2">Category</label>
                <select name="category" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:outline-none focus:border-[#3b82f6]/50 transition-all">
                    <option value="" class="bg-[#0a0a14]">General</option>
                    <option value="Technology" class="bg-[#0a0a14]" {{ old('category') == 'Technology' ? 'selected' : '' }}>Technology</option>
                    <option value="Business" class="bg-[#0a0a14]" {{ old('category') == 'Business' ? 'selected' : '' }}>Business</option>
                    <option value="Development" class="bg-[#0a0a14]" {{ old('category') == 'Development' ? 'selected' : '' }}>Development</option>
                    <option value="AI/ML" class="bg-[#0a0a14]" {{ old('category') == 'AI/ML' ? 'selected' : '' }}>AI/ML</option>
                    <option value="Cloud" class="bg-[#0a0a14]" {{ old('category') == 'Cloud' ? 'selected' : '' }}>Cloud</option>
                </select>
            </div>
            <div>
                <label class="block text-sm text-gray-400 mb-2">Featured Image URL</label>
                <input type="text" name="featured_image" value="{{ old('featured_image') }}" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 transition-all" placeholder="https://example.com/image.jpg">
            </div>
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Excerpt</label>
            <textarea name="excerpt" rows="2" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all resize-none" placeholder="Brief summary...">{{ old('excerpt') }}</textarea>
            @error('excerpt') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Content *</label>
            <div id="editor-container" style="min-height:400px;"></div>
            <textarea name="content" id="editor" required style="display:none;">{{ old('content') }}</textarea>
            @error('content') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center gap-3">
            <input type="hidden" name="is_published" value="0">
            <input type="checkbox" name="is_published" value="1" id="published" {{ old('is_published') ? 'checked' : '' }} class="w-4 h-4 rounded border-white/20 bg-white/5 text-[#facc15] focus:ring-[#facc15] focus:ring-offset-0">
            <label for="published" class="text-sm text-gray-300">Publish immediately</label>
        </div>

        <div class="flex gap-3 pt-4">
            <button type="submit" class="px-8 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all">
                <i class="fas fa-save mr-2"></i>Save Post
            </button>
            <a href="{{ route('admin.blogs.index') }}" class="px-8 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider border border-white/20 text-gray-300 hover:text-white hover:border-white/40 transition-all">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.min.js"></script>
<style>
    .ql-toolbar.ql-snow {
        border-color: rgba(255,255,255,0.15) !important;
        border-radius: 0.75rem 0.75rem 0 0;
        background: rgba(255,255,255,0.05);
    }
    .ql-container.ql-snow {
        border-color: rgba(255,255,255,0.15) !important;
        border-radius: 0 0 0.75rem 0.75rem;
        background: rgba(255,255,255,0.03);
        color: #fff;
    }
    .ql-editor { min-height: 400px; font-size: 15px; line-height: 1.6; }
    .ql-editor.ql-blank::before { color: #6b7280; font-style: normal; }
    .ql-snow .ql-stroke { stroke: #9ca3af; }
    .ql-snow .ql-fill { fill: #9ca3af; }
    .ql-snow .ql-picker { color: #9ca3af; }
    .ql-snow .ql-picker-options { background: #1a1a2e; border-color: rgba(255,255,255,0.15); }
    .ql-snow .ql-picker-item { color: #d1d5db; }
    .ql-snow .ql-picker-item:hover { color: #facc15; }
    .ql-snow .ql-toolbar button:hover .ql-stroke,
    .ql-snow .ql-toolbar button.ql-active .ql-stroke { stroke: #facc15; }
    .ql-snow .ql-toolbar button:hover .ql-fill,
    .ql-snow .ql-toolbar button.ql-active .ql-fill { fill: #facc15; }
    .ql-snow .ql-picker-label:hover { color: #facc15; }
    .ql-snow .ql-picker-label.ql-active { color: #facc15; }
    .ql-snow .ql-tooltip { background: #1a1a2e; border-color: rgba(255,255,255,0.15); color: #d1d5db; }
    .ql-snow .ql-tooltip input { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.2); color: #fff; border-radius: 0.5rem; }
</style>
<script>
    const quill = new Quill('#editor-container', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['link', 'image'],
                ['clean']
            ]
        },
        placeholder: 'Write your post content...'
    });

    const editorTextarea = document.getElementById('editor');
    if (editorTextarea.value.trim()) {
        quill.clipboard.dangerouslyPasteHTML(editorTextarea.value);
    }

    const form = editorTextarea.closest('form');
    form.addEventListener('submit', function() {
        editorTextarea.value = quill.root.innerHTML;
    });
</script>
@endpush