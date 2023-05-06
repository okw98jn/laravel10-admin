<x-layouts.admin-app>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                        <!-- Header -->
                        <x-admin.table.header title="管理者一覧" btnText="追加" />
                        <!-- End Header -->
                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-slate-800">
                                <tr>
                                    <x-admin.table.th>
                                        <x-admin.table.th-text text="ID" />
                                    </x-admin.table.th>
                                    <x-admin.table.th>
                                        <x-admin.table.th-text text="氏名" />
                                    </x-admin.table.th>
                                    <x-admin.table.th>
                                        <x-admin.table.th-text text="ログインID" />
                                    </x-admin.table.th>
                                    <x-admin.table.th>
                                        <x-admin.table.th-text text="権限" />
                                    </x-admin.table.th>
                                    <x-admin.table.th>
                                        <x-admin.table.th-text text="ステータス" />
                                    </x-admin.table.th>
                                    <x-admin.table.th>
                                        <x-admin.table.th-text text="登録日" />
                                    </x-admin.table.th>
                                    <x-admin.table.th />
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($admins as $admin)
                                    <tr>
                                        <x-admin.table.td>
                                            <x-admin.table.td-text text="{{ $admin->id }}" />
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <x-admin.table.td-text text="{{ $admin->name }}" />
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <x-admin.table.td-text text="{{ $admin->login_id }}" />
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <x-admin.table.td-text text="{{ AdminConsts::ROLE_LIST[$admin->role] }}" />
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <x-admin.table.td-status :status="$admin->status"/>
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <x-admin.table.td-text
                                                text="{{ $admin->created_at->format(AppConsts::DATE_FORMAT) }}" />
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <x-admin.table.td-btns :id="$admin->id" routeEdit="" routeDelete="{{ route('admin.admin.delete', $admin->id) }}"/>
                                        </x-admin.table.td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->
                        <!-- Footer -->
                        <x-admin.table.footer />
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
    
</x-layouts.admin-app>
