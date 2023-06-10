<x-layouts.admin-app>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
            <x-admin.form.header title="店舗変更" subTitle="店舗を変更しましょう" />
            <form method="POST" action="{{ route('admin.shop.edit_confirm', $shop->id) }}">
                @csrf
                <!-- Grid -->
                <div class="grid grid-cols-12 gap-4 sm:gap-6">
                    <x-admin.form.label id="code" text="店舗コード" />
                    <x-admin.form.input id="code" type="text" placeholder="店舗コードを入力して下さい"
                        value="{{ old('code', $shop->code) }}" name="code" />

                    <x-admin.form.label id="name" text="店舗名" />
                    <x-admin.form.input id="name" type="text" placeholder="店舗名を入力して下さい"
                        value="{{ old('name', $shop->name) }}" name="name" />

                    <x-admin.form.label id="zip" text="郵便番号" />
                    <x-admin.form.input id="zip" type="text" placeholder="郵便番号を入力して下さい"
                        value="{{ old('zip', $shop->zip) }}" name="zip" />

                    <x-admin.form.label id="prefectures" text="都道府県" />
                    <x-admin.form.input id="prefectures" type="text" placeholder="都道府県を入力して下さい"
                        value="{{ old('prefectures', $shop->prefectures) }}" name="prefectures" />

                    <x-admin.form.label id="city" text="市区町村" />
                    <x-admin.form.input id="city" type="text" placeholder="市区町村を入力して下さい"
                        value="{{ old('city', $shop->city) }}" name="city" />

                    <x-admin.form.label id="address" text="番地" />
                    <x-admin.form.input id="address" type="text" placeholder="番地を入力して下さい"
                        value="{{ old('address', $shop->address) }}" name="address" />

                    <x-admin.form.label id="building" text="建物名" />
                    <x-admin.form.input id="building" type="text" placeholder="建物名を入力して下さい"
                        value="{{ old('building', $shop->building) }}" name="building" />

                    <x-admin.form.label id="tel" text="電話番号" />
                    <x-admin.form.input id="tel" type="text" placeholder="電話番号を入力して下さい"
                        value="{{ old('tel', $shop->tel) }}" name="tel" />

                    <x-admin.form.label id="email" text="メールアドレス" />
                    <x-admin.form.input id="email" type="text" placeholder="メールアドレスを入力して下さい"
                        value="{{ old('email', $shop->email) }}" name="email" />

                    <x-admin.form.label id="status" text="ステータス" />
                    <x-admin.form.radio id="status" name="status" :array="AppConsts::STATUS_LIST" :default="$shop->status" />
                </div>
                <!-- End Grid -->
                <x-admin.form.btns leftBtnName="" leftBtnText="戻る" leftBtnType="a"
                    leftBtnRoute="{{ url(session('checkPointURL')) }}" rightBtnText="確認" rightBtnType="button"
                    rightBtnRoute="" />
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</x-layouts.admin-app>
