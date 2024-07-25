<?php

namespace App\Http\Controllers;

use App\Models\studentModel;
use Illuminate\Http\Request;
use Error;
use Exception;

class StudentController extends Controller
{
    public function getStudentList(Request $request)
    {
        try {
            $studentList = studentModel::get();

            return $this->success($studentList, "Student Listed Successfully!..", 200);
        } catch (Error $error){
            return $this->error('', $error->getMessage(), 400);
        }catch (Exception $exception){
            return $this->error('', $exception->getMessage(), 400);
        }
    }
}
