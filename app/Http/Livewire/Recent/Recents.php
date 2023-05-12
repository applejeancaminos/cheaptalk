<?php

namespace App\Http\Livewire\Recent;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Recents extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $postCategory = 'all';
    public $categories, $postSearch;

    public function index(){
        return view ('components.recent');
    }


    public function sortCategory() {
        $query = Post::latest('created_at')->search($this->postSearch);

        if ($this->postCategory != 'all') {
            $query->where('category_id', $this->postCategory);
        }


        $posts = $query->paginate(3);
        return compact('posts');

    }



    public function mount() {
        $this->categories = Category::get();
    }

    public function render()
    {
        return view('livewire.recent.recents', $this->sortCategory());
    }
}
