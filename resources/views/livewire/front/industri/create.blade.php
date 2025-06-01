<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
      
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
    
    <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div class='py-4 px-4'>
        <h2 class='font-semibold'>Industri Baru</h2>
        Kontributor: {{ $siswa_login->nama }}
        <div class="border-t border-gray-300 my-2"></div>
      </div>
      <form>
        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
          <fieldset class="border border-gray-300 rounded-md p-4">
            <legend class="text-lg text-gray-700 px-2">Identitas Industri</legend>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700">Nama</label>
              <input wire:model="indNama" type="text" class="mt-1 p-2 border rounded-md w-full text-black">
              @error('indNama') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700">Bidang Usaha</label>
              <textarea wire:model="indBidUs" class="mt-1 p-2 border rounded-md w-full text-black"></textarea>
              @error('indBidUs') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700">Alamat</label>
              <textarea wire:model="indAlmt" class="mt-1 p-2 border rounded-md w-full text-black"></textarea>
              @error('indAlmt') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700">Kontak</label>
              <input wire:model="indKontak" type="text" class="mt-1 p-2 border rounded-md w-full text-black">
              @error('indKontak') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700">Email</label>
              <input wire:model="indEmail" type="email" class="mt-1 p-2 border rounded-md w-full text-black">
              @error('indEmail') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700">Website</label>
              <input wire:model="indWebsite" type="text" class="mt-1 p-2 border rounded-md w-full text-black">
              @error('indWebsite') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
          </fieldset>
        </div>

        <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
            <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-green-600 rounded-md hover:bg-green-500">
              Save
            </button>
          </span>
          <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
            <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:text-gray-500">
              Cancel
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>
</div>
