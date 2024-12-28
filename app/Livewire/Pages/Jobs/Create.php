<?php

namespace App\Livewire\Pages\Jobs;

use App\Models\JobPost;
use App\Models\Skill;
use Livewire\Component;
use Livewire\WithFileUploads;


class Create extends Component
{
    use WithFileUploads;

    public array $skills = [];
    public $title,$description,$experience,$salary,$location,$extra_info,$company_name,$company_logo,$job_post_skills;
    protected $rules = [
        'title'=>'required',
        'description'=>'required',
        'experience'=>'required',
        'salary'=>'required',
        'location'=>'required',
        'company_name'=>'required',
        'company_logo'=>'required',
        'job_post_skills'=>'required'
    ];
    public function mount()
    {
        $this->skills = Skill::all()->toArray();
    }
    public function render()
    {
        return view('livewire.pages.jobs.create');
    }
    public function save()
    {
        $this->validate();
        $job_post = new JobPost();
        $job_post->title = $this->title;
        $job_post->description=$this->description;
        $job_post->experience=$this->experience;
        $job_post->salary=$this->salary;
        $job_post->location=$this->location;
        $job_post->extra_info=$this->extra_info??'';
        $job_post->company_name=$this->company_name;
        $job_post->company_logo=$this->company_logo->store('logos');

        $job_post->save();
        if($job_post){
            $job_post->skills()->attach($this->job_post_skills);
        }
        session()->flash('success', 'Job successfully added.');
        $this->reset(['title',
        'description',
        'experience',
        'salary',
        'location',
        'extra_info',
        'company_name',
        'company_logo',
        'job_post_skills']);
    }
}
