@extends('admin.layouts.admin')

@section('title', 'Create Role')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-8">
        <a href="{{ route('admin.roles.index') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-[#facc15] transition-colors text-sm">
            <i class="fas fa-arrow-left"></i> Back to Roles
        </a>
        <h1 class="text-3xl font-['Orbitron'] font-black mt-4">Create <span class="text-[#facc15]">Role</span></h1>
    </div>

    <form action="{{ route('admin.roles.store') }}" method="POST" class="bg-white/[0.03] border border-white/10 rounded-2xl p-6 lg:p-8 space-y-6">
        @csrf
        <div>
            <label class="block text-sm text-gray-400 mb-2">Role Name *</label>
            <input type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#facc15]/50 focus:bg-white/10 transition-all" placeholder="e.g. editor">
            @error('name') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-3">Permissions</label>
            <div class="grid sm:grid-cols-2 gap-2">
                @foreach($permissions as $permission)
                <label class="flex items-center gap-3 px-4 py-3 bg-white/5 border border-white/10 rounded-xl cursor-pointer hover:border-[#facc15]/30 transition-all">
                    <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" class="w-4 h-4 rounded border-white/20 bg-white/5 text-[#facc15] focus:ring-[#facc15] focus:ring-offset-0" {{ in_array($permission->name, old('permissions', [])) ? 'checked' : '' }}>
                    <span class="text-sm text-gray-300">{{ $permission->name }}</span>
                </label>
                @endforeach
            </div>
            @error('permissions') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex gap-3 pt-4">
            <button type="submit" class="px-8 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all">
                <i class="fas fa-save mr-2"></i>Create Role
            </button>
            <a href="{{ route('admin.roles.index') }}" class="px-8 py-3 rounded-xl font-['Rajdhani'] font-bold text-sm tracking-wider border border-white/20 text-gray-300 hover:text-white hover:border-white/40 transition-all">Cancel</a>
        </div>
    </form>
</div>
@endsection
