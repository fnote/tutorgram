<?php

namespace App\Http\Controllers;

use App\lecturer;
use App\Studentt;
use Illuminate\Support\Facades\Input;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use View;

class userController extends Controller {


  public function createStudent(Request $request){

        $firstname=$request['firstname'];
        $lastname=$request['lastname'];
        $email=$request['email'];
        $phone=$request['phone'];
        $student_id=$request['student_id'];

        $student=new Studentt();
        $student->firstname=$firstname;
       $student->lastname=$lastname;
        $student->email=$email;
        $student->phone=$phone;
      $student->student_id=$student_id;
      $password=bcrypt($request['password']);

      $user=new user();
      $user->userid=$student_id;
      $user->first_name=$firstname;
      $user->password=$password;
      $user->usertype='student';
      $user->save();


      $student->save();


//        Auth::login($student);
       return redirect()->route('student');
 }


    public function createLecturer(Request $request){

        $firstname=$request['firstname'];
        $lastname=$request['lastname'];
        $email=$request['email'];
        $phone=$request['phone'];
        $lecturer_id=$request['lecturer_id'];
        $courses_teaching=$request['courses_teaching'];
        $password=bcrypt($request['password']);

        $lecturer=new lecturer();


        $lecturer->firstname=$firstname;
        $lecturer->lastname=$lastname;
        $lecturer->email=$email;
        $lecturer->phone=$phone;
        $lecturer->lecturer_id=$lecturer_id;
        $lecturer->courses_teaching=$courses_teaching;


        $user=new user();
        $user->userid=$lecturer_id;
        $user->first_name=$firstname;
        $user->password=$password;
        $user->usertype='lecturer';
        $user->save();

        echo "lecturer created";
        $lecturer->save();


//        Auth::login($student);
        return redirect()->route('lecturer');
    }



    public function createOperator(Request $request){

        $firstname=$request['firstname'];
        $lastname=$request['lastname'];
        $email=$request['email'];
        $phone=$request['phone'];
        $operator_id=$request['operator_id'];
        $courses_teaching=$request['courses_teaching'];
        $password=bcrypt($request['password']);

        $operator=new operator();


        $operator->firstname=$firstname;
        $operator->lastname=$lastname;
        $operator->email=$email;
        $operator->phone=$phone;
        $operator->lecturer_id=$operator_id;
        $operator->courses_teaching=$courses_teaching;


        $user=new user();
        $user->userid=$operator_id;
        $user->first_name=$firstname;
        $user->password=$password;
        $user->usertype='operator';
        $user->save();

        echo "operator created";
        $operator->save();


//        Auth::login($student);
        return redirect()->route('operator');
    }



    public function displayLecturer()
    {
        echo "what";
        $lecturers = DB::table('lecturer')->pluck('firstname');

        foreach ($lecturers as $lecturer) {
            echo $lecturer;
        }
    }




    public function postSignUp( Request $request){

        $this->validate($request,[
            'userid'=>'required|min:2|unique:users',
            'first_name'=>'required|max:120',
            'password'=>'required|min:4'
        ]);

            $userid=$request['userid'];
        $first_name=$request['first_name'];
        $password=bcrypt($request['password']);

        $user=new user();
        $user->userid=$userid;
        $user->first_name=$first_name;
        $user->password=$password;

        $user->save();


        Auth::login($user);
        return redirect()->route('dashboard');

    }

    public function postSignIn(Request $request){
        echo "check";
        $this->validate($request,[
            'userid'=>'required|min:2',
            'password'=>'required|min:4'
        ]);

        if(Auth::attempt(['userid'=>$request['userid'],'password'=>$request['password']])){

            $user = Auth::User();

            if ($user->usertype =='admin'){
                echo "whats";
                return redirect()->route('adminDashboard');
            }
            else if ($user->usertype =='lecturer')
            {
                return redirect()->route('lecturerDashboard');
            }
            else if ($user->usertype =='student')
            {
                return redirect()->route('studentDashboard');
            }

            else if ($user->usertype =='operator')
            {
                return redirect()->route('operatorDashboard');
            }

                return redirect()->route('dashboard');
        }

            return redirect()->back()->withErrors(['Authentication Failed', 'Please reenter your credentials']);

    }


    public function getLogout(){
        Auth::logout();
        return redirect()->route('home'); 
    }


    public function student(){
        return view('student');
    }

    public function lecturer(){
        return view('lecturer');
    }


    public function operator(){
        return view('operator');
    }

    public function admindashboard()
    {

        $user = Auth::User();
   $userdata =$user->first_name ;
    return view('adminDashboard');

//        ->with('data',$userdata);
    }

    public function studentdashboard()
    {

//        $user = Auth::User();
//        $getTrips = new dataconnection();
//        $trips = $getTrips->getTrips($user->id);
        return view('studentDashboard');

    }

    public function lecturerdashboard()
    {
//
//        $user = Auth::User();
//        $getTrips = new dataconnection();
//        $buses = $getTrips->getBuses($user->id);
       return view('lecturerDashboard');

    }


    public function operatordashboard()
    {
//
//        $user = Auth::User();
//        $getTrips = new dataconnection();
//        $buses = $getTrips->getBuses($user->id);
     return view('operatorDashboard');

    }

    public function search(Request $request){

        $keyword =$request->all()['$value'];
//        $keyword =substr(json_encode($request->all()),11,-2);
        if ($request->ajax()){
            $output = "";

            $members = studentt::all();
            if($members)
            {

                foreach ($members as $member)
                {
                    $output.='<li id="'.$member->student_id.'">'.$member->firstname." ".$member->lastname.'</li>';
                }
                return Response($output);
            }

        }
    }




}