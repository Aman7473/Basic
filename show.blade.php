
<table>
    <tr>
     <th>SrNo</th>
      <th>Name</th>
      <th>Class</th>
      <th>Marks</th>
      <th>Action</th>
    </tr>
    @foreach($a as $p)
    
    <tr>
        <td>
            {{$p->id}}
        
            </td>
        <td>
        {{$p->Name}}
    
        </td>
        <td>
            {{$p->Class}}
        
            </td>
            <td>
                {{$p->Marks}}
            
                </td>
                <td>
                    <button>
                   <a class="" href="/edit/{{$p->id}}">Edit</a>
                </button>
                    </td>
                    <td>
                     <form action="/delete/{{$p->id}}"method="post">
                      @csrf
                      @method('delete')
                 <button type="submit">Delete
                    
                 </button>

                     </form>
                        
                     
                         </td>

    </tr>
    @endforeach
</table>