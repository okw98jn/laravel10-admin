<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Admin\Admin\AdminRepositoryInterface;
use App\Http\Requests\Admin\AdminRequest;
use Illuminate\Support\Facades\Hash;
use App\Services\Admin\CommonService;


class AdminController extends Controller
{
    protected $adminRepository;
    protected $common;

    public function __construct(AdminRepositoryInterface $adminRepository, CommonService $common)
    {
        $this->adminRepository = $adminRepository;
        $this->common          = $common;
    }

    public function index()
    {
        $admins = $this->adminRepository->allPagination();
        return view('admin.admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function confirm(AdminRequest $request)
    {
        if ($request->has('back')) {
            return redirect()->route('admin.admin.index');
        }
        $inputs        = $request->all();
        $maskPassword  = $this->common->maskPassword($inputs['password']); 
        unset($inputs['token']);
        return view('admin.admin.confirm', compact('inputs', 'maskPassword'));
    }

    public function store(AdminRequest $request)
    {
        if ($request->has('back')) {
            return redirect()->route('admin.admin.create')->withInput();
        }
        $attributes             = $request->only(['name', 'login_id', 'password', 'role', 'status']);
        $attributes['password'] = Hash::make($request->input('password'));
        $this->adminRepository->create($attributes);
        return redirect()->route('admin.admin.index')->with('message', 'アカウントの登録が完了しました');
    }

    public function delete($id)
    {
        $this->adminRepository->delete($id);
        return redirect()->back()->with('message', 'アカウントの削除が完了しました');
    }
}
