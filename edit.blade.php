<form action="/update/{{$h->id}}"method="post">

    @csrf
    
    <label for="name">Name:</label><br>
    <input type="text" id="Name" name="Name" value="{{$h->Name}}"><br>
    <label for="Class">Class</label><br>
    <input type="text" id="Class" name="Class" value="{{$h->Class}}"><br><br>
    <label for="marks">Marks</label><br>
    <input type="number" id="Marks" name="Marks" value="{{$h->Marks}}"><br><br>
    <input type="submit" value="Submit">
  </form> 