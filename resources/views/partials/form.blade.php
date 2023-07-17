<form method="post" action="{{route('dog.create')}}">
    @csrf 
    <h3 class="font-bold border-b-gray-300 border-b pb-2 mb-3 mt-4">Add Name to list</h3>
    <label>Type Dog Name</label>
    <input type="text" name="name" id="name"
   class="border border-gray-200 p-1"> 
    <input type="submit" name="send" value="Submit" class="bg-gray-200 p-1 cursor-pointer border border-black" >
</form> 
