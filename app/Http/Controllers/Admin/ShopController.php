<?php

namespace App\Http\Controllers\Admin;

use App\Consts\ShopConsts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Admin\Shop\ShopRepositoryInterface;
use App\Http\Requests\Admin\ShopRequest;
use App\Services\CsvService;
use Carbon\Carbon;


class ShopController extends Controller
{

    protected $shopRepository;
    protected $csvService;

    public function __construct(ShopRepositoryInterface $shopRepository, CsvService $csvService)
    {
        $this->shopRepository = $shopRepository;
        $this->csvService     = $csvService;
    }

    public function index(Request $request)
    {
        session()->put('checkPointURL', $_SERVER['REQUEST_URI']);  //編集画面のリンク先を動的にするため
        $keywords = $request->only(['code', 'name', 'status']);
        $shops    = $this->shopRepository->searchPagination($keywords);
        return view('admin.shop.index', compact('shops', 'keywords'));
    }

    public function exportCsv()
    {
        $data      = $this->shopRepository->all();
        $fileName  = Carbon::now()->format('YmdHis').'_shopList.csv';
        $response  = $this->csvService->exportCsv('shop', ShopConsts::exportCsvHead, $data, $fileName);
        if ($response === false) {
            return redirect()->route('admin.shop.index')->with(['type' => "alert", 'message' => 'CSVの出力に失敗しました']);
        }
    }

    public function show(Request $request, $id)
    {
        session()->put('checkPointURL', $_SERVER['REQUEST_URI']);  //編集画面のリンク先を動的にするため
        $shop = $this->shopRepository->findOrFail($id);
        return view('admin.shop.show', compact('shop'));
    }

    public function create()
    {
        return view('admin.shop.create');
    }

    public function confirm(ShopRequest $request)
    {
        $mode          = 'store';
        $inputs        = $request->all();
        unset($inputs['token']);
        return view('admin.shop.confirm', compact('mode', 'inputs'));
    }

    public function store(ShopRequest $request)
    {
        if ($request->has('back')) {
            return redirect()->route('admin.shop.create')->withInput();
        }
        $attributes = $request->only(['code', 'name', 'zip', 'prefectures', 'city', 'address', 'building', 'email', 'tel', 'status']);
        $shop       = $this->shopRepository->create($attributes);
        return redirect()->route('admin.shop.show', $shop->id)->with(['type' => 'success', 'message' => '店舗の登録が完了しました']);
    }

    public function edit($id)
    {
        $shop = $this->shopRepository->findOrFail($id);
        return view('admin.shop.edit', compact('shop'));
    }

    public function editConfirm(ShopRequest $request, $id)
    {
        
        $mode   = 'update';
        $inputs = $request->all();
        unset($inputs['token']);
        return view('admin.shop.confirm', compact('id', 'mode', 'inputs'));
    }

    public function update(ShopRequest $request, $id)
    {
        if ($request->has('back')) {
            return redirect()->route('admin.shop.edit', $id)->withInput();
        }
        $attributes = $request->only(['code', 'name', 'zip', 'prefectures', 'city', 'address', 'building', 'email', 'tel', 'status']);
        $this->shopRepository->update($id, $attributes);
        return redirect()->route('admin.shop.show', $id)->with(['type' => 'success', 'message' => '店舗の変更が完了しました']);
    }

    public function delete($id)
    {
        $this->shopRepository->delete($id);
        return redirect()->back()->with('message', '店舗の削除が完了しました');
    }
}
