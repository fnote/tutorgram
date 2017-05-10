<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class CourseController extends Controller
{


    public function getOrderID($student_ID){
        //return $student_ID;

        $course_ID = DB::select('select * from takes where student_ID = ?', [$student_ID]);

        //return $course_ID;
        $my_courses=array();

        foreach ($course_ID as $myId){
            array_push($my_courses,$myId->course_id);
        }

        //return $my_courses;

        $courses_titles=array();

        foreach ($my_courses as $course_no) {

            $courses = DB::select('select course from course where  course_id = ?', [$course_no]);

            array_push($courses_titles,$courses);
        }
//        echo $courses_titles[1][0]->course;
 //return $courses_titles;


//        $seat=[1,2,3,4];

//        $selected_ticket_id=DB::select('select * from ticket where status=1 and order_ID = ?', [$my_order_id]);
//
//
//


//        $selected_courses=array();
////        $seats = array();
//
//
//
//        foreach ($courses as $my_course) {
//
//            array_push($selected_courses, $my_course->course);
//        }


//
//        foreach ($ticket_ID as $my_ticket_Id) {
////          return $my_ticket_Id->ticket_ID;
////           $tickets=array($my_ticket_Id->ticket_ID);
//            array_push($seats, $my_ticket_Id->seat_no);
//        }

//            print_r($tickets);
//            array_push($seat,$my_ticket_Id->ticket_ID);
//        }
//        return $ticket_ID;

//        app('resources\views\tickets.blade.php')->iniseat('$ticket_ID');

//        $usertype='student';
//
//
//        return view('try')->with('courses_titles', $courses_titles)->with('usertype', $usertype);

       return view('try',compact('courses_titles'));
        //$order_ID=DB::select(select*from travel_order where)
    }





    public function getLecturerID($Lecturer_ID){
        //return $student_ID;

        $course_ID = DB::select('select course_id from lecturer where Lecturer_ID = ?', [$Lecturer_ID]);

        //return $course_ID;
        $my_courses=array();

        foreach ($course_ID as $myId){
            array_push($my_courses,$myId->course_id);
        }

        //return $my_courses;

        $courses_titles=array();

        foreach ($my_courses as $course_no) {

            $courses = DB::select('select course from course where  course_id = ?', [$course_no]);

            array_push($courses_titles,$courses);
        }
//        return $courses_titles;



//        $seat=[1,2,3,4];

//        $selected_ticket_id=DB::select('select * from ticket where status=1 and order_ID = ?', [$my_order_id]);
//
//
//


//        $selected_courses=array();
//        $seats = array();



//        foreach ($courses as $my_course) {
//
//            array_push($selected_courses, $my_course->course);
//        }


//
//        foreach ($ticket_ID as $my_ticket_Id) {
////          return $my_ticket_Id->ticket_ID;
////           $tickets=array($my_ticket_Id->ticket_ID);
//            array_push($seats, $my_ticket_Id->seat_no);
//        }

//            print_r($tickets);
//            array_push($seat,$my_ticket_Id->ticket_ID);
//        }
//        return $ticket_ID;

//        app('resources\views\tickets.blade.php')->iniseat('$ticket_ID');

        $usertype='lecturer';


//        return View::make('main')->with('courses_titles', $courses_titles)->with('usertype', $usertype);
       return view('lecturerCourses',compact('courses_titles'));
        //$order_ID=DB::select(select*from travel_order where)
    }




    public function showUploadView($lecturer_ID){

        return view('uploadfile')->with('lecturer_ID',$lecturer_ID);

    }


    public function showDownloadView($student_ID){

//        return view('downloadfile')->with('lecturer_ID',$student_ID);
        return response()->file('C:\Users\sithi\Documents\Laravel_SocialMedia-master\public\uploads\physics\CS3062-L1.pdf');

    }

//    public function showUploadView(Request $request)
//    {
//        $subject = $request->input('subject');
//        $lecturer_ID = $request->input('lecturer_ID');
//        return view('uploadfile')->with('subject', $subject)->with('lecturer_ID', $lecturer_ID);
//    }


}
