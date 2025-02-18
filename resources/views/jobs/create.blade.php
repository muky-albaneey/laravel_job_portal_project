<x-layout>
    <x-slot:heading>create job</x-slot:heading>
<form action="/jobs/create" method="POST">
    @csrf
    {{-- @method('PATCH') --}}
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-container>
           <x-form-label for="title">Title</x-form-label>
            <div class="mt-2">
                <x-form-input type="text" name="title" id="title" autocomplete="title" />
            </div>
          </x-form-container>
          <x-form-container>
            <x-form-label for="title">Salary</x-form-label>
             <div class="mt-2">
                 <x-form-input type="text" name="salary"  id="salary" autocomplete="salary" />
             </div>
           </x-form-container>
        </div>
      </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <x-form-btn>Create</x-form-btn>
    </div>
  </form>

</x-layout>
