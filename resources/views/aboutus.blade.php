@extends('layouts.app')

@section('content')
<section>
    <h1>Student List</h1>
    <p>Search students and view their details.</p>

    @if(session('success'))
        <div style="padding: 10px; background: #eaf7ea; color: #1f5d1f; margin-bottom: 15px; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="{{ route('home') }}" style="margin-bottom: 20px;">
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search by name, email or phone" style="padding: 8px; width: 250px;">
        <button type="submit" style="padding: 8px 12px;">Search</button>
        @if(!empty($search))
            <a href="{{ route('home') }}" style="margin-left: 10px;">Clear</a>
        @endif
    </form>

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>
                        <a href="{{ route('student.edit', $student->id) }}" style="margin-right: 10px; color: blue;">Edit</a>
                        <a href="{{ route('student.delete', $student->id) }}" style="color: red;" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center;">No student found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
@endsection


