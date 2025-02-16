<?php

namespace App\Http\Controllers;

use App\Exports\ExportCategories;
use App\Models\Categories;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use PDF;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required|string|min:2'
        ]);

        Categories::create($request->all());

        return response()->json([
            'success'    => true,
            'message'    => 'Categories Created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::find($id);
        return $category;
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
        $this->validate($request, [
            'name'   => 'required|string|min:2'
        ]);

        $category = Categories::findOrFail($id);

        $category->update($request->all());

        return response()->json([
            'success'    => true,
            'message'    => 'Categories Update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categories::destroy($id);

        return response()->json([
            'success'    => true,
            'message'    => 'Categories Delete'
        ]);
    }

    public function apiCategories()
    {
        $categories = Categories::all();

        return DataTables::of($categories)
            ->addColumn('action', function ($categories) {
                return '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Show</a> ' .
                '<a onclick="editForm(' . $categories->id . ')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                '<a onclick="deleteData(' . $categories->id . ')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function exportCategoriesAll()
    {
        $categories = Categories::all();
        $pdf = PDF::loadView('categories.CategoriesAllPDF', compact('categories'));
        return $pdf->download('categories.pdf');
    }

    public function exportExcel()
    {
        return (new ExportCategories())->download('categories.xlsx');
    }
}
