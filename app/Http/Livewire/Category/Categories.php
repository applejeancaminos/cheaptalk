<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $category, $remarks, $dltCategory, $dltRemarks, $categoryID;


    public function index(){
        return view('components.category');
    }

    public function clrFlds() {
        $this->category = '';
        $this->remarks = '';
    }

    public function tableOrder() {
        $query = Category::latest('created_at');

        $categories = $query->get();
        return compact('categories');
    }

    public function render()
    {
        return view('livewire.category.categories', $this->tableOrder());
    }

    public function store() {
        $validatedData = $this->validate([
            'category'  => 'required',
            'remarks'   => 'required'
        ]);

        Category::create($validatedData);

        session()->flash('message', 'New category has been added');

        $this->clrFlds();
    }

    // public function rmvCat($id) {
    //     $category = Category::findOrFail($id);
    //     $this->categoryID   = $id;
    //     $this->dltCategory  = $category->category;
    //     $this->dltRemarks   = $category->remarks;
    // }

    // public function destroy() {
    //     $category = Category::find($this->categoryID);

    //     $hasPost = $category->posts()->exists();
    //     if ($hasPost) {
    //         session()->flash('error', 'Category cannot be deleted because it has posts associated with it');
    //         return;
    //     }

    //     $category->delete();
    //     session()->flash('deleted', 'Category removed');
    // }

}
