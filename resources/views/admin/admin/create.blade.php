<x-layouts.admin-app>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
            <x-admin.form.header title="アカウント作成" subTitle="アカウントを作成しましょう" />
            <form method="POST" action="{{ route('admin.admin.confirm') }}">
                @csrf
                <!-- Grid -->
                <div class="grid grid-cols-12 gap-4 sm:gap-6">
                    <x-admin.form.label id="name" text="名前" />
                    <x-admin.form.input id="name" type="text" placeholder="名前を入力して下さい" value="{{ old('name') }}"
                        name="name" />

                    <x-admin.form.label id="login-id" text="ログインID" />
                    <x-admin.form.input id="login-id" type="text" placeholder="ログインIDを入力して下さい"
                        value="{{ old('login_id') }}" name="login_id" />

                    <x-admin.form.label id="password" text="パスワード" />
                    <x-admin.form.input id="password" type="password" placeholder="パスワードを入力して下さい"
                        value="" name="password" />

                    <x-admin.form.label id="password-comfirm" text="パスワード確認" />
                    <x-admin.form.input id="password-comfirm" type="password" placeholder="パスワード確認"
                        value="" name="password_confirmation" />

                    <x-admin.form.label id="role" text="権限" />
                    <x-admin.form.select id="role" name="role" :array="AdminConsts::ROLE_LIST" :default="0" />

                    <x-admin.form.label id="status" text="ステータス" />
                    <x-admin.form.radio id="status" name="status" :array="AppConsts::STATUS_LIST" :default="AppConsts::STATUS_VALID" />
                </div>
                <!-- End Grid -->
                <x-admin.form.btns leftBtnName="" leftBtnText="戻る" leftBtnType="a" leftBtnRoute="{{ route('admin.admin.index') }}" rightBtnText="確認" rightBtnType="button" rightBtnRoute="" />
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-layouts.admin-app>
