<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Knowledge;
use App\Models\Language;
use App\Models\LanguageKnowledge;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class ApplyController extends Controller
{
    // client side
    public function send(Request $request){
        if($request->gender==null){
            $request->gender ='male';
        }
        if($request->martial_status==null){
            $request->martial_status='Subay';
        }
        if($request->military_service==null){
            $request->military_service='Getməyib';
        }
        if($request->driving_license==null){
            $request->driving_license='no';
        }
        if($request->is_working=='Bəli'){
            $request->is_working=true;
        }else{
            $request->is_working=false;
        }
        if($request->external=='Bəli'){
            $request->external=true;
        }else{
            $request->external=false;
        }
        $person = Person::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthplace'=>$request->birthplace,
            'gender'=>$request->gender,
            'martial_status'=>$request->martial_status,
            'military_service'=>$request->military_service,
            'driving_license'=>$request->driving_license,
            'birthday'=>$request->birthday,
            'citizenship'=>$request->citizenship,
            'nationality'=>$request->nationality,
            'phone'=>$request->phone,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'position_is_want'=>$request->position_is_want,
            'sector_is_want'=>$request->sector_is_want,
            'is_working'=>$request->is_working,
            'external_work'=>$request->external
        ]);

        if($request->school_1!=null){
            Education::create([
                'school'=>$request->school_1,
                'graduate'=>$request->graduate_1,
                'person_id'=>$person->id
            ]);
        }
        if($request->school_2!=null){
            Education::create([
                'school'=>$request->school_2,
                'graduate'=>$request->graduate_2,
                'speciality'=>$request->speciality_1,
                'person_id'=>$person->id
            ]);
        }
        if($request->school_3!=null){
            Education::create([
                'school'=>$request->school_3,
                'graduate'=>$request->graduate_3,
                'speciality'=>$request->speciality_2,
                'person_id'=>$person->id
            ]);
        }
        if($request->school_4!=null){
            Education::create([
                'school'=>$request->school_4,
                'graduate'=>$request->graduate_4,
                'speciality'=>$request->speciality_3,
                'person_id'=>$person->id
            ]);
        }

        if($request->language!=null){
            LanguageKnowledge::create([
                'name'=>$request->language,
                'writing'=>$request->writing,
                'reading'=>$request->reading,
                'speaking'=>$request->speaking,
                'person_id'=>$person->id
            ]);
        }
        if($request->language_2!=null){
            LanguageKnowledge::create([
                'name'=>$request->language_2,
                'writing'=>$request->writing_2,
                'reading'=>$request->reading_2,
                'speaking'=>$request->speaking_2,
                'person_id'=>$person->id
            ]);
        }
        if($request->language_3!=null){
            LanguageKnowledge::create([
                'name'=>$request->language_3,
                'writing'=>$request->writing_3,
                'reading'=>$request->reading_3,
                'speaking'=>$request->speaking_3,
                'person_id'=>$person->id
            ]);
        }
        if($request->language_4!=null){
            LanguageKnowledge::create([
                'name'=>$request->language_4,
                'writing'=>$request->writing_4,
                'reading'=>$request->reading_4,
                'speaking'=>$request->speaking_4,
                'person_id'=>$person->id
            ]);
        }

        if($request->comp_operator!=null || $request->comp_graphic!=null ||
            $request->comp_programming!=null ||$request->technical!=null){
            Knowledge::create([
                'comp_operator'=>$request->comp_operator,
                'comp_graphic'=>$request->comp_graphic,
                'comp_programming'=>$request->comp_programming,
                'technical'=>$request->technical,
                'person_id'=>$person->id
            ]);
        }

        if($request->position_1!=null){
            Experience::create([
                'position'=>$request->position_1,
                'company'=>$request->company_1,
                'duration'=>$request->duration_1,
                'person_id'=>$person->id
            ]);
        }
        if($request->position_2!=null){
            Experience::create([
                'position'=>$request->position_2,
                'company'=>$request->company_2,
                'duration'=>$request->duration_2,
                'person_id'=>$person->id
            ]);
        }
        if($request->position_3!=null){
            Experience::create([
                'position'=>$request->position_3,
                'company'=>$request->company_3,
                'duration'=>$request->duration_3,
                'person_id'=>$person->id
            ]);
        }

        Apply::create([
            'time'=>Date::now(),
            'person_id'=>$person->id
        ]);
        return redirect('/vakansiyalar')->with('success_message','Successfully sent');
    }

    // admin panel
    public function index(){
        $applies = Apply::all();
        return view('admin.applies.index',['applies'=>$applies]);
    }

    public function detail($id){
        $apply = Apply::find($id);
        $apply->read = true;
        $apply->save();
        return view('admin.applies.detail',['apply'=>$apply]);
    }

    public function read($id){
        $apply= Apply::find($id);
        $apply->read=!$apply->read;
        $apply->save();
        return redirect('/admin-user/apply');
    }

    public function delete($id){
        $apply= Apply::find($id);
        $person = $apply->person;
        $knowledges = $apply->person->knowledges;
        $languages = $person->languages;
        $educations = $person->educations;
        $experiences = $person->experiences;
        $apply->delete();
        $person->delete();
        foreach($knowledges as $knowledge){
            $knowledge->delete();
        }
        foreach($languages as $language){
            $language->delete();
        }
        foreach($educations as $education){
            $education->delete();
        }
        foreach($experiences as $experience){
            $experience->delete();
        }
        return redirect('/admin-user/apply');
    }

}
