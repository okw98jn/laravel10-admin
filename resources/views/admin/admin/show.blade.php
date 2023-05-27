<x-layouts.admin-app>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
            <x-admin.form.header title="アカウント詳細" subTitle="修正がある場合は戻るボタンを押してください" />
            <!-- Grid -->
            <form action="{{ route('admin.admin.show', $admin->id) }}">
                <div class="grid grid-cols-12 gap-4 sm:gap-6">
                    <x-admin.form.label id="name" text="名前" />
                    <x-admin.form.confirm-text text="{{ $admin->name }}" />
    
                    <x-admin.form.label id="login-id" text="ログインID" />
                    <x-admin.form.confirm-text text="{{ $admin->login_id }}" />
    
                    <x-admin.form.label id="role" text="権限" />
                    <x-admin.form.confirm-text text="{{ AdminConsts::ROLE_LIST[$admin->role] }}" />
    
                    <x-admin.form.label id="status" text="ステータス" />
                    <x-admin.form.confirm-text text="{{ AppConsts::STATUS_LIST[$admin->status] }}" />
                </div>
                <!-- End Grid -->
                <x-admin.form.btns leftBtnName="back" leftBtnText="戻る" rightBtnName="edit" rightBtnText="変更" />
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-layouts.admin-app>
