<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Uniqid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;

class MenuController extends Controller
{
    public function index(Request $request, Menu $menu)
    {
        $q = $request->input('q');

        $menu = $menu->when($q, function($query) use ($q){
            return $query->where('nama_menu', 'like', '%'.$q.'%');
        })->simplePaginate(3);

        $request = $request->all();
        return view('menu.index', ['menu' => $menu , 'request' => $request]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_menu' => 'required|min:2',
            'harga' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png',
        ]);
        $menu = Menu::create($request->all());
        
            $raname = Str::random(20);
            $filename = $raname.'.'.$request->gambar->extension();
            $request->gambar->storeAs('images', $filename, 'public');
            $menu->gambar = $filename;
            $menu->save();
        
        return redirect()
        ->route('menu')
        ->with('message', __('messages.create'));
    }

    public function edit(Menu $menu, $id)
    {
        $menu = Menu::find($id);

        return view('menu.edit', ['menu' => $menu]);
    }

    public function update(Request $request, Menu $menu, $id)
    {
        $this->validate($request,[
            'nama_menu' => 'required|min:2',
            'harga' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png',
        ]);

        $menu = Menu::find($id);
        $menu->update($request->all());

        if ($request->hasFile('gambar')) {
            $raname = uniqid();
            $filename = $raname.'.'.$request->gambar->extension();
            $request->gambar->storeAs('images', $filename, 'public');
            $menu->gambar = $filename;
            $menu->save();
        }
        
        return redirect()
            ->route('menu')
            ->with('message', __('messages.update'));
    }

    public function destroy(Menu $menu, $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()
                ->route('menu')
                ->with('message', __('messages.destroy'));
    }
}
