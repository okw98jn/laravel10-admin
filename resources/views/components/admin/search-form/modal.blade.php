<div id="hs-modal-search"
    class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
    <div
        class="hs-overlay-open:mt-20 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h2 class="block text-2xl font-bold text-gray-800 dark:text-gray-200">検索
                    </h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        複数項目での検索が可能です
                    </p>
                </div>
                <div class="mt-5">
                    <div
                        class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 after:flex-[1_1_0%] after:border-t after:border-gray-200 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">
                    </div>
                    <!-- Form -->
                    {{ $slot }}
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
</div>
