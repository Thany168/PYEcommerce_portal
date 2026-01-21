<x-app-layout>
    <div class="py-12 bg-[#f9fafb] min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <a href="{{ route('dashboard') }}" class="text-sm font-bold text-gray-400 hover:text-black transition uppercase tracking-widest flex items-center gap-2">
                    ← Back to Inventory
                </a>
                <h1 class="text-4xl font-bold text-gray-900 mt-4 tracking-tight">Add New Piece</h1>
                <p class="text-gray-500 mt-2">Enter the details for your new apparel item.</p>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div class="bg-white p-8 rounded-2xl border-2 border-dashed border-gray-200 hover:border-black transition-colors group text-center">
                    <div class="space-y-2">
                        <div class="flex justify-center">
                            <svg class="w-12 h-12 text-gray-300 group-hover:text-black transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div class="flex text-sm text-gray-600 justify-center">
                            <label class="relative cursor-pointer bg-white rounded-md font-bold text-black hover:underline">
                                <span>Upload a product image</span>
                                <input type="file" name="image" class="sr-only">
                            </label>
                        </div>
                        <p class="text-xs text-gray-400 font-medium">PNG, JPG up to 10MB</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                    <div>
                        <label class="text-[11px] font-bold uppercase tracking-[0.15em] text-gray-400">Product Name</label>
                        <input type="text" name="name" placeholder="e.g. Oversized Linen Shirt" class="block w-full border-0 border-b-2 border-gray-100 focus:border-black focus:ring-0 px-0 py-3 text-lg transition-colors">
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="text-[11px] font-bold uppercase tracking-[0.15em] text-gray-400">Price (USD)</label>
                            <input type="number" name="price" placeholder="0.00" class="block w-full border-0 border-b-2 border-gray-100 focus:border-black focus:ring-0 px-0 py-3 text-lg transition-colors">
                        </div>
                        <div>
                            <label class="text-[11px] font-bold uppercase tracking-[0.15em] text-gray-400">Initial Stock</label>
                            <input type="number" name="stock" placeholder="10" class="block w-full border-0 border-b-2 border-gray-100 focus:border-black focus:ring-0 px-0 py-3 text-lg transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="text-[11px] font-bold uppercase tracking-[0.15em] text-gray-400">Description</label>
                        <textarea name="description" rows="3" placeholder="Describe the fit, material, and style..." class="block w-full border-0 border-b-2 border-gray-100 focus:border-black focus:ring-0 px-0 py-3 text-lg transition-colors resize-none"></textarea>
                    </div>
                </div>

                <button type="submit" class="w-full bg-black text-white text-xs font-bold uppercase tracking-[0.2em] py-5 hover:bg-zinc-800 transition-all active:scale-[0.99] shadow-xl shadow-black/10 rounded-xl">
                    List Product
                </button>
            </form>
        </div>
    </div>
</x-app-layout>