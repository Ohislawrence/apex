@extends('admin.layouts.admin')

@section('title', 'Manage Portfolio')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-3xl font-['Orbitron'] font-black">Manage <span class="text-[#facc15]">Portfolio</span></h1>
        <p class="text-gray-400 text-sm mt-1">Add, edit, and manage your portfolio items showcased on the public portfolio page.</p>
    </div>
    <a href="{{ route('admin.portfolio.create') }}" class="px-6 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all">
        <i class="fas fa-plus mr-2"></i>New Item
    </a>
</div>

<div class="bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden">
    <table class="w-full">
        <thead>
            <tr class="border-b border-white/10">
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium">Title</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium">URL</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden md:table-cell">Status</th>
                <th class="text-right px-6 py-4 text-sm text-gray-400 font-medium">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
            <tr class="border-b border-white/5 hover:bg-white/[0.02] transition-colors">
                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center text-xs" style="background: {{ $item->color }}20;">
                            <i class="fas {{ $item->icon ?? 'fa-folder' }}" style="color: {{ $item->color }};"></i>
                        </div>
                        <span class="text-white font-medium text-sm">{{ $item->title }}</span>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <span class="text-gray-500 text-xs">{{ Str::limit($item->url, 30) ?: '—' }}</span>
                </td>
                <td class="px-6 py-4 hidden md:table-cell">
                    @if($item->is_active)
                        <span class="px-3 py-1 bg-green-500/20 border border-green-500/30 rounded-full text-xs text-green-400 font-medium">Active</span>
                    @else
                        <span class="px-3 py-1 bg-gray-500/20 border border-gray-500/30 rounded-full text-xs text-gray-400 font-medium">Hidden</span>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('admin.portfolio.edit', $item) }}" class="w-8 h-8 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all" title="Edit">
                            <i class="fas fa-pen text-xs"></i>
                        </a>
                        <form action="{{ route('admin.portfolio.destroy', $item) }}" method="POST" onsubmit="return confirm('Delete this portfolio item?')">
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
                <td colspan="4" class="px-6 py-20 text-center">
                    <i class="fas fa-folder-open text-4xl text-gray-700 mb-3 block"></i>
                    <p class="text-gray-500">No portfolio items yet. Create your first one!</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection