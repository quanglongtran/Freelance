<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\AppointmentSchedule;
use App\apiUploadImgsClinicalAchievements;
use App\ClinicalAchievements;
use App\ClinicalAchievementsImages;
use App\Notify;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Users;
use App\UserType;
use App\Article;
use App\Deals;
use App\Doctor;
use App\Disease;
use App\SelectQuestion;
use App\SelectQuestionSubject;
use App\Review;
use App\Clinic;
use App\Comment;
use App\Medicine;
use App\Answer;

use App\DoctorSpeciality;
use App\ClinicSpeciality;
use App\DoctorExperience;

use App\ClinicService;
use App\Catalog;
use App\DoctorService;
use App\Service;
use App\Province;
use App\Speciality;
use App\District;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
require __DIR__ . '/../../../vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Auth;
use App\CollaboratorsUser;
use Exception;

class ApiV3Controller extends Controller
{
    private $jwt_key = 'anHAzy7CeVuL8ybwt4epOUH5NQXYocpBXQwWGalzU6xRSkD0lAUOsRChzC8fTS6ETSH2J3KpgQbnlPvdMVe7oNcuPQzTkPHfUx88';

    public function __construct()
    {

    }

    public function register_api(Request $rq)
    {
        $email = $rq->email;

        $email_info = $rq->email_info;

        $phone = $rq->mobile_phone;
        
        $name = $rq->name;

        $password = $rq->password;

        $present = ($rq->has('present')) ? $rq->present : null;

        $gender = ($rq->has('gender')) ? $rq->gender : 1;

        switch ($rq->type) {
            case 'user': $type = 1; break;
            case 'professional': $type = 2; break;
            case 'place': $type = 3; break;
            case 'drugstore': $type = 4; break;
            default: return response()->json([
                'code' => 400,
                'message' => "The field 'type' is invalid!!"
            ]);
        }

        if ( $phone != null && $name != null && $password != null) {
            if($email != null){
                $user = Users::where('email', '=', $email)->orWhere(function ($query) use ($phone) {
                    $query->where('phone', $phone)->where('phone', '!=', '0');
                })->first();
            } else {
                $user = Users::orWhere(function ($query) use ($phone) {
                            $query->where('email', $phone)->where('email', '!=', null);
                        })
                        ->orWhere(function ($query) use ($phone) {
                            $query->where('phone', $phone)->where('phone', '!=', 0);
                        })
                        ->orWhere(function ($query) use ($phone) {
                            $query->where('phone', ('0'.$phone))->where('phone', '!=', 0);
                        })
                        ->first();
            }
            // return $user;
            if ($user == null) {
                $user = new Users;
                if($email == null){
                    $user->email = $phone;
                }else{
                    $user->email = $email;
                }
                $user->email_info = $email_info;
                $user->fullname = $name;
                $user->phone = $phone;
                $user->gender = $gender;
                $user->addpress = ($rq->has('addpress')) ? $rq->addpress : 'Vi???t Nam';
                $user->password = Hash::make($password);

                if($email != null && (preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email) == 0  || strlen($email) < 6) ) {
                    return response()->json(array('success' => false, 'detail' => 'Vui l??ng nh???p ????ng email'), 200);
                }

                $user->user_type_id = $type;
                $user->paid = 1;

                
                if ($user->save()) {
                    if($email != null){
                        $user = Users::where('email', '=', $email)->orWhere(function ($query) use ($phone) {
                            $query->where('phone', $phone)->where('phone', '!=', '0');
                        })->first();
                    }else{
                        $user = Users::orWhere(function ($query) use ($phone) {
                                    $query->where('email', $phone)->where('email', '!=', null);
                                })
                                ->orWhere(function ($query) use ($phone) {
                                    $query->where('phone', $phone)->where('phone', '!=', 0);
                                })
                                ->orWhere(function ($query) use ($phone) {
                                    $query->where('phone', ('0'.$phone))->where('phone', '!=', 0);
                                })
                                ->first();
                    }
                    
                    // T???o d??? li???u partient t??i kho???n
                    $patientNew = $user->createPatient();
                    
                    $patientNew->save();

                    function checkCollaboratorExist($user, $present, $patientNew) {
                        if (!empty($present)) {
                            $user->present = $present;
                            $user->save();
                            $collaboratorsUser = CollaboratorsUser::where('code', $present)->first();
                            if ($collaboratorsUser != null) {
                                $patientNew->balance += $collaboratorsUser->promotion;
                                $patientNew->save();
                            }
                        }
                    }

                    checkCollaboratorExist($user, $present, $patientNew);
                    
                    if ($user->user_type_id == 1) {
                        $patientNew = $user->createPatient();

                        $patientNew->save();

                        checkCollaboratorExist($user, $present, $patientNew);

                    } else if ($user->user_type_id == 2) {
                        $doctor = new Doctor;
                        $doctor->doctor_name = 'BS ' . $user->fullname;
                        $doctor->doctor_url = $this->to_slug('BS ' . $user->fullname);
                        $doctor->user_id = $user->user_id;
                        $doctor->experience = '<ul><li>20 n??m b???nh vi???n Ch??? r???y</li></ul>';
                        $doctor->training = '<ul><li>?????i h???c y d?????c HCM</li></ul>';
                        $doctor->doctor_address = 'H??? Ch?? Minh';
                        $doctor->profile_image = '246170446bacsi.jpg';
                        $doctor->doctor_timework = '7h ?????n 19h';
                        $doctor->doctor_clinic = 'bv ?????i H???c Y D?????c';
                        if ($doctor->save()) {
                            $docsp = new DoctorSpeciality;
                            $docsp->doctor_id = $doctor->doctor_id;
                            $docsp->speciality_id = 1;
                            $docsp->save();
                            $docser = new DoctorService;
                            $docser->doctor_id = $doctor->doctor_id;
                            $docser->service_id = 1;
                            $docser->save();
                        }
                    } else if ($user->user_type_id == 3) {
                        $image = $user->avatar;
                        // Th???ng mod 20181107 start
                        $address = $user->address;

                        $clinic = new Clinic();
                        $clinic->user_id = $user->user_id;
                        $clinic->clinic_name = $user->fullname;
                        if ($image == null) {
                            $image = "";
                        }
                        $clinic->profile_image = $image;
                        if ($address == null) {
                            $address = "Vi???t Nam";
                        }
                        $clinic->clinic_address = $address;
                        $clinic->save();
                    } else if ($user->user_type_id == 4) {
                        $patientNew = $user->createPatient();
                        $patientNew->save();
                        checkCollaboratorExist($user, $present, $patientNew);
                    }
                    
                    $data = JWT::encode($user->toArray(), $this->jwt_key, 'HS256');
                    return response()->json([
                        'success' => true,
                        'data' => array(
                            'token' => $data,
                            'user' => $user
                        ),
                        'detail' => '????ng k?? th??nh c??ng'
                    ]);
                    // return response()->json(array('success' => true, 'detail' => '????ng k?? th??nh c??ng'), 200);
                }
                
            } else {
                return response()->json(array('success' => false, 'detail' => 'Email/Phone n??y ???? c?? ng?????i s??? d???ng, vui l??ng ki???m tra l???i.'), 200);
            }
        } else {
            return response()->json(array('success' => false, 'detail' => 'S??? ??i???n tho???i v?? m???t kh???u kh??ng ???????c ????? tr???ng'), 200);
        }
        return response()->json(array('success' => false, 'detail' => 'C?? l???i x???y ra, vui l??ng th??? l???i'), 200);
    }

    /**
     * Convert accented letters to unaccented letters, lowercase and remove spaces
     * 
     * @param string $str
     * 
     * @return string
     */
    public function to_slug($str)
    {
        $replace = [
            // Ch??? hoa sang ch??? th?????ng.
            'A'=>'a','??'=>'a','??'=>'a','B'=>'b','C'=>'c','D'=>'d','??'=>'d','E'=>'e','??'=>'e','F'=>'f','G'=>'g','H'=>'h','I'=>'i','J'=>'j','K'=>'k','L'=>'l','M'=>'m','N'=>'n','O'=>'o','??'=>'o','??'=>'o','P'=>'q','Q'=>'q','R'=>'r','S'=>'s','T'=>'t','U'=>'u','??'=>'u','V'=>'v','W'=>'w','X'=>'x','Y'=>'y','Z'=>'z',


            // Ch??? c?? d???u v?? c?? m?? sang ch??? kh??ng c?? d???u.
            '??'=>'a','??'=>'a','???'=>'a','??'=>'a','???'=>'a',
            '???'=>'a','???'=>'a','???'=>'a','???'=>'a','???'=>'a',
            '???'=>'a','???'=>'a','???'=>'a','???'=>'a','???'=>'a',

            '??'=>'e','??'=>'e','???'=>'e','???'=>'e','???'=>'e',
            '???'=>'e','???'=>'e','???'=>'e','???'=>'e','???'=>'e',

            '??'=>'i','??'=>'i','???'=>'i','??'=>'i','???'=>'i',

            '??'=>'o','??'=>'o','???'=>'o','??'=>'o','???'=>'o',
            '???'=>'o','???'=>'o','???'=>'o','???'=>'o','???'=>'o',
            '???'=>'o','???'=>'o','???'=>'o','???'=>'o','???'=>'o',

            '??'=>'u','??'=>'u','???'=>'u','??'=>'u','???'=>'u',
            '???'=>'u','???'=>'u','???'=>'u','???'=>'u','???'=>'u',

            '???'=>'y','??'=>'y','???'=>'y','???'=>'y','???'=>'y',

            // Ch??? c?? m?? sang ch??? kh??ng c?? m??.
            '??'=>'a','??'=>'a',
            '??'=>'d',
            '??'=>'e',
            '??'=>'o','??'=>'o',
            '??'=>'u'
        ];
        $str = trim(strtr($str, $replace));

        return str_replace(' ', '-', strtr($str, $replace));;
    }

    public function login_api(Request $rq)
    {
        $username = $rq->username;
        $password = $rq->password;

        $current_user = Users::where('email', $username)->orWhere(function ($query) use ($username) {
            $query->where('phone', $username)->where('phone', '!=', '0');
        })->first();
        
        if ($current_user != null) {
            if (Hash::check($password, $current_user->password)) {
                if($current_user != null){
                    $data = JWT::encode($current_user->toArray(), $this->jwt_key, 'HS256');
                    return response()->json([
                        'success' => true,
                        'data' => array(
                            'token' => $data,
                            'current_user' => $current_user
                        ),
                        'detail' => 'success'
                    ]);
                }
            }
        }

        return response()->json([
            'success' => false,
            'data' => NULL,
            'detail' => 'T??i kho???n ho???c m???t kh???u ch??a ????ng, vui l??ng th??? l???i!'
        ]);

        
    }

    private function check_token($request)
    {
        $token = $request->header('Tdoctor-Token');

        try {
            $data_token = JWT::decode($token, new Key($this->jwt_key, 'HS256'));
        } catch (Exception $e) {
            $data_token = false;
        }
        
        if($data_token){
            return $data_token;
        }else{
            return false;
        }
    }
    public function logout(Request $request){    
        $check_token = $this->check_token($request); 
        
        if ($check_token) {
            return response()->json([
                'message' => '????ng xu???t th??nh c??ng user: ' . $check_token->fullname,
                'code' => 200,  
                'data' => $check_token            
            ]);
        } else {
            return response()->json([
                'message' => 'Token is invalid!!',
                'code' => 400            
            ]);
        }
    }
    public function getQuestion(){
        $Users = Users::orderBy('user_id','DESC')->paginate(10);        
        
        return response()->json([
            'success' => true,   
            'data' => $Users            
        ]);
    }
    public function hoibacsiPost(){
        return response()->json([
            'success' => true            
        ]);
    }
}

    