<x-layout>
    <div class=" px-4 py-12 h-[calc(100vh-80px)]">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row gap-16">
                <!-- Left Section -->
                <div class="md:w-1/2 pt-8">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h1>
                    <p class="text-gray-600 mb-24 max-w-md">
                        Clarity gives you the blocks & components you need to create a truly professional website.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-x-12 gap-y-8">
                        <div>
                            <h3 class="text-sm font-medium text-blue-600 uppercase tracking-wider mb-3">USA OFFICE HOURS</h3>
                            <p class="text-gray-800 font-medium">Monday-Friday</p>
                            <p class="text-gray-800 font-medium">8:00 am to 5:00 pm</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-blue-600 uppercase tracking-wider mb-3">OUR ADDRESS</h3>
                            <p class="text-gray-800 font-medium">8502 Preston Rd. Ingle,</p>
                            <p class="text-gray-800 font-medium">Maine 98380, USA</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-blue-600 uppercase tracking-wider mb-3">CANADA OFFICE HOURS</h3>
                            <p class="text-gray-800 font-medium">8502 Preston Rd. Ingle,</p>
                            <p class="text-gray-800 font-medium">Maine 98380, USA</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-blue-600 uppercase tracking-wider mb-3">GET IN TOUCH</h3>
                            <p class="text-gray-800 font-medium">+1-246-888-0653</p>
                            <p class="text-gray-800 font-medium">+1-222-632-0194</p>
                        </div>
                    </div>
                </div>
                
                <!-- Right Section (Form) -->
                <div class="md:w-1/2">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <form class="space-y-6">
                            <div>
                                <label class="block text-base font-medium text-gray-800 mb-2">Your name</label>
                                <input type="text" placeholder="Enter your full name" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500">
                            </div>
                            
                            <div>
                                <label class="block text-base font-medium text-gray-800 mb-2">Email address</label>
                                <input type="email" placeholder="Enter your email" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500">
                            </div>
                            
                            <div>
                                <label class="block text-base font-medium text-gray-800 mb-2">Write your message</label>
                                <textarea rows="5" placeholder="Write us your question here..." class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500"></textarea>
                            </div>
                            
                            <div>
                                <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>