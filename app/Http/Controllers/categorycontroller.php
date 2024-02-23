<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return kearah index blade
        $category = Category::all();
        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.crate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //lakukan function store
        //lakukan valdasi
        $this->validate($request, [
            'name' => 'required'
        ]);
        //simpan data ke data bas
        if (
            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ])
        ) {
            //jka sudah kembali kehalaman category.index
            return redirect()->route('category.index')
                ->with(['succes' => 'data kesimpen']);
        } else {
            return redirect()->route('category.create')
                ->with(['error' => 'data gagal kesimpen']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('Category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('Category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $this->validate($request, ['name' => 'required']);
        //get data by id
        $category = Category::findOrFail($id);
        //update data
        $category->update([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name)
        ]);
 
        return redirect()->route('category.index')
                ->with(['succes' => 'data keupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')
        ->with(['succes' => 'data kehapus']);
    }
}
