@extends('layouts.app')
@section('content')
<div style="border-radius: 18px;"class="container">

        <h3>Universitys currently working with Techin</h3>
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">University name</th>
                        <th scope="col">University email address</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Website</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                            
                        
            @foreach($Alist as $list)   
                      <tr>
                        <th>{{$list->id}}</th>
                        <td>{{$list->name}}</td> 
                        <td>{{$list->email}}</td> 
                        <td>{{$list->phone_number}}</td> 
                        <td>{{$list->website}}</td> 
                      </tr>
            @endforeach
                    </tbody>
                  </table>
                <br>
                <br>
<h4>Register university</h4>
{!! Form::open(['action' => 'AdminController@store','method' => 'post','enctype' => 'multipart/form-data']) !!}
             {{ csrf_field() }}
             
        <div class="form-group">
            {{Form::label('University name','University name:',['class' =>'control-label col-sm-2'])}}
              <div class="col-sm-10">
              
            {{Form::text('University_name','',['class' => 'form-control', 'placeholder' => 'Enter University name'])}}
              </div>
          </div>
    
          <div class="form-group">
            {{Form::label('email','Email address:',['class' =>'control-label col-sm-2'])}}
              <div class="col-sm-10">
              
            {{Form::text('email','',['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
              </div>
          </div>
          <div class="form-group">
                {{Form::label('phonenumber','Phone number:',['class' =>'control-label col-sm-2'])}}
                  <div class="col-sm-10">
                  
                {{Form::text('phonenumber','',['class' => 'form-control', 'placeholder' => 'Enter phone number'])}}
                  </div>
              </div>
             
              <div class="form-group">
                    {{Form::label('website','Website:',['class' =>'control-label col-sm-2'])}}
                      <div class="col-sm-10">
                      
                    {{Form::text('website','',['class' => 'form-control', 'placeholder' => 'Enter website'])}}
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