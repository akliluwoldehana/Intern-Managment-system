@extends('layouts.app')
@section('content')
<div style="border-radius: 18px;"class="container">

    <h3>Currently techin has the following departments avilable for intership</h3>
        <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Department name</th>
                    <th scope="col">Department head</th>
                    <th scope="col">Avilable sits</th>
                   
                  </tr>
                </thead>
                <tbody>
                        
                    
        @foreach($Alist as $list)   
                  <tr>
                    <th>{{$list->id}}</th>
                    <td>{{$list->Department_name}}</td> 
                    <td>{{$list->Department_head_name}}</td> 
                    <td>{{$list->ava_sits}}</td> 
                  </tr>
        @endforeach
                </tbody>
              </table>
    
      <br>
      <br>
        <h2>Register department</h2>
        <br>
    
        {!! Form::open(['action' => 'postsController@create','method' => 'get','enctype' => 'multipart/form-data']) !!}
             {{ csrf_field() }}
             
        <div class="form-group">
            {{Form::label('department_name','Department name:',['class' =>'control-label col-sm-2'])}}
              <div class="col-sm-10">
              
            {{Form::text('department_name','',['class' => 'form-control', 'placeholder' => 'Enter department name'])}}
              </div>
          </div>
    
          <div class="form-group">
            {{Form::label('department_head','department head:',['class' =>'control-label col-sm-2'])}}
              <div class="col-sm-10">
              
            {{Form::text('department_head','',['class' => 'form-control', 'placeholder' => 'who is the department head ?'])}}
              </div>
          </div>
          <div class="form-group">
                {{Form::label('available_sit','Available sits:',['class' =>'control-label col-sm-2'])}}
                  <div class="col-sm-10">
                  
                {{Form::text('available_sit','',['class' => 'form-control', 'placeholder' => 'number of available sit'])}}
                  </div>
              </div>
             
         
          
         
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
    
                {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
             
            </div>
          </div>
    
          {{ Form::close() }}
        </div>
@endsection
         
      