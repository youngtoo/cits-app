<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserProfile;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;

class CreateProfile extends Component implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;
    // use InteractsWithForms;

    public ?array $data = [];

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('profile_name')
                    ->required(),
                // ...
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        UserProfile::create($this->form->getState());
    }

    public function saveProfile() {
        return Action::make('Visit Home');
    }

    public function mount(): void
    {
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.create-profile');
    }
}
