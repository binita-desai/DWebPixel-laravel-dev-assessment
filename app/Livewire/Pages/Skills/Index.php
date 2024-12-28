<?php

namespace App\Livewire\Pages\Skills;

use App\Models\Skill;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Index extends Component
{
    public array $skills = [];
    public $name = '';

    public $addSkill = true;
    public $editSkill = false;
    public $skillId;

    protected function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('skills')->ignore($this->skillId),
            ],
        ];
    }

    public function render()
    {
        $this->skills = Skill::all()->toArray();
        return view('livewire.pages.skills.index');
    }

    public function resetForm() {
        $this->name = '';
    }
    public function save()
    {
        $this->validate();
        $skill = new Skill();
        $skill->name = $this->name;
        $skill->save();
        session()->flash('success', 'Skill successfully added.');
        $this->resetForm();
    }

    public function edit($id)
    {
        try {
            $skill = Skill::findOrFail($id);
            if( !$skill) {
                session()->flash('error','Skill not found');
            } else {
                $this->name = $skill->name;
                $this->skillId = $skill->id;
                $this->editSkill = true;
                $this->addSkill = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }

    }
    public function update()
    {
        $this->validate();
        $skill = Skill::find($this->skillId);
        $skill->name = $this->name;
        $skill->save();
        session()->flash('success', 'Skill successfully updated.');
        $this->editSkill = false;
        $this->addSkill = true;

        $this->resetForm();
    }
    public function delete($id)
    {
        try{
            Skill::find($id)->delete();
            session()->flash('success',"Skill Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
