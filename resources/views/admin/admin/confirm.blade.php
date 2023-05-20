<x-layouts.admin-app>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
            <x-admin.form.header title="アカウント作成" subTitle="アカウントを作成しましょう" />
            <form method="POST" action="{{ route('admin.admin.store') }}">
                @csrf
                <!-- Grid -->
                <div class="grid grid-cols-12 gap-4 sm:gap-6">
                    <x-admin.form.label id="name" text="名前" />
                    <x-admin.form.confirm-text text="{{ $inputs['name'] }}" />

                    <x-admin.form.label id="login-id" text="ログインID" />
                    <x-admin.form.confirm-text text="{{ $inputs['login_id'] }}" />

                    <x-admin.form.label id="password" text="パスワード" />
                    <x-admin.form.confirm-text text="{{ $maskPassword }}" textSize="text-xs" />

                    <x-admin.form.label id="password-comfirm" text="パスワード確認" />
                    <x-admin.form.confirm-text text="{{ $maskPassword }}" textSize="text-xs" />

                    <x-admin.form.label id="role" text="権限" />
                    <x-admin.form.confirm-text text="{{ AdminConsts::ROLE_LIST[$inputs['role']] }}" />

                    <x-admin.form.label id="status" text="ステータス" />
                    <x-admin.form.confirm-text text="{{ AppConsts::STATUS_LIST[$inputs['status']] }}" />
                </div>
                <!-- End Grid -->
                @foreach ($inputs as $name => $val)
                    <x-admin.form.hidden name="{{ $name }}" value="{{ $val }}" />
                @endforeach
                <x-admin.form.btns leftBtnName="back" leftBtnText="戻る" rightBtnName="complete" rightBtnText="登録" />
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-layouts.admin-app>
