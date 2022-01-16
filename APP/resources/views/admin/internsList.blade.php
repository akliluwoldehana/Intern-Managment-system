@extends('layouts.app')

@section('content')
<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone number</th>
            <th scope="col">Department</th>
            <th scope="col">University</th>
           
           
          </tr>
        </thead>
        <tbody>
                
            
@foreach($Alist as $list)   
          <tr>
            <th>{{$list->id}}</th>
            <td>{{$list->name}}</td> 
            <td>{{$list->email}}</td> 
            <td>{{$list->phone_number}}</td> 
            <td>{{$list->university}}</td>
            <td>{{$list->department}}</td>
          </tr>
@endforeach
        </tbody>
      </table>
@endsection