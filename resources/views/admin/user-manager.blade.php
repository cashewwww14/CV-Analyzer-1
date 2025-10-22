@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Manager</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    @if($isDomainAdmin)
                        @if(auth()->id() !== $user->id)
                        <form action="{{ route('admin.user-manager.update-role', $user->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            <select name="role" class="form-control" style="display:inline-block;width:auto;">
                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                        @else
                        <em>Current user</em>
                        @endif
                    @else
                        <span class="text-muted">Restricted</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
