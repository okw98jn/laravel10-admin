<x-layouts.admin-app>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
            <x-admin.form.header title="店舗詳細" subTitle="" />
            <!-- Grid -->
            <form action="{{ route('admin.shop.edit', $shop->id) }}">
                @csrf
                <div class="grid grid-cols-12 gap-4 sm:gap-6">
                    <x-admin.form.label id="code" text="店舗コード" />
                    <x-admin.form.confirm-text text="{{ $shop->code }}" />

                    <x-admin.form.label id="name" text="店舗名" />
                    <x-admin.form.confirm-text text="{{ $shop->name }}" />

                    <x-admin.form.label id="zip" text="郵便番号" />
                    <x-admin.form.confirm-text text="{{ $shop->zip }}" />

                    <x-admin.form.label id="prefectures" text="都道府県" />
                    <x-admin.form.confirm-text text="{{ $shop->prefectures }}" />
    
                    <x-admin.form.label id="city" text="市区町村" />
                    <x-admin.form.confirm-text text="{{ $shop->city }}" />

                    <x-admin.form.label id="address" text="番地" />
                    <x-admin.form.confirm-text text="{{ $shop->address }}" />

                    <x-admin.form.label id="building" text="建物名" />
                    <x-admin.form.confirm-text text="{{ $shop->building }}" />

                    <x-admin.form.label id="tel" text="電話番号" />
                    <x-admin.form.confirm-text text="{{ $shop->tel }}" />

                    <x-admin.form.label id="email" text="メールアドレス" />
                    <x-admin.form.confirm-text text="{{ $shop->email }}" />
    
                    <x-admin.form.label id="status" text="ステータス" />
                    <x-admin.form.confirm-text text="{{ AppConsts::STATUS_LIST[$shop->status] }}" />
                </div>
                <!-- End Grid -->
                <x-admin.form.btns leftBtnName="" leftBtnText="戻る" leftBtnType="a" leftBtnRoute="{{ route('admin.shop.index') }}" rightBtnText="変更" rightBtnType="a" rightBtnRoute="{{ route('admin.shop.edit', $shop->id) }}" />
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-layouts.admin-app>
