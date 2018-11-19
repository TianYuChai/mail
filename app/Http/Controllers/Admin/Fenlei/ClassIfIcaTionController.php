<?php
namespace App\Http\Controllers\Admin\Fenlei;

use App\Http\Models\Admin\Fenlei\JnShopTypeModel;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Fenlei\ClassIflcaTionService;

class ClassIfIcaTionController extends Controller
{
    /**
     * 分类首页展示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $items = JnShopTypeModel::paginate(10);
       
       return view('Admin.fenlei.fenlei_list', compact('items'));
    }

    /**
     * 添加分类
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = JnShopTypeModel::where('pid', 0)->get();
        return view('Admin.fenlei.fenlei_create', compact('items'));
    }

    /**
     * 分类业务处理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('11');
        dd($request->all());
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
