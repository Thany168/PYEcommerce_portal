<x-app-layout>
    <div class="py-8 bg-[#f9fafb] min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Store Overview</h1>
                    <p class="text-gray-500 mt-1">Manage your apparel inventory and track performance.</p>
                </div>
                <div class="flex gap-3">
                    <button class="bg-white border border-gray-200 text-gray-700 px-4 py-2 rounded-xl text-sm font-semibold hover:bg-gray-50 transition">
                        Export Report
                    </button>
                <a href="{{ route('products.create') }}" 
   class="inline-flex items-center bg-black text-white px-4 py-2 rounded-xl text-sm font-semibold hover:bg-zinc-800 transition shadow-lg shadow-black/5">
    + Add New Product
</a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-2 bg-green-50 rounded-lg text-green-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded">+12.5%</span>
                    </div>
                    <p class="text-sm font-medium text-gray-500">Total Revenue</p>
                    <h3 class="text-2xl font-bold text-gray-900 mt-1">$45,280.00</h3>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-2 bg-blue-50 rounded-lg text-blue-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        </div>
                        <span class="text-xs font-bold text-blue-500 bg-blue-50 px-2 py-1 rounded">+8.2%</span>
                    </div>
                    <p class="text-sm font-medium text-gray-500">Active Orders</p>
                    <h3 class="text-2xl font-bold text-gray-900 mt-1">1,240</h3>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-2 bg-orange-50 rounded-lg text-orange-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <span class="text-xs font-bold text-orange-500 bg-orange-50 px-2 py-1 rounded">Low Stock: 5</span>
                    </div>
                    <p class="text-sm font-medium text-gray-500">Stock Items</p>
                    <h3 class="text-2xl font-bold text-gray-900 mt-1">3,450</h3>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-2 bg-purple-50 rounded-lg text-purple-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 01-9-4.951"/></svg>
                        </div>
                        <span class="text-xs font-bold text-purple-500 bg-purple-50 px-2 py-1 rounded">New</span>
                    </div>
                    <p class="text-sm font-medium text-gray-500">New Customers</p>
                    <h3 class="text-2xl font-bold text-gray-900 mt-1">180</h3>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-gray-50 flex items-center justify-between">
                        <h2 class="font-bold text-gray-900 uppercase tracking-wider text-xs">Recent Orders</h2>
                        <a href="#" class="text-xs font-bold text-blue-600 hover:underline">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 text-[10px] uppercase font-bold text-gray-400">
                                <tr>
                                    <th class="px-6 py-4">Item</th>
                                    <th class="px-6 py-4">Customer</th>
                                    <th class="px-6 py-4">Amount</th>
                                    <th class="px-6 py-4">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50 text-sm">
                                <tr>
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <div class="h-10 w-10 bg-gray-100 rounded-lg flex-shrink-0"></div>
                                        <span class="font-semibold text-gray-800">Heavyweight Oversized Tee</span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500 italic">John Doe</td>
                                    <td class="px-6 py-4 font-bold">$45.00</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 bg-green-50 text-green-600 text-[10px] font-bold rounded-full uppercase">Shipped</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <div class="h-10 w-10 bg-gray-100 rounded-lg flex-shrink-0"></div>
                                        <span class="font-semibold text-gray-800">Relaxed Fit Chinos</span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500 italic">Sarah Smith</td>
                                    <td class="px-6 py-4 font-bold">$89.00</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 bg-yellow-50 text-yellow-600 text-[10px] font-bold rounded-full uppercase">Processing</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h2 class="font-bold text-gray-900 uppercase tracking-wider text-xs mb-6">Inventory Alerts</h2>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="h-2 w-2 rounded-full bg-red-500"></div>
                                <span class="text-sm font-medium text-gray-700">Denim Jacket (M)</span>
                            </div>
                            <span class="text-xs font-bold text-red-500 uppercase">2 Left</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="h-2 w-2 rounded-full bg-red-500"></div>
                                <span class="text-sm font-medium text-gray-700">Silk Floral Scarf</span>
                            </div>
                            <span class="text-xs font-bold text-red-500 uppercase">0 Left</span>
                        </div>
                        <div class="pt-4 border-t border-gray-50">
                            <h2 class="font-bold text-gray-900 uppercase tracking-wider text-xs mb-4">Category Share</h2>
                            <div class="space-y-3">
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-500">Men's Wear</span>
                                    <span class="font-bold">65%</span>
                                </div>
                                <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-black h-full w-[65%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>