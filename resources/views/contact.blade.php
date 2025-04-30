<x-layout>
    <div class="max-w-6xl mx-auto rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <!-- Left Section -->
            <div class="md:w-1/2 p-8 md:p-12 bg-white">
                <div class="mb-8">
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">
                        Love to hear from you, <br />Get in touch
                        <span class="text-2xl">👋</span>
                    </h1>
                    <p class="text-gray-600 mt-4">
                        Clarity gives you the blocks & components you need to
                        create a truly professional website, landing page or
                        admin panel for your SaaS and gives the blocks.
                    </p>
                </div>

                <div class="mt-12">
                    <div
                        class="bg-blue-600 rounded-xl p-6 text-white relative -rotate-3"
                    >
                        <div class="flex">
                            <div class="text-yellow-300 mb-4">★★★★★</div>
                        </div>
                        <p class="text-lg font-medium mb-6">
                            "We love Landingfolio! Our designers were using it
                            for their projects, so we already knew what kind of
                            design they want."
                        </p>
                        <div class="flex items-center">
                            <div
                                class="h-12 w-12 rounded-full bg-white mr-4 overflow-hidden"
                            >
                                <img
                                    src="https://picsum.photos/200"
                                    alt="Profile avatar"
                                    class="h-full w-full object-cover"
                                />
                            </div>
                            <div>
                                <p class="font-bold">Devon Lane</p>
                                <p class="text-sm text-blue-100">
                                    Co-Founder, Design.co
                                </p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 opacity-20">
                            <svg
                                class="w-32 h-32"
                                viewBox="0 0 100 100"
                                fill="white"
                            >
                                <circle
                                    cx="75"
                                    cy="75"
                                    r="60"
                                    fill="currentColor"
                                    fill-opacity="0.3"
                                ></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="md:w-1/2 p-8 md:p-12 bg-gray-50">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">
                    Send us a message
                </h2>
                <form>
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 mb-2"
                            >Your name</label
                        >
                        <input
                            type="text"
                            id="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 mb-2"
                            >Email address</label
                        >
                        <input
                            type="email"
                            id="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>

                    <div class="mb-6">
                        <label for="phone" class="block text-gray-700 mb-2"
                            >Phone number</label
                        >
                        <input
                            type="tel"
                            id="phone"
                            value="+1-222-333-4444"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>

                    <div class="mb-8">
                        <label for="message" class="block text-gray-700 mb-2"
                            >Write your message</label
                        >
                        <textarea
                            id="message"
                            rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200"
                    >
                        Send message
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
