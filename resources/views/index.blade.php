<h1>This is demo page</h1>
<form action="{{route('add')}}" method="post">
    @csrf
<input type="text" name="name" placeholder="Enter Name"><br><br>
<input type="text" name="email" placeholder="Enter Email"><br><br>
<input type="text" name="address" placeholder="Enter Address"><br><br>
<input type="phone" name="phone" placeholder="Enter phone"><br><br>
<button>Submit</button>
</form>