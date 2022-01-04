
<div class="{{$showModal}} fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
     aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Edit crypto coin
                        </h3>
                        <div class="flex justify-between">
                            <div class="mt-2 flex flex-col">
                                <label for="">Crypto Alias</label>
                                <input type="text" class="form-input px-3 py-1 rounded-lg mr-4" wire:model="alias">
                            </div>
                            <div class="mt-2 flex flex-col">
                                <label for="">Crypto Name</label>
                                <input type="text" class="form-input px-3 py-1 rounded-lg mr-4" wire:model="name">
                            </div>
                            <div class="mt-2 flex flex-col">
                                <label for="">Estate</label>
                                <select type="text" class="form-input px-3 py-1 rounded-lg mr-4" wire:model="enabled">
                                    <option value="">---</option>
                                    <option value="1">ENABLED</option>
                                    <option value="0">DISABLED</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-2 flex flex-col">
                            <label for="">Image URL</label>
                            <input type="text" class="form-input px-3 py-1 rounded-lg mr-4" wire:model="image">
                        </div>

                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" wire:click="save"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-200 sm:ml-3 sm:w-auto sm:text-sm">
                    Save
                </button>
                <button type="button" wire:click="closeModal"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
