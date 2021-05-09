<div>
    <div
    x-data="{ open: false, msg: '' }"
    x-init="
        Livewire.on('notify-success', m => {
            open = true; msg = m;
            setTimeout(() => { open = false }, 3000);
        });
    "
    x-ref="this"
    x-show="open"
    style="display: none"
    class="mb-8 flex items-center justify-between bg-green-500 rounded max-w-3xl">
        <div class="flex items-center">
            <svg class="ml-4 mr-2 flex-shrink-0 w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <polygon points="0 11 2 9 7 14 18 3 20 5 7 18" />
            </svg>
            <div x-text="msg" class="py-4 text-white text-sm font-medium"></div>
        </div>
        <button @click="open = false" type="button" class="group mr-2 p-2">
            <svg class="block w-2 h-2 fill-green-800 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                width="235.908" height="235.908" viewBox="278.046 126.846 235.908 235.908">
                <path
                    d="M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z" />
            </svg>
        </button>
    </div>

    <div
    x-data="{ open: false, msg: '' }"
    x-init="
        Livewire.on('notify-error', m => {
            open = true; msg = m;
            setTimeout(() => { open = false }, 3000);
        });
    "
    x-ref="this"
    x-show="open"
    style="display: none"
    class="mb-8 flex items-center justify-between bg-red-400 rounded max-w-3xl">
        <div class="flex items-center">
            <svg class="ml-4 mr-2 flex-shrink-0 w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <path
                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z" />
            </svg>
            <div x-text="msg" class="py-4 text-white text-sm font-medium"></div>
        </div>
        <button @click="open = false" type="button" class="group mr-2 p-2">
            <svg class="block w-2 h-2 fill-red-800 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                width="235.908" height="235.908" viewBox="278.046 126.846 235.908 235.908">
                <path
                    d="M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z" />
            </svg>
        </button>
    </div>
</div>
