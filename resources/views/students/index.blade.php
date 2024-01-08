@extends('master')

@section('content')
<div class="container mx-auto border-2 border-gray rounded-xl mt-2">
    <h1 class="text-xl m-2">Students</h1>
    <a href="{{route('students.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>

    <table class="container table-auto border-2 border-gray rounded-xl">
        <thead>
            <tr>
                <th>
                    Name
                </th>

                <th>
                    Email
                </th>

                <th>
                    Phone
                </th>

                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td class="text-center">
                    {{ $student->name}}
                </td>

                <td class="text-center">
                    {{ $student->email}}
                </td>

                <td class="text-center">
                    {{ $student->phone}}
                </td>

                <td class="text-center">
                    <form action="{{ route('students.destroy',$student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?')">
                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>{!! $students->links() !!}</p>
</div>
@endsection