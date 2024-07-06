<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Notes') }}
            </h2>
            <a href="{{ route('notes.create') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                Note</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto px-6 max-w-6xl text-gray-500">
            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                @if (!$notes->isEmpty())
                    @foreach ($notes as $note)
                        <div
                            class="relative group overflow-hidden p-8 rounded-xl bg-white border border-gray-200 dark:border-gray-800 dark:bg-gray-900 flex flex-col justify-around  h-full">
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-sky-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-5 dark:group-hover:opacity-10">
                            </div>
                            <div class="relative">
                                <div
                                    class="border border-sky-500/10 flex relative *:relative *:size-6 *:m-auto size-12 rounded-lg dark:bg-gray-900 dark:border-white/15 before:rounded-[7px] before:absolute before:inset-0 before:border-t before:border-white before:from-sky-100 dark:before:border-white/20 before:bg-gradient-to-b dark:before:from-white/10 dark:before:to-transparent before:shadow dark:before:shadow-gray-950">
                                    <svg width="1em" height="1em" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 385 385" xml:space="preserve">
                                        <g id="XMLID_1027_">
                                            <polygon id="XMLID_1029_" style="fill:#FF9811;"
                                                points="77.326,355 83.327,385 233.318,355 157.5,355 	" />
                                            <polygon id="XMLID_1030_" style="fill:#FF9811;"
                                                points="307.5,340.163 377.5,326.162 318.663,31.988 203.612,55 307.5,55 	" />
                                            <path id="XMLID_1031_" style="fill:#FFE98F;"
                                                d="M157.5,150c-24.813,0-45-20.186-45-45V85h30v20c0,8.271,6.729,15,15,15V55h-15h-30H7.5v300h69.826H157.5V150z" />
                                            <path id="XMLID_1032_" style="fill:#FFDA44;"
                                                d="M307.5,340.163V55H203.612H202.5v50c0,24.814-20.187,45-45,45v205h75.818H307.5V340.163z" />
                                            <path id="XMLID_1033_" style="fill:#FFDA44;"
                                                d="M172.5,105V55h-15v65C165.771,120,172.5,113.271,172.5,105z" />
                                            <path id="XMLID_1034_" style="fill:#565659;"
                                                d="M142.5,45c0-8.271,6.729-15,15-15s15,6.729,15,15v10v50c0,8.271-6.729,15-15,15s-15-6.729-15-15V85h-30v20c0,24.814,20.187,45,45,45s45-20.186,45-45V55V45c0-24.813-20.187-45-45-45s-45,20.187-45,45v10h30V45z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                                    <p class="text-gray-800 dark:text-gray-300">{{ $note->title ?? 'Title' }}</p>
                                    <p class="text-gray-700 dark:text-gray-300">{{ $note->notes ?? 'Note..' }}</p>
                                </div>
                                <div
                                    class="flex gap-3 -mb-8 py-4 border-t border-gray-200 dark:border-gray-800 mt-auto">
                                    <a href="{{ route('notes.edit', $note->id) }}"
                                        class="group rounded-xl disabled:border *:select-none [&>*:not(.sr-only)]:relative *:disabled:opacity-20 disabled:text-gray-950 disabled:border-gray-200 disabled:bg-gray-100 dark:disabled:border-gray-800/50 disabled:dark:bg-gray-900 dark:*:disabled:!text-white text-gray-950 bg-gray-100 hover:bg-gray-200/75 active:bg-gray-100 dark:text-white dark:bg-gray-500/10 dark:hover:bg-gray-500/15 dark:active:bg-gray-500/10 flex gap-1.5 items-center text-sm h-8 px-3.5 justify-center">
                                        <span>Open</span>
                                        <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M18.9445 9.1875L14.9445 5.1875M18.9445 9.1875L13.946 14.1859C13.2873 14.8446 12.4878 15.3646 11.5699 15.5229C10.6431 15.6828 9.49294 15.736 8.94444 15.1875C8.39595 14.639 8.44915 13.4888 8.609 12.562C8.76731 11.6441 9.28735 10.8446 9.946 10.1859L14.9445 5.1875M18.9445 9.1875C18.9445 9.1875 21.9444 6.1875 19.9444 4.1875C17.9444 2.1875 14.9445 5.1875 14.9445 5.1875M20.5 12C20.5 18.5 18.5 20.5 12 20.5C5.5 20.5 3.5 18.5 3.5 12C3.5 5.5 5.5 3.5 12 3.5"
                                                    stroke="#26a269" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </a>
                                    <div
                                        class="group rounded-xl disabled:border *:select-none [&>*:not(.sr-only)]:relative *:disabled:opacity-20 disabled:text-gray-950 disabled:border-gray-200 disabled:bg-gray-100 dark:disabled:border-gray-800/50 disabled:dark:bg-gray-900 dark:*:disabled:!text-white text-gray-950 bg-gray-100 hover:bg-gray-200/75 active:bg-gray-100 dark:text-white dark:bg-gray-500/10 dark:hover:bg-gray-500/15 dark:active:bg-gray-500/10 flex gap-1.5 items-center text-sm h-8 px-3.5 justify-center">
                                        <span>
                                            {{ $note->updated_at ? $note->updated_at->format('Y-m-d') : $note->created_at->format('Y-m-d') }}</span>
                                        <svg fill="#000000" width="1em" height="1em" viewBox="0 0 24 24"
                                            id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24,12a1,1,0,0,1-2,0A10.011,10.011,0,0,0,12,2a1,1,0,0,1,0-2A12.013,12.013,0,0,1,24,12Zm-8,1a1,1,0,0,0,0-2H13.723A2,2,0,0,0,13,10.277V7a1,1,0,0,0-2,0v3.277A1.994,1.994,0,1,0,13.723,13ZM1.827,6.784a1,1,0,1,0,1,1A1,1,0,0,0,1.827,6.784ZM2,12a1,1,0,1,0-1,1A1,1,0,0,0,2,12ZM12,22a1,1,0,1,0,1,1A1,1,0,0,0,12,22ZM4.221,3.207a1,1,0,1,0,1,1A1,1,0,0,0,4.221,3.207ZM7.779.841a1,1,0,1,0,1,1A1,1,0,0,0,7.779.841ZM1.827,15.216a1,1,0,1,0,1,1A1,1,0,0,0,1.827,15.216Zm2.394,3.577a1,1,0,1,0,1,1A1,1,0,0,0,4.221,18.793Zm3.558,2.366a1,1,0,1,0,1,1A1,1,0,0,0,7.779,21.159Zm14.394-5.943a1,1,0,1,0,1,1A1,1,0,0,0,22.173,15.216Zm-2.394,3.577a1,1,0,1,0,1,1A1,1,0,0,0,19.779,18.793Zm-3.558,2.366a1,1,0,1,0,1,1A1,1,0,0,0,16.221,21.159Z" />
                                        </svg>
                                    </div>
                                    <form id="delete-form-{{ $note->id }}"
                                        action="{{ route('notes.destroy', $note->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')

                                        <button type="button" onclick="confirmDelete('{{ $note->id }}')"
                                            class="group flex items-center rounded-xl disabled:border select-none relative disabled:opacity-20 disabled:text-gray-950 disabled:border-gray-200 disabled:bg-gray-100 dark:disabled:border-gray-800/50 dark:bg-gray-900 dark:!text-white text-gray-950 bg-gray-100 hover:bg-gray-200/75 active:bg-gray-100 dark:text-white dark:bg-gray-500/10 dark:hover:bg-gray-500/15 dark:active:bg-gray-500/10 size-8 justify-center">
                                            <svg width="1em" height="1em" viewBox="0 0 32 32"
                                                xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <g id="SVGRepo_iconCarrier">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #f66151;
                                                            }

                                                            .cls-2 {
                                                                fill: #c01c28;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <title>Delete</title>
                                                    <path class="cls-1"
                                                        d="M27.35,8.49h-5s0-.08,0-.12a6.37,6.37,0,0,0-12.74,0s0,.08,0,.12h-5a1,1,0,1,0,0,1.93h2.7V26.14A3.86,3.86,0,0,0,11.21,30h9.58a3.86,3.86,0,0,0,3.86-3.86V10.42h2.7a1,1,0,1,0,0-1.93ZM11.56,8.37a4.44,4.44,0,0,1,8.88,0s0,.08,0,.12H11.54S11.56,8.41,11.56,8.37Z" />
                                                    <path class="cls-2"
                                                        d="M12.76,25a1,1,0,0,1-1-1V15.4a1,1,0,0,1,1.93,0v8.65A1,1,0,0,1,12.76,25Z" />
                                                    <path class="cls-2"
                                                        d="M19.24,25a1,1,0,0,1-1-1V15.4a1,1,0,0,1,1.93,0v8.65A1,1,0,0,1,19.24,25Z" />
                                                </g>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <a href="{{ route('notes.create') }}"
                        class="relative group overflow-hidden p-8 rounded-xl bg-white border border-gray-200 dark:border-gray-800 dark:bg-gray-900 flex flex-col justify-around h-full">
                        <div aria-hidden="true"
                            class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-sky-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-5 dark:group-hover:opacity-10">
                        </div>

                        <div class="flex items-center justify-center h-full">
                            <div
                                class="border border-sky-500/10 rounded-lg dark:bg-gray-900 dark:border-white/15 before:rounded-[7px] before:absolute before:inset-0 before:border-t before:border-white before:from-sky-100 dark:before:border-white/20 before:bg-gradient-to-b dark:before:from-white/10 dark:before:to-transparent before:shadow dark:before:shadow-gray-950">
                                <svg width="6rem" height="6rem" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11 11V7C11 6.44772 11.4477 6 12 6C12.5523 6 13 6.44772 13 7V11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H13V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V13H7C6.44772 13 6 12.5523 6 12C6 11.4477 6.44772 11 7 11H11ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12Z"
                                        fill="#758CA3" />
                                </svg>
                            </div>
                        </div>

                        <div class="mt-6 rounded-b-[--card-border-radius]">
                            <p class="text-gray-700 dark:text-gray-300">Add a note</p>
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function confirmDelete(noteId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + noteId).submit();
                }
            });
        }
    </script>

</x-app-layout>
