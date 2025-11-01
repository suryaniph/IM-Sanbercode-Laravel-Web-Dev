<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('category.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
        ],
        [
            'required' => 'Inputan :attribute wajib diisi.',
            'min' => 'inputan :attribute minimal :min karakter'
        ]);

        $now = Carbon::now();

        DB::table('categories')->insert([
            'email' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => $now,
            'updated_at' => $now
        ]);

        return redirect('/category')->with('success', 'Berhasil Tambah Category!');
    }

    public function index()
    {
        $categories == DB::table('categories')->get();

        return $categories;

        return view('category.tampil', ['categories' => $categories]);
    }

    public function show($id)
    {
        $category = DB::table('categories')->find($id);
        return view('category.detail', ['category' => $categories]);
    }

    public function edit()
    {
        $category = DB::table('categories')->find($id);
        return view('category.edit', ['category' => $categories]);
    }
    
    public function update($id, Request $request)
    {
        $now = Carbon::now();

        DB::table('users')
            ->where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'description' => $request->input('description')
                ]
                );

    }
}
