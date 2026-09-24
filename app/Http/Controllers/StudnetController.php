<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudnetController extends Controller
{
    public function addData()
    {
        // DB::table('student')->insert([
        //     'name' => 'masho',
        //     'email' => 'mashofayu@gmail.com',
        //     'phone'=> '0916171819',
        //     'date_of_birth' => '2000-06-08',
        //     'gender' => 'male',
        // ]);

        $item = new student();
        $item->name ='tare';
        $item->email ='tare@gmail.com';
        $item->phone='0978675645';
        $item->date_of_birth ='1992-6-7';
        $item->gender='male';
        $item->save();
        

        return 'the data was regesterd sucessfull';
    }

     public function getData(){
        // $items=DB::table('student')
       
        // // ->get();

        // $item= student::all();
        $item =student::withTrashed()->get();
        // $item =student::withTrashed()->find(3)->restore();

        return $item;
     }
     public function updateData(){
        // DB::table('student')->where('id', 150)->update([
        //     'name' => 'Feyisa',
        //     'email'=>'feyisa@gmail.com'
        // ]);

        $item=student::find(4);
        $item->name='Addisu';
        $item->gender='male';
        $item->update();
        return 'updated sucessfull';
     }
     public function deleteData(){
        // DB::table('student')->where('id','>', 6)->delete();
        $item=student::findOrFail(3)->delete();
        
        return 'data was deleted sucessful';
     }
     public function whereCondtion(){
        $item=student::whereNotIn('id',[4,3])->get();
        return $item;
     }
     public function ScopeQuery(){
        $item=student::male()->get();
        return $item;
     }
     public function SecondQuery(){
        $item=student::where('gender','female')->orWhere('phone','359279635')->get();
        return $item;
     }
}