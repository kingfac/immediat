<div class="flex flex-col items-center justify-center px-5 lg:p-4 lg:w-11/12 sm:px-32 md:px-10 xl:w-11/12">
    <div class="grid grid-cols-1 gap-5 lg:grid-cols-3 xl:grid-cols-4 md:grid-cols-2">
        @foreach ($annonces as $an)
        <livewire:component.annonce-card>
        @endforeach
    </div>
</div>
