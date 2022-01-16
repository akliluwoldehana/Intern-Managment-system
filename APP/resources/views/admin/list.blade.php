@extends('layouts.app')

@section('content')
<h1 class="display-4">List of applicants</h1>

@if(count($Alist) > 0)


  


    

    <div style="background-color:white;border-radius: 18px;"class="container">
    
        

      
    
<br>
<p style="color:black"> inorder to approve student's request click on approve</p>
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email address</th>
                <th scope="col">phone number</th>
                <th scope="col">university</th>
                <th scope="col">Department choice</th>
                <th scope="col">Application latter</th>
                <th scope="col">status</th>
                <th scope="col">action</th>
                <th scope="col">File location</th>
              </tr>
            </thead>
            <tbody>
                    
                
    @foreach($Alist as $list)   
              <tr>
                <th>{{$list->id}}</th>
                <td>{{$list->First_name}}</td> 
                <td>{{$list->Last_name}}</td> 
                <td>{{$list->Email_address}}</td> 
                <td>{{$list->Phone_number}}</td> 
                <td>{{$list->University}}</td>
                <td>{{$list->Department_choice}}</td>  
                <td>{{$list->Application_latter}}</td> 
                <td style="color:green">{{$list->Status}}</td> 
                <td> 
                  <a href="{{ url('/mail'.'/'.$list->First_name. '/'.$list->Email_address. '/'.$list->Phone_number. '/'.$list->University. '/'.$list->Department_choice) }}">
              
                    approve
                    
                    </a></td>
                <td><a href="{{url('/uploads/'.$list->Email_address .'/'. $list->Email_address.'.png')}}" alt="Logo Image"/>
               view report 
            </a></td>
              </tr>
    @endforeach
            </tbody>
          </table>

         
    </div>
  
   
   
    
    
    
   
    
  
@else
    <p>No applicant yet</p>
 @endif
 <br>

@endsection