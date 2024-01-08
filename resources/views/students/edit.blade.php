@extends('master')

@section('content')
<div class="container mx-auto m-2 p-2 border-2 border-gray rounded">
    <div class="text-red-500">{{session('error')}}</div>
    <h1>Edit</h1>


    <form action="{{route('students.update', $student->id)}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @method('PUT') 
        
    @csrf   

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" name="name" id="name" type="text" placeholder="name" value="{{$student->name}}">
            @error('name')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" id="email" type="text" placeholder="email" value="{{$student->email}}">
            @error('email')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                Phone
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('phone') border-red-500 @enderror" name="phone" id="phone" type="text" placeholder="phone" value="{{$student->phone}}">
            @error('phone')
            <div class="text-red-500">{{ $message }}</div>
            @enderror

        </div>

        <button type="submit" class="bg-blue-500 block m-2 p-2 text-white hover:bg-blue-700 rounded">Submit</button>

    </form>


</div>
@endsection