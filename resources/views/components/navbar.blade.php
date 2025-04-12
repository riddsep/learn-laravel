<header class="py-4 bg-white sm:py-5" x-data="{expanded: false}">
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <nav class="flex items-center justify-between">
          <div class="flex shrink-0">
              <a href="#" title="" class="flex">
                  <img class="w-auto h-8" src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/logo.svg" alt="" />
              </a>
          </div>

          <div class="flex md:hidden">
              <button type="button" class="text-gray-900" @click="expanded = !expanded" :aria-expanded="expanded">
                  <span x-show="!expanded" aria-hidden="true">
                      <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                  </span>

                  <span x-show="expanded" aria-hidden="true">
                      <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </span>
              </button>
          </div>

          <div class="hidden md:items-center md:justify-start md:ml-16 md:mr-auto md:space-x-10 md:flex">
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/features" :active="request()->is('features')">Features</x-nav-link>
              <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
          </div>

          <div class="hidden md:block">
              <a
                  href="/"
                  title=""
                  class="inline-flex items-center justify-center px-6 py-2 sm:py-2.5 text-base font-semibold text-white transition-all duration-200 bg-gray-900 rounded-lg sm:text-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                  role="button"
              >
                  Join Email List
              </a>
          </div>
      </nav>

      <nav x-show="expanded" x-collapse>
          <div class="px-1 pt-8 pb-4">
              <div class="grid gap-y-6">
                  <a href="/" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Home </a>

                  <a href="/" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Blog </a>

                  <a href="/" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> About </a>

                  <a href="/" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Contact </a>

                  <a
                      href="#"
                      title=""
                      class="inline-flex items-center justify-center px-6 py-2 text-base font-semibold leading-7 text-white transition-all duration-200 bg-gray-900 border border-transparent rounded-lg hover:bg-gray-600 font-pj focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                      role="button"
                  >
                      Join Email List
                  </a>
              </div>
          </div>
      </nav>
  </div>
</header>