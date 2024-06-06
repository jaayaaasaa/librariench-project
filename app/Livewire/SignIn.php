<?php

namespace App\Livewire;

use App\Enum\jenisKelamin;
use App\Models\Anggota as ModelsAnggota;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use App\Models\Anggota;
use App\Models\User;
use Filament\Pages\Auth\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;

class SignIn extends Component implements HasForms
{
    use InteractsWithForms;
 
    #[Rule('required', 'email')]    
    public $email = '';

    #[Rule('required', 'min:8')]
    public $password = '';
 
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect('/app');
        } else {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

    }
    
    public function render(): View
    {
        return view('livewire.sign-in');
    }
}
