<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class Teachers extends Controller
{
    public function index()
    {
        return Teacher::all();
    }

    public function add()
    {
        $item = new Teacher();
        $item->name = 'teastname';
        $item->save();

        return 'Added successfully';
    }
    public function show($id){
     $item=Teacher::FindOrFail($id);
     return $item;
    }
    public function update($id){
    $iteam=Teacher::FindOrFail($id);
    $iteam->name='masho';
    $iteam->update();
    return 'updated teacher';
    }
    public function delete($id){
        $iteam=Teacher::FindOrFail($id);
        $iteam->delete();
        return 'the teacher where succesfull update';
    }
}