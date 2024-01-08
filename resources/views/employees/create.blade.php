@extends('master')

@section('content')
<div class="container mx-auto m-2 p-2 border-2 border-gray rounded">
    <div class="text-red-500">{{session('error')}} </div> 
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('employees.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border @error('name')border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Name" value="{{old('name')}}">
                @error('name')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border @error('email')border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" name="email" placeholder="email" value="{{old('email')}}">
                @error('email')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Submit
                </button>
            </div>
        </form>
</div>
@endsection