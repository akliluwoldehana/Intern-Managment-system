<?php

namespace Techin\Http\Controllers;

use Illuminate\Http\Request;
use Techin\ApplicantsList;
use Techin\ava_departments;
use Techin\university_list;
use Techin\interns;
use Illuminate\Support\Facades\File;
use Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      
      
      $list= ApplicantsList::all();
        return view('admin.list')->with('Alist',$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reg(){


    }
    public function create(Request $request)
    {
        //validating
        $this->validate($request,[
        'department_name' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
        'department_head' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
        'available_sit' => 'required',
        ]);

        $Depinfo=new ava_departments;
        $Depinfo->Department_name=$request->input('department_name');
        $Depinfo->Department_head_name=$request->input('department_head');
        $Depinfo->ava_sits=$request->input('available_sit');
        $Depinfo->save();
        return back()->with('success','Department information has been sumited successfully!!');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    //validating
    $this->validate($request,[
        'first_name' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
        'last_name' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
        'email' => 'required|email:users,email_address,.$user->id',
        'phone_number' => 'required',
        'university' => 'required',
        'department' => 'required',
        'application_latter' => 'required',
        'grade_report' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        
       ]);


        $isEmailUnique=true;
        $isDatainserted=false;

        $list= ApplicantsList::all();

       if(count($list) > 0) {
           
            foreach($list as $l){
                
                 if( $request->input('email')==$l->Email_address){

                     $isEmailUnique=false;
                 }

              

             }
            
         }

        if($isEmailUnique==false){

            return back()->withErrors('email is already registered!!');
           
        }else
        {
            
            //inserting into database
           $userinfo= new ApplicantsList;
         
           if($userinfo::count()>29){

            return back()->withErrors('full');

           }
           else

            $userinfo->First_name=$request->input('first_name');
            $userinfo->Last_name=$request->input('last_name');
            $userinfo->Email_address=$request->input('email');
            $userinfo->Phone_number=$request->input('phone_number');
            $userinfo->University=$request->input('university');
            $userinfo->Department_choice=$request->input('department');
            $userinfo->Application_latter=$request->input('application_latter');
            $userinfo->Status="pending";
            $userinfo->save();
            
            $isDatainserted=true;

          //uploading user files


          $image= $request->file('grade_report');
    
          if ($image) {
     
     
             $stud_name=$request->input('email');
             
             $new_name=$stud_name.'.png';
             //Move Uploaded File
             

             //creating directory for each individual applicant

             if (!File::exists(public_path()."uploads/".$stud_name)) {
                
                File::makeDirectory('uploads/'.$stud_name, 0777, true);
                //converting jpg to png
               
                $path="uploads/".$stud_name."/".$stud_name.".png"; 
                imagepng(imagecreatefromstring(file_get_contents($image)), $path);  
              
                 
               
    
             
     
            }
             
            
             else{
     
                return back()->withErrors('error in your uplaod!!');
            }

           

        
       

      return back()->with('success','application has been submited!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        }
    }
   


    public function sendmail($name,$Eaddress,$pnumber,$dep,$univ){

    $to_name =$name;
    $to_email =$Eaddress;
    $data = array('name'=>$name, 'body' => 'we have accepted your request!! please contact as for furthermore https://www.facebook.com/MInT.Ethiopia/');
    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)->subject('Acceptance');
    $message->from('akliluwoldehana@gmail.com','Acceptance');
    });


    DB::table('applicants_lists')
            ->where('Email_address', $Eaddress)
            ->update(['Status' => 'approved']);

    $interninfo=new interns; 
    $interninfo->name=$name;
    $interninfo->email=$Eaddress; 
    $interninfo->phone_number=$pnumber; 
    $interninfo->department=$dep;
    $interninfo->university=$univ;
    $interninfo->save();      
    return back()->with('success','Request approved!! email has been sent');



    }



    public function show($id)
    {
        //
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     
}

