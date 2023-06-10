<div class="fixed bottom-0 right-0 m-4" id="alert-message">
    <div class="flex w-96 shadow-lg rounded-lg">
        <div class="{{ $type === 'success' ? 'bg-green-600' : 'bg-red-600' }}  py-4 px-6 rounded-l-lg flex items-center">
            @if ($type === 'success')
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white fill-current" viewBox="0 0 16 16" width="20"
                    height="20">
                    <path fill-rule="evenodd"
                        d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z">
                    </path>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
            @endif
        </div>
        <div
            class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
            <div class="text-sm">{{ $message }}</div>
            <button class="close-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16"
                    width="20" height="20">
                    <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    const closeButton = document.querySelector('.close-button');
    const alertBox = document.getElementById('alert-message');

    closeButton.addEventListener('click', () => {
        alertBox.style.opacity = 0;
        alertBox.style.transition = 'opacity 0.5s ease-out';
        setTimeout(() => {
            alertBox.style.display = 'none';
        }, 500);
    });

    // アラートボックスが表示された後、2秒後に非表示にする
    setTimeout(() => {
        alertBox.style.opacity = 0;
        alertBox.style.transition = 'opacity 0.5s ease-out';
        setTimeout(() => {
            alertBox.style.display = 'none';
        }, 500);
    }, 2000);
</script>
