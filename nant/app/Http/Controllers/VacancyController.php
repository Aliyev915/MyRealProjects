<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Region;
use App\Models\Vacancy;
use App\Models\VacancyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class VacancyController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        $vacancies = Vacancy::all();
        return view('vacancies',['languages'=>$languages,'vacancies'=>$vacancies]);
    }

    public function all()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.index', ['vacancies' => $vacancies]);
    }

    public function create()
    {
        $regions = Region::all();
        return view('admin.vacancies.create', ['regions' => $regions]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'position_az' => 'required|max:255',
                'position_ru' => 'required|max:255',
                'position_en' => 'required|max:255',
                'company' => 'required|max:100',
                'education_az' => 'required|max:150',
                'education_ru' => 'required|max:150',
                'education_en' => 'required|max:150',
                'responsibility_az' => 'required|max:1000',
                'responsibility_ru' => 'required|max:1000',
                'responsibility_en' => 'required|max:1000',
                'requirement_az' => 'required|max:1000',
                'requirement_ru' => 'required|max:1000',
                'requirement_en' => 'required|max:1000',
                'guarantee_az' => 'required|max:500',
                'guarantee_ru' => 'required|max:500',
                'guarantee_en' => 'required|max:500',
                'graphic_az' => 'required|max:100',
                'graphic_ru' => 'required|max:100',
                'graphic_en' => 'required|max:100'
            ],
            $this->messages()
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $region = Region::all()->firstWhere('name_'.App::getLocale(),$request->region);
        $salary=0;
        if($request->salary==null){
            $salary=0;
        }else{
            $salary=$request->salary;
        }
        if($request->experience==null){
            $request->experience = 0;
        }
        $detail = VacancyDetail::create([
            'experience'=>$request->experience,
            'salary'=>$salary,
            'education_az'=>$request->education_az,
            'education_ru'=>$request->education_ru,
            'education_en'=>$request->education_en,
            'responsibility_az'=>$request->responsibility_az,
            'responsibility_ru'=>$request->responsibility_ru,
            'responsibility_en'=>$request->responsibility_en,
            'requirement_az'=>$request->requirement_az,
            'requirement_ru'=>$request->requirement_ru,
            'requirement_en'=>$request->requirement_en,
            'guarantee_az'=>$request->guarantee_az,
            'guarantee_ru'=>$request->guarantee_ru,
            'guarantee_en'=>$request->guarantee_en,
            'graphic_az'=>$request->graphic_az,
            'graphic_ru'=>$request->graphic_ru,
            'graphic_en'=>$request->graphic_en,
        ]);
        Vacancy::create([
            'position_az'=>$request->position_az,
            'position_ru'=>$request->position_ru,
            'position_en'=>$request->position_en,
            'company'=>$request->company,
            'time'=>Date::now(),
            'vacancy_detail_id'=>$detail->id,
            'region_id'=>$region->id
        ]);
        return redirect('/admin-user/vacancy')->with('success_message','Item successfully added!');
    }

    public function edit($id){
        $vacancy=Vacancy::find($id);
        $detail=VacancyDetail::all()->firstWhere('id',$vacancy->vacancy_detail_id);
        $regions = Region::all();
        return view('admin.vacancies.edit',['vacancy'=>$vacancy,'regions'=>$regions,'detail'=>$detail]);
    }

    public function update($id,Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'position_az' => 'required|max:255',
                'position_ru' => 'required|max:255',
                'position_en' => 'required|max:255',
                'company' => 'required|max:100',
                'education_az' => 'required|max:150',
                'education_ru' => 'required|max:150',
                'education_en' => 'required|max:150',
                'responsibility_az' => 'required|max:1000',
                'responsibility_ru' => 'required|max:1000',
                'responsibility_en' => 'required|max:1000',
                'requirement_az' => 'required|max:1000',
                'requirement_ru' => 'required|max:1000',
                'requirement_en' => 'required|max:1000',
                'guarantee_az' => 'required|max:500',
                'guarantee_ru' => 'required|max:500',
                'guarantee_en' => 'required|max:500',
                'graphic_az' => 'required|max:100',
                'graphic_ru' => 'required|max:100',
                'graphic_en' => 'required|max:100'
            ],
            $this->messages()
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $region = Region::all()->firstWhere('name_'.App::getLocale(),$request->region);
        $vacancy=Vacancy::find($id);
        $detail=VacancyDetail::all()->firstWhere('id',$vacancy->vacancy_detail_id);
        $salary=0;
        if($request->salary==null){
            $salary=0;
        }else{
            $salary=$request->salary;
        }
        $vacancy->update([
            'position_az'=>$request->position_az,
            'position_ru'=>$request->position_ru,
            'position_en'=>$request->position_en,
            'company'=>$request->company,
            'region_id'=>$region->id
        ]);
        $detail->update([
            'experience'=>$request->experience,
            'salary'=>$salary,
            'education_az'=>$request->education_az,
            'education_ru'=>$request->education_ru,
            'education_en'=>$request->education_en,
            'responsibility_az'=>$request->responsibility_az,
            'responsibility_ru'=>$request->responsibility_ru,
            'responsibility_en'=>$request->responsibility_en,
            'requirement_az'=>$request->requirement_az,
            'requirement_ru'=>$request->requirement_ru,
            'requirement_en'=>$request->requirement_en,
            'guarantee_az'=>$request->guarantee_az,
            'guarantee_ru'=>$request->guarantee_ru,
            'guarantee_en'=>$request->guarantee_en,
            'graphic_az'=>$request->graphic_az,
            'graphic_ru'=>$request->graphic_ru,
            'graphic_en'=>$request->graphic_en
        ]);
        return redirect('admin-user/vacancy')->with('success_message','Successfully updated');
    }

    public function delete($id){
        $vacancy=Vacancy::find($id);
        $detail=VacancyDetail::all()->firstWhere('id',$vacancy->vacancy_detail_id);
        $vacancy->delete();
        $detail->delete();
        return redirect('/admin-user/vacancy')->with('success_message','Item successfully deleted!');
    }


    // helpers

    public function messages()
    {
        if (App::getLocale() == 'en') {
            return [
                'position_az.required' => 'Position is required',
                'position_ru.required' => 'Position is required',
                'position_en.required' => 'Position is required',
                'company.required' => 'Company is required',
                'education_az.required' => 'Education is required',
                'education_ru.required' => 'Education is required',
                'education_en.required' => 'Education is required',
                'responsibility_az.required' => 'Responsibility is required',
                'responsibility_ru.required' => 'Responsibility is required',
                'responsibility_en.required' => 'Responsibility is required',
                'requirement_az.required' => 'Requirements is required',
                'requirement_ru.required' => 'Requirements is required',
                'requirement_en.required' => 'Requirements is required',
                'guarantee_az.required' => 'Guarantees is required',
                'guarantee_ru.required' => 'Guarantees is required',
                'guarantee_en.required' => 'Guarantees is required',
                'graphic_az.required' => 'Work Graphic is required',
                'graphic_ru.required' => 'Work Graphic is required',
                'graphic_en.required' => 'Work Graphic is required',
                'position_az.max' => 'Position can\'t be more than 255 characters',
                'position_en.max' => 'Position can\'t be more than 255 characters',
                'position_ru.max' => 'Position can\'t be more than 255 characters',
                'company.max' => 'Company can\'t be more than 100 characters',
                'education_az.max' => 'Education can\'t be more than 150 characters',
                'education_ru.max' => 'Education can\'t be more than 150 characters',
                'education_en.max' => 'Education can\'t be more than 150 characters',
                'responsibility_az.max' => 'Responsibility can\'t be more than 1000 characters',
                'responsibility_ru.max' => 'Responsibility can\'t be more than 1000 characters',
                'responsibility_en.max' => 'Responsibility can\'t be more than 1000 characters',
                'requirement_az.max' => 'Requirements can\'t be more than 1000 characters',
                'requirement_ru.max' => 'Requirements can\'t be more than 1000 characters',
                'requirement_en.max' => 'Requirements can\'t be more than 1000 characters',
                'guarantee_az.max' => 'Guarantees can\'t be more than 500 characters',
                'guarantee_ru.max' => 'Guarantees can\'t be more than 500 characters',
                'guarantee_en.max' => 'Guarantees can\'t be more than 500 characters',
                'graphic_az.max' => 'Work Graphic can\'t be more than 150 characters',
                'graphic_ru.max' => 'Work Graphic can\'t be more than 150 characters',
                'graphic_en.max' => 'Work Graphic can\'t be more than 150 characters',
            ];
        } else if(App::getLocale() == 'az') {
            return [
                'position_az.required' => 'Position teleb olunur',
                'position_ru.required' => 'Position teleb olunur',
                'position_en.required' => 'Position teleb olunur',
                'company.required' => 'Company teleb olunur',
                'education_az.required' => 'Education teleb olunur',
                'education_ru.required' => 'Education teleb olunur',
                'education_en.required' => 'Education teleb olunur',
                'responsibility_az.required' => 'Responsibility teleb olunur',
                'responsibility_ru.required' => 'Responsibility teleb olunur',
                'responsibility_en.required' => 'Responsibility teleb olunur',
                'requirement_az.required' => 'Requirements teleb olunur',
                'requirement_ru.required' => 'Requirements teleb olunur',
                'requirement_en.required' => 'Requirements teleb olunur',
                'guarantee_az.required' => 'Guarantees teleb olunur',
                'guarantee_ru.required' => 'Guarantees teleb olunur',
                'guarantee_en.required' => 'Guarantees teleb olunur',
                'graphic_az.required' => 'Work Graphic teleb olunur',
                'graphic_ru.required' => 'Work Graphic teleb olunur',
                'graphic_en.required' => 'Work Graphic teleb olunur',
                'position_az.max' => 'Position 255 xarakterden cox ola bilmez',
                'position_ru.max' => 'Position 255 xarakterden cox ola bilmez',
                'position_en.max' => 'Position 255 xarakterden cox ola bilmez',
                'company.max' => 'Company 100 xarakterden cox ola bilmez',
                'education_az.max' => 'Education 150 xarakterden cox ola bilmez',
                'education_ru.max' => 'Education 150 xarakterden cox ola bilmez',
                'education_en.max' => 'Education 150 xarakterden cox ola bilmez',
                'responsibility_az.max' => 'Responsibility 1000 xarakterden cox ola bilmez',
                'responsibility_ru.max' => 'Responsibility 1000 xarakterden cox ola bilmez',
                'responsibility_en.max' => 'Responsibility 1000 xarakterden cox ola bilmez',
                'requirement_az.max' => 'Requirements 1000 xarakterden cox ola bilmez',
                'requirement_ru.max' => 'Requirements 1000 xarakterden cox ola bilmez',
                'requirement_en.max' => 'Requirements 1000 xarakterden cox ola bilmez',
                'guarantee_az.max' => 'Guarantees 500 xarakterden cox ola bilmez',
                'guarantee_ru.max' => 'Guarantees 500 xarakterden cox ola bilmez',
                'guarantee_en.max' => 'Guarantees 500 xarakterden cox ola bilmez',
                'graphic_az.max' => 'Work Graphic 150 xarakterden cox ola bilmez',
                'graphic_ru.max' => 'Work Graphic 150 xarakterden cox ola bilmez',
                'graphic_en.max' => 'Work Graphic 150 xarakterden cox ola bilmez',
            ];
        }else{
            return [
                'position_az.required' => 'Позиция желаемая',
                'position_ru.required' => 'Позиция желаемая',
                'position_en.required' => 'Позиция желаемая',
                'company.required' => 'Компания жаждет',
                'education_az.required' => 'Образование необходимо',
                'education_ru.required' => 'Образование необходимо',
                'education_en.required' => 'Образование необходимо',
                'responsibility_az.required' => 'Ответственность желательна',
                'responsibility_ru.required' => 'Ответственность желательна',
                'responsibility_en.required' => 'Ответственность желательна',
                'requirement_az.required' => 'Требования обязательны',
                'requirement_ru.required' => 'Требования обязательны',
                'requirement_en.required' => 'Требования обязательны',
                'guarantee_az.required' => 'Требуются гарантии',
                'guarantee_ru.required' => 'Требуются гарантии',
                'guarantee_en.required' => 'Требуются гарантии',
                'graphic_az.required' => 'График работы обязателен',
                'graphic_ru.required' => 'График работы обязателен',
                'graphic_en.required' => 'График работы обязателен',
                'position_az.max' => 'Позиция не может быть больше 255 символа',
                'position_ru.max' => 'Позиция не может быть больше 255 символа',
                'position_en.max' => 'Позиция не может быть больше 255 символа',
                'company.max' => 'Компания не может быть более 100 символов',
                'education_az.max' => 'Образование не может быть больше 150 символов.',
                'education_ru.max' => 'Образование не может быть больше 150 символов.',
                'education_en.max' => 'Образование не может быть больше 150 символов.',
                'responsibility_az.max' => 'Ответственность не может превышать 1000 символов.',
                'responsibility_ru.max' => 'Ответственность не может превышать 1000 символов.',
                'responsibility_en.max' => 'Ответственность не может превышать 1000 символов.',
                'requirement_az.max' => 'Требования не могут превышать 1000 символов.',
                'requirement_ru.max' => 'Требования не могут превышать 1000 символов.',
                'requirement_en.max' => 'Требования не могут превышать 1000 символов.',
                'guarantee_az.max' => 'Гарантии не могут превышать 500 символов.',
                'guarantee_ru.max' => 'Гарантии не могут превышать 500 символов.',
                'guarantee_en.max' => 'Гарантии не могут превышать 500 символов.',
                'graphic_az.max' => 'Рабочая графика не может содержать более 150 символов.',
                'graphic_ru.max' => 'Рабочая графика не может содержать более 150 символов.',
                'graphic_en.max' => 'Рабочая графика не может содержать более 150 символов.',
            ];
        }
    }
}
