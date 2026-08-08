@extends('admin.layouts.admin')

@section('title', 'Manage Blogs')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-3xl font-['Orbitron'] font-black">Manage <span class="text-[#facc15]">Blogs</span></h1>
        <p class="text-gray-400 text-sm mt-1">Create, edit, and manage your blog posts.</p>
    </div>
    <a href="{{ route('admin.blogs.create') }}" class="px-6 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all">
        <i class="fas fa-plus mr-2"></i>New Post
    </a>
</div>

<div class="bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden">
    <table class="w-full">
        <thead>
            <tr class="border-b border-white/10">
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium">Title</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium">Category</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden md:table-cell">Status</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden lg:table-cell">Date</th>
                <th class="text-right px-6 py-4 text-sm text-gray-400 font-medium">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr class="border-b border-white/5 hover:bg-white/[0.02] transition-colors">
                <td class="px-6 py-4">
                    <div>
                        <p class="text-white font-medium text-sm">{{ Str::limit($post->title, 50) }}</p>
                        <p class="text-gray-600 text-xs mt-0.5">{{ $post->slug }}</p>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 bg-[#3b82f6]/20 border border-[#3b82f6]/30 rounded-full text-xs text-[#3b82f6] font-medium">{{ $post->category ?? 'General' }}</span>
                </td>
                <td class="px-6 py-4 hidden md:table-cell">
                    @if($post->is_published)
                        <span class="px-3 py-1 bg-green-500/20 border border-green-500/30 rounded-full text-xs text-green-400 font-medium">Published</span>
                    @else
                        <span class="px-3 py-1 bg-gray-500/20 border border-gray-500/30 rounded-full text-xs text-gray-400 font-medium">Draft</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-gray-400 text-sm hidden lg:table-cell">{{ $post->created_at->format('M d, Y') }}</td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2">
                        @if($post->is_published)
                            <a href="{{ route('blog.show', $post->slug) }}" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#06b6d4] hover:border-[#06b6d4]/50 transition-all" title="View">
                                <i class="fas fa-external-link-alt text-xs"></i>
                            </a>
                        @endif
                        <a href="{{ route('admin.blogs.edit', $post) }}" class="w-8 h-8 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all" title="Edit">
                            <i class="fas fa-pen text-xs"></i>
                        </a>
                        <form action="{{ route('admin.blogs.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-red-400 hover:border-red-400/50 transition-all" title="Delete">
                                <i class="fas fa-trash text-xs"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-20 text-center">
                    <i class="fas fa-pen-to-square text-4xl text-gray-700 mb-3 block"></i>
                    <p class="text-gray-500">No blog posts yet. Create your first post!</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6 flex justify-center">
    {{ $posts->links() }}
</div>
@endsection