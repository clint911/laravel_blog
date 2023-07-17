<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
    </head>
<body class="p-4">
    <h1 class="font-bold border-b-gray-300 border-b pb-2 mb-3">List Of dogs In The Farm</h1> 
    <ul>
@foreach ($dogs as $dog)
<li class="flex-1">
   <span class="flex-1">{{ $dog->name }}</span>
<form action="{{ route('dog.delete', $dog->id) }}"
    method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="border bg-gray-200 p-1 border-black">Delete Dog Name</button>
</form>
</li>
@endforeach
    </ul>
    @include('partials.form')
</body> 
</hmtl>
