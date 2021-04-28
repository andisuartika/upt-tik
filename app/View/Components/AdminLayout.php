<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Fakultas;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $fakultas = Fakultas::get();
        return view('layouts.admin', compact('fakultas'));
    }
}
