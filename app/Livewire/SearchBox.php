<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{

    // public $search = '';

    // public function updatedSearch($query)
    // {
    //     $this->search = $query;
    // }

    // public function render()
    // {
    //     return view('livewire.search-box');
    // }

    public $query = '';
    public $search = '';

    public function search()
    {
        $this->emit('search', $this->query);
    }

    public function updatedQuery()
    {
        // يتم استدعاء الميثود تلقائياً بعد تحديث القيمة في $query
        $this->updatedSearch();
    }

    public function updatedSearch()
    {
        // يتم استدعاء الميثود تلقائياً بعد تحديث القيمة في $search
        // قم بتنفيذ الأكواد التي تحتاج إلى تحديث بعد تغيير القيمة هنا
    }

    public function manualSearch()
    {
        // استدعاء الدالة updatedSearch يدويًا
        $this->updatedSearch();
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
