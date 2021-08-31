<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2">
        @for($i = 0; $i < 11; $i++)
            <x-card />
        @endfor
    </div>
</div>
