<?php

namespace App\Livewire\Mentor;

use App\Models\Social;
use Livewire\Component;

class FooterCopy extends Component
{
    public function render()
    {
        return view('livewire.mentor.footer-copy', [
            'sociais' => Social::where('ativo', true)->orderBy('ordem', 'asc')->get(),
        ]);
    }
}
