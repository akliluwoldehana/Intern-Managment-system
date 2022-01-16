@extends('layouts.app1')
@section('content')



<br>


<h3>Currently techin has the following departments avilable for intership</h3>
        <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Department name</th>
                   
                    <th scope="col">Avialable sits</th>
                   
                  </tr>
                </thead>
                <tbody>
                        
                    
        @foreach($Alist as $list)   
                  <tr>
                    <th>{{$list->id}}</th>
                    <td>{{$list->Department_name}}</td> 
                  
                    <td>{{$list->ava_sits}}</td> 
                  </tr>
        @endforeach
                </tbody>
              </table>
<br>
<br>
<div style="border-radius: 18px;"class="container">
    <br>
    <h2>Application Form</h2>

    {!! Form::open(['action' => 'postsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
         {{ csrf_field() }}
         
    <div class="form-group">
        {{Form::label('fname','First name:',['class' =>'control-label col-sm-2'])}}
          <div class="col-sm-10">
          
        {{Form::text('first_name','',['class' => 'form-control', 'placeholder' => 'Enter your first name'])}}
          </div>
      </div>

      <div class="form-group">
        {{Form::label('lname','Last name:',['class' =>'control-label col-sm-2'])}}
          <div class="col-sm-10">
          
        {{Form::text('last_name','',['class' => 'form-control', 'placeholder' => 'Enter your Last name'])}}
          </div>
      </div>

      <div class="form-group">
        {{Form::label('email','Email address:',['class' =>'control-label col-sm-2'])}}
          <div class="col-sm-10">
          
        {{Form::text('email','',['class' => 'form-control', 'placeholder' => 'Enter your Email address'])}}
          </div>
      </div>

      <div class="form-group">
        {{Form::label('phone_number','Phone number:',['class' =>'control-label col-sm-2'])}}
          <div class="col-sm-10">
          
        {{Form::text('phone_number','',['class' => 'form-control', 'placeholder' => 'Enter your phone number'])}}
          </div>
      </div>

         

  

        
      <div class="form-group">
        
        {{Form::label('university','Select your University:',['class' =>'control-label col-sm-2'])}}

        <div class="col-sm-10">          
            <select name="university" class="form-control">

                @foreach($ulist as $ulist)

                <option value={{$ulist->name}}>{{$ulist->name}}</option>
    
                @endforeach
              </select>
            
        </div>
      </div>

      <div class="form-group">
        
          {{Form::label('Department','Select your prefered department:',['class' =>'control-label col-sm-2'])}}
  
          <div class="col-sm-10">          
            
              <select name="department" class="form-control">

                  @foreach($Alist as $list)

                  <option value={{$list->name}}>{{$list->Department_name}}</option>
      
                  @endforeach
                </select>
              
          </div>
        </div>
    
      


      <div class="form-group">
        
        {{Form::label('Application letter','Application letter:',['class' =>'control-label col-sm-2'])}}

        <div class="col-sm-10"> 

               
                {{ Form::textarea('application_latter', null, ['rows' => 7, 'cols' => 122],['class' =>'form-control'])}}         
          
        </div>
      </div>

      <div class="form-group">
            <label class="control-label col-sm-2" ><p>Attach Your credentials (your CGPA, Letter of Support):</p></label>
            <div class="col-sm-10"> 
                    
              <div class="input-group">

                
                {{ Form::file('grade_report')}}


              </div>
              
                 

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