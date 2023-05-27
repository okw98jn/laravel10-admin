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
                        <x-admin.table.header title="アカウント一覧" btnLeftText="検索" btnRightText="追加" :searchValue="$keywords" />
                        <x-admin.search-form.modal>
                            <form action="{{ route('admin.admin.index') }}" method="GET">
                                <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <x-admin.search-form.input name="name" text="氏名" value="{{ $keywords['name'] ?? '' }}"/>
                                    <x-admin.search-form.input name="login_id" text="ログインID" value="{{ $keywords['login_id'] ?? '' }}"/>
                                    <x-admin.search-form.select name="role" text="権限" data="{{ $keywords['role'] ?? '' }}"
                                        :array="AdminConsts::ROLE_LIST" />
                                    <x-admin.search-form.select name="status" text="ステータス" data="{{ $keywords['status'] ?? '' }}"
                                        :array="AppConsts::STATUS_LIST" />
                                    <!-- End Form Group -->
                                    <button type="submit"
                                        class="py-3 px-4 mt-8 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">検索</button>
                                </div>
                            </form>
                        </x-admin.search-form.modal>
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
                                @foreach ($admins as $index => $admin)
                                    <tr
                                        class="@if ($index % 2 == 1) bg-gray-50 @endif hover:bg-gray-200 transition duration-300 ease-in-out cursor-pointer">
                                        <x-admin.table.td>
                                            <a href="{{ route('admin.admin.show', $admin->id) }}">
                                                <x-admin.table.td-text text="{{ $admin->id }}" />
                                            </a>
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <a href="{{ route('admin.admin.show', $admin->id) }}">
                                                <x-admin.table.td-text text="{{ $admin->name }}" />
                                            </a>
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <a href="{{ route('admin.admin.show', $admin->id) }}">
                                                <x-admin.table.td-text text="{{ $admin->login_id }}" />
                                            </a>
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <a href="{{ route('admin.admin.show', $admin->id) }}">
                                                <x-admin.table.td-text
                                                    text="{{ AdminConsts::ROLE_LIST[$admin->role] }}" />
                                            </a>
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <a href="{{ route('admin.admin.show', $admin->id) }}">
                                                <x-admin.table.td-status :status="$admin->status" />
                                            </a>
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <a href="{{ route('admin.admin.show', $admin->id) }}">
                                                <x-admin.table.td-text
                                                    text="{{ $admin->created_at->format(AppConsts::DATE_FORMAT) }}" />
                                            </a>
                                        </x-admin.table.td>
                                        <x-admin.table.td>
                                            <x-admin.table.td-btns :id="$admin->id"
                                                routeEdit="{{ route('admin.admin.edit', $admin->id) }}"
                                                routeDelete="{{ route('admin.admin.delete', $admin->id) }}" />
                                        </x-admin.table.td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->
                        <!-- Pagination -->
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                            {{ $admins->onEachSide(1)->links('vendor.pagination.tailwind') }}
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</x-layouts.admin-app>
