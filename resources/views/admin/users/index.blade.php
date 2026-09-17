@extends('admin.layouts.admin')

@section('title', 'Manage Users')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-3xl font-['Orbitron'] font-black">Manage <span class="text-[#facc15]">Users</span></h1>
        <p class="text-gray-400 text-sm mt-1">Create, edit, and manage user accounts and their roles.</p>
    </div>
    <a href="{{ route('admin.users.create') }}" class="px-6 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all">
        <i class="fas fa-user-plus mr-2"></i>New User
    </a>
</div>

<form action="{{ route('admin.users.index') }}" method="GET" class="mb-6 flex gap-3">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or email..." class="w-full max-w-sm px-4 py-2.5 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#facc15]/50 focus:bg-white/10 transition-all">
    <button type="submit" class="px-5 py-2.5 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider border border-white/20 text-gray-300 hover:text-white hover:border-white/40 transition-all">
        <i class="fas fa-search mr-2"></i>Search
    </button>
</form>

<div class="bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden">
    <table class="w-full">
        <thead>
            <tr class="border-b border-white/10">
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium">Name</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium">Email</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden md:table-cell">Roles</th>
                <th class="text-left px-6 py-4 text-sm text-gray-400 font-medium hidden lg:table-cell">Joined</th>
                <th class="text-right px-6 py-4 text-sm text-gray-400 font-medium">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr class="border-b border-white/5 hover:bg-white/[0.02] transition-colors">
                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-[#3b82f6] to-[#facc15] flex items-center justify-center text-black font-bold text-sm">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>
                        <div>
                            <p class="text-white font-medium text-sm">{{ $user->name }}</p>
                            @if($user->id === auth()->id())
                                <span class="text-[10px] text-[#facc15]">(you)</span>
                            @endif
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-400 text-sm">{{ $user->email }}</td>
                <td class="px-6 py-4 hidden md:table-cell">
                    <div class="flex flex-wrap gap-1">
                        @forelse($user->roles as $role)
                            <span class="px-2 py-0.5 bg-[#3b82f6]/20 border border-[#3b82f6]/30 rounded-full text-xs text-[#3b82f6] font-medium">{{ $role->name }}</span>
                        @empty
                            <span class="text-gray-600 text-xs">No role</span>
                        @endforelse
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-400 text-sm hidden lg:table-cell">{{ $user->created_at->format('M d, Y') }}</td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('admin.users.edit', $user) }}" class="w-8 h-8 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all" title="Edit">
                            <i class="fas fa-pen text-xs"></i>
                        </a>
                        @if($user->id !== auth()->id())
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Delete this user?')">
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
                <td colspan="5" class="px-6 py-20 text-center">
                    <i class="fas fa-users text-4xl text-gray-700 mb-3 block"></i>
                    <p class="text-gray-500">No users found.</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6 flex justify-center">
    {{ $users->links() }}
</div>
@endsection
