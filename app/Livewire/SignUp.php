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
use Filament\Forms\Components\FileUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;

class SignUp extends Component implements HasForms
{
    use InteractsWithForms;
    public ?array $data = [];

    public $name = '';
    public $email = '';
    public $password = '';
    public $telpon = '';
    public $alamat = '';

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8'],
            'telpon' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
        ];
    }
    
    public function create()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),  
            'telpon' => $this->telpon,
            'alamat' => $this->alamat,
            'avatar' => 'user.png',
        ]);

        session()->flash('message', 'Registrasi Berhasil');

        return $this->redirect('/sign-in');
    }
    
    public function render(): View
    {
        return view('livewire.sign-up');
    }
}
