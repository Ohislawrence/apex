@extends('admin.layouts.admin')

@section('title', 'Manage Roles')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-3xl font-['Orbitron'] font-black">Manage <span class="text-[#facc15]">Roles</span></h1>
        <p class="text-gray-400 text-sm mt-1">Create roles and assign permissions to them.</p>
    </div>
    <a href="{{ route('admin.roles.create') }}" class="px-6 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all">
        <i class="fas fa-plus mr-2"></i>New Role
    </a>
</div>

<div class="bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden">
    <table class="w-full">
        <thead>
            <tr class="border-b border-white/10">
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium">Role</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden md:table-cell">Permissions</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden lg:table-cell">Users</th>
                <th class="text-right px-6 py-4 text-sm text-gray-400 font-medium">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($roles as $role)
            <tr class="border-b border-white/5 hover:bg-white/[0.02] transition-colors">
                <td class="px-6 py-4">
                    <span class="px-3 py-1 bg-[#3b82f6]/20 border border-[#3b82f6]/30 rounded-full text-xs text-[#3b82f6] font-medium capitalize">{{ $role->name }}</span>
                </td>
                <td class="px-6 py-4 hidden md:table-cell">
                    <div class="flex flex-wrap gap-1 max-w-xl">
                        @forelse($role->permissions as $permission)
                            <span class="px-2 py-0.5 bg-white/5 border border-white/10 rounded-full text-[10px] text-gray-400">{{ $permission->name }}</span>
                        @empty
                            <span class="text-gray-600 text-xs">No permissions</span>
                        @endforelse
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-400 text-sm hidden lg:table-cell">{{ $role->users_count }}</td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('admin.roles.edit', $role) }}" class="w-8 h-8 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all" title="Edit">
                            <i class="fas fa-pen text-xs"></i>
                        </a>
                        @if($role->name !== 'admin')
                        <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" onsubmit="return confirm('Delete this role?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-red-400 hover:border-red-400/50 transition-all" title="Delete">
                                <i class="fas fa-trash text-xs"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-6 py-20 text-center">
                    <i class="fas fa-user-tag text-4xl text-gray-700 mb-3 block"></i>
                    <p class="text-gray-500">No roles found.</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
