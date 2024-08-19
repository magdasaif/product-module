<?php

namespace Modules\Product\Http\Controllers;

use App\Traits\TestTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use TestTrait;
    public function index()
    {
        // return 'ggg';
        // return module_path('Product', 'database/migrations');///media/murabba/projects/projects/hmvc/Modules/Product/database/migrations
        // return database_path('migrations');///media/murabba/projects/projects/hmvc/database/migrations
        return module_path('Product').'/routes/web.php';
        // return $this->test();
        // dd('ffffffffffffffffff');
        return view('product::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
