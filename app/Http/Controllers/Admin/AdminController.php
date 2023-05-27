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

    public function index(Request $request)
    {
        $keywords = $request->only(['name', 'login_id', 'role', 'status']);
        $admins   = $this->adminRepository->searchPagination($keywords);
        return view('admin.admin.index', compact('admins', 'keywords'));
    }

    public function show(Request $request, $id)
    {
        $admin = $this->adminRepository->find($id);
        return view('admin.admin.show', compact('admin'));
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function confirm(AdminRequest $request)
    {
        $mode          = 'store';
        $inputs        = $request->all();
        $maskPassword  = $this->common->maskPassword($inputs['password']);
        unset($inputs['token']);
        return view('admin.admin.confirm', compact('mode', 'inputs', 'maskPassword'));
    }

    public function store(AdminRequest $request)
    {
        if ($request->has('back')) {
            return redirect()->route('admin.admin.create')->withInput();
        }
        $attributes             = $request->only(['name', 'login_id', 'password', 'role', 'status']);
        $attributes['password'] = Hash::make($request->input('password'));
        $admin = $this->adminRepository->create($attributes);
        return redirect()->route('admin.admin.show', $admin->id)->with('message', 'アカウントの登録が完了しました');
    }

    public function edit($id)
    {
        $admin = $this->adminRepository->find($id);
        return view('admin.admin.edit', compact('admin'));
    }

    public function editConfirm(AdminRequest $request, $id)
    {
        $mode   = 'update';
        $inputs = $request->all();
        unset($inputs['token']);
        return view('admin.admin.confirm', compact('id', 'mode', 'inputs'));
    }

    public function update(AdminRequest $request, $id)
    {
        if ($request->has('back')) {
            return redirect()->route('admin.admin.edit', $id)->withInput();
        }
        $attributes = $request->only(['name', 'login_id', 'role', 'status']);
        $this->adminRepository->update($id, $attributes);
        return redirect()->route('admin.admin.show', $id)->with('message', 'アカウントの変更が完了しました');
    }

    public function delete($id)
    {
        $this->adminRepository->delete($id);
        return redirect()->back()->with('message', 'アカウントの削除が完了しました');
    }
}
