<center>

    <h1 style="background-color:bisque"> Details  Show </h1>
   
    
    
    <table style="background-color:aquamarine">
    
    <tr>
    <th>Sr No</th>
    <th>Name</th>
    <th>Email</th>
    {{-- <th>Password</th> --}}
    <th>State</th>
    <th>City</th>
    <th>Image</th>
    
    </tr>
    @foreach($k as $a)
    <tr>
    <td>
    {{$a->id}}
    
    </td>
    <td>
        {{$a->name}}
        
        </td>
    <td>
        {{$a->email}}
        
        </td>
        {{-- <td>
            {{$a->password}}
            
            </td> --}}
            <td>
                {{$a->state}}
                
                </td>
                <td>
                    {{$a->city}}
                    
                    </td>
                    <td>
                        {{-- {{$a->image}} --}}
                        <img src ="{{asset('uploads/employee/'.$a->image)}}"width="100px"alt="image">
    
                        </td>
    
    <td>
    
    
        
    
       
    </td>
    
    

    
    </tr>
    

    
    
    @endforeach
    </table>
    </center>