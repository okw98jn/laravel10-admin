<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Admin\Admin\AdminRepositoryInterface;

class AdminController extends Controller
{
    protected $adminRepository;

    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function index()
    {
        $admins = $this->adminRepository->all();
        return view('admin.admin.index', compact('admins'));
    }

    public function delete($id)
    {
        $this->adminRepository->delete($id);
        return redirect()->back()->with('message', 'アカウントの削除が完了しました');
    }
}
