@extends('admin.layouts.admin')

@section('title', 'Manage Permissions')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-3xl font-['Orbitron'] font-black">Manage <span class="text-[#facc15]">Permissions</span></h1>
        <p class="text-gray-400 text-sm mt-1">Create and manage granular access permissions.</p>
    </div>
    <a href="{{ route('admin.permissions.create') }}" class="px-6 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all">
        <i class="fas fa-plus mr-2"></i>New Permission
    </a>
</div>

<div class="bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden">
    <table class="w-full">
        <thead>
            <tr class="border-b border-white/10">
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium">Permission</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden md:table-cell">Guard</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden lg:table-cell">Roles</th>
                <th class="text-right px-6 py-4 text-sm text-gray-400 font-medium">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($permissions as $permission)
            <tr class="border-b border-white/5 hover:bg-white/[0.02] transition-colors">
                <td class="px-6 py-4 text-white text-sm">{{ $permission->name }}</td>
                <td class="px-6 py-4 hidden md:table-cell">
                    <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs text-gray-400">{{ $permission->guard_name }}</span>
                </td>
                <td class="px-6 py-4 text-gray-400 text-sm hidden lg:table-cell">{{ $permission->roles_count }}</td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('admin.permissions.edit', $permission) }}" class="w-8 h-8 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all" title="Edit">
                            <i class="fas fa-pen text-xs"></i>
                        </a>
                        <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" onsubmit="return confirm('Delete this permission?')">
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
                    <i class="fas fa-key text-4xl text-gray-700 mb-3 block"></i>
                    <p class="text-gray-500">No permissions found.</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
