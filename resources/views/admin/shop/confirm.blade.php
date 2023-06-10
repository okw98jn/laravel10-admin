<x-layouts.admin-app>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
            <x-admin.form.header title="確認" subTitle="修正がある場合は戻るボタンを押してください" />
            <form method="POST" action="{{ $mode === 'store' ? route('admin.shop.store') : route('admin.shop.update', $id) }}">
                @csrf
                <!-- Grid -->
                <div class="grid grid-cols-12 gap-4 sm:gap-6">
                    <x-admin.form.label id="code" text="店舗コード" />
                    <x-admin.form.confirm-text text="{{ $inputs['code'] }}" />

                    <x-admin.form.label id="name" text="店舗名" />
                    <x-admin.form.confirm-text text="{{ $inputs['name'] }}" />

                    <x-admin.form.label id="zip" text="郵便番号" />
                    <x-admin.form.confirm-text text="{{ $inputs['zip'] }}" />

                    <x-admin.form.label id="prefectures" text="都道府県" />
                    <x-admin.form.confirm-text text="{{ $inputs['prefectures'] }}" />
    
                    <x-admin.form.label id="city" text="市区町村" />
                    <x-admin.form.confirm-text text="{{ $inputs['city'] }}" />

                    <x-admin.form.label id="address" text="番地" />
                    <x-admin.form.confirm-text text="{{ $inputs['address'] }}" />

                    <x-admin.form.label id="building" text="建物名" />
                    <x-admin.form.confirm-text text="{{ $inputs['building'] }}" />

                    <x-admin.form.label id="tel" text="電話番号" />
                    <x-admin.form.confirm-text text="{{ $inputs['tel'] }}" />

                    <x-admin.form.label id="email" text="メールアドレス" />
                    <x-admin.form.confirm-text text="{{ $inputs['email'] }}" />
    
                    <x-admin.form.label id="status" text="ステータス" />
                    <x-admin.form.confirm-text text="{{ AppConsts::STATUS_LIST[$inputs['status']] }}" />
                </div>
                <!-- End Grid -->
                @foreach ($inputs as $name => $val)
                    <x-admin.form.hidden name="{{ $name }}" value="{{ $val }}" />
                @endforeach
                <x-admin.form.btns leftBtnName="back" leftBtnText="戻る" leftBtnType="button" leftBtnRoute="" rightBtnText="登録" rightBtnType="button" rightBtnRoute="" />
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-layouts.admin-app>
