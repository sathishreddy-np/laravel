@extends('master')

@section('content')
<div class="container mx-auto border-2 border-gray rounded-xl mt-2">
    <h1 class="text-xl m-2 text-green-500">{{session('success')}}</h1>

    <h1 class="text-xl m-2">Employees</h1>
    <a href="{{route('employees.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>

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
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td class="text-center">
                    {{ $employee->name}}
                </td>

                <td class="text-center">
                    {{ $employee->email}}
                </td>

                <td class="text-center">
                    <form action="{{ route('employees.destroy',$employee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this employee?')">
                        <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>{!! $employees->links() !!}</p>
</div>
@endsection