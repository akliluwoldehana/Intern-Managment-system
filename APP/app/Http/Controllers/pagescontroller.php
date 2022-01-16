<?php

namespace Techin\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Techin\ava_departments;
use Techin\university_list;
use Techin\interns;

class pagescontroller extends Controller
{
   public function index(){

    return view('pages.index');
   }
   public function apply(){

      $list= ava_departments::all();
      $ulist=university_list::all();
    return view('pages.apply')->with('Alist',$list)->with('ulist',$ulist);
   }
   public function about(){

    return view('pages.about');
   }
   public function contact(){

    return view('pages.contact');
   }
   public function login(){

      return view('admin.login');
     }

     public function dep_list(){

      $list= ava_departments::all();
     
      return view('admin.dep_list')->with('Alist',$list);
     }
     public function unv_list(){

      $list= university_list::all();
     
      return view('admin.unv_list')->with('Alist',$list);
     }
     public function internLogin(){
      return view('interns.login');
     }

     public function interns(){
        $internList=interns::all();
      return view('admin.internsList')->with('Alist',$internList);;
     }
     
     
}
