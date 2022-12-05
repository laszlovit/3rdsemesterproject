<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package twwp
 */


?>

	<section id="primary">
		<main id="main">
            
            <div class="isolate bg-white">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
    <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
      <defs>
        <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
          <stop stop-color="#9089FC"></stop>
          <stop offset="1" stop-color="#FF80B5"></stop>
        </linearGradient>
      </defs>
    </svg>
  </div>
  <?php
  get_header();
  ?>
  <!-- Hero section -->
  <main>
    <div class="relative px-6 lg:px-8">
      <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-48 sm:pb-40">
        <div>
          <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div class="relative overflow-hidden rounded-full py-1.5 px-4 text-sm leading-6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              <span class="text-gray-600">
                10% off in December. Discount code: <span class="text-indigo-500" >DEC10</span>
              </span>
            </div>
          </div>
          <div>
            <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl">Unlimited UX, UI and <br> graphic design.</h1>
            <p class="mt-6 text-lg leading-8 text-gray-600 sm:text-center">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
            <div class="mt-8 flex gap-x-4 sm:justify-center">
              <a href="#plans" class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                See plans
                <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
              </a>
              <a href="#recent" class="inline-block rounded-lg px-4 py-1.5 text-base font-semibold leading-7 text-gray-900 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Recent work
                <span class="text-gray-400" aria-hidden="true">&rarr;</span>
              </a>
            </div>
          </div>
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
            <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
              <defs>
                <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#9089FC"></stop>
                  <stop offset="1" stop-color="#FF80B5"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
      </div>
    </div>
    

    <!-- About -->
    <section id="about">
      <div class="relative bg-gray-900">
  <div class="absolute bottom-0 h-80 w-full xl:inset-0 xl:h-full">
    <div class="h-full w-full xl:grid xl:grid-cols-2">
      <div class="h-full xl:relative xl:col-start-2">
        <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
      </div>
    </div>
  </div>
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-flow-col-dense xl:grid-cols-2 xl:gap-x-8">
    <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
      <h2 class="text-base font-semibold text-indigo-300">About us</h2>
      <p class="mt-3 text-3xl font-bold tracking-tight text-white">A design agency to scale your business</p>
      <p class="mt-5 text-lg text-gray-300">We are a team of web designers and online marketing specialists, ready to apply all our best solutions to help in your project. Since good design and implementation are what you need to succeed in your company. </p>
      <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
        <p>
          <span class="block text-2xl font-bold text-white">32+</span>
          <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Companies</span> use our excellent, unique services.</span>
        </p>

        <p>
          <span class="block text-2xl font-bold text-white">4+</span>
          <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">The number of countries</span> we are present</span>
        </p>

        <p>
          <span class="block text-2xl font-bold text-white">98%</span>
          <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Customer satisfaction</span>, we execute every idea with pixel-perfect, senior-level design.</span>
        </p>

        <p>
          <span class="block text-2xl font-bold text-white">1200+</span>
          <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Solved design requests</span> so far, and it's growing.</span>
        </p>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Features section -->
<section id="features">
   <div class="relative bg-white py-24 sm:py-32 lg:py-40">
  <div class="mx-auto max-w-md px-6 text-center sm:max-w-3xl lg:max-w-7xl lg:px-8">
    <h2 class="text-lg font-semibold text-indigo-600">Our approach</h2>
    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A more efficient way to get good design done</p>
    
    <div class="mt-20">
      <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
        <div class="pt-6">
          <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center rounded-xl bg-indigo-500 p-3 shadow-lg">
               
                  <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
</svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-semibold leading-8 tracking-tight text-gray-900">Custom designs</h3>
              <p class="mt-5 text-base leading-7 text-gray-600">Each of your designs is completely unique, made exclusively for you.</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center rounded-xl bg-indigo-500 p-3 shadow-lg">
                  <!-- Heroicon name: outline/lock-closed -->
                  <svg class="h-8 w-8" viewBox="0 0 128 128">
<path fill="#fff" d="M127 16.142C127 7.779 120.221 1 111.858 1H16.142C7.779 1 1 7.779 1 16.142v95.715C1 120.221 7.779 127 16.142 127h95.716c8.363 0 15.142-6.779 15.142-15.143V16.142zM58 99.54c0 3.807-3.286 6.46-7.093 6.46H23.563C19.756 106 17 103.347 17 99.54V23.23c0-3.808 2.756-7.23 6.563-7.23h27.344C54.714 16 58 19.422 58 23.23v76.31zm55-66.456V64.97c0 3.807-2.936 7.03-6.744 7.03h-27.33C75.118 72 72 68.776 72 64.97V22.866C72 19.058 75.118 16 78.926 16h27.33c3.808 0 6.744 3.058 6.744 6.866v10.218z"></path>
</svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-semibold leading-8 tracking-tight text-gray-900">Trello board</h3>
              <p class="mt-5 text-base leading-7 text-gray-600">Manage your design board using Trello. View active, queued and completed tasks.
</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center rounded-xl bg-indigo-500 p-3 shadow-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
</svg>


                </span>
              </div>
              <h3 class="mt-8 text-lg font-semibold leading-8 tracking-tight text-gray-900">Fast delievery</h3>
              <p class="mt-5 text-base leading-7 text-gray-600">Get your design one at a time in just a few days on average.</p>
            </div>
          </div>
        </div>

        

        

        
      </div>
    </div>
  </div>
</div>
</section>
<!-- Pricing section -->
<section id="plans">
   <div class="bg-gray-900">
  <div class="px-4 pt-12 sm:px-6 lg:px-8 lg:pt-20">
    <div class="text-center">
      <h2 class="text-xl font-semibold leading-6 text-gray-300">Plans</h2>
      <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">The right price for you, whoever you are</p>
    </div>
  </div>

  <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
    <div class="relative z-0">
      <div class="absolute inset-0 h-5/6 bg-gray-900 lg:h-2/3"></div>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative lg:grid lg:grid-cols-7">
          <div class="mx-auto max-w-md lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3 lg:mx-0 lg:max-w-none">
            <div class="flex h-full flex-col overflow-hidden rounded-lg shadow-lg lg:rounded-none lg:rounded-l-lg">
              <div class="flex flex-1 flex-col">
                <div class="bg-white px-6 py-10">
                  <div>
                    <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-hobby">Quarterly</h3>
                    <div class="mt-4 flex items-center justify-center">
                      <span class="flex items-start px-3 text-5xl tracking-tight text-gray-900">
                        <span class="mt-2 mr-2 text-4xl font-medium tracking-tight">kr.</span>
                        <span class="font-bold">20 699</span>
                      </span>
                      <span class="text-xl font-medium text-gray-500">/month</span>
                    </div>
                  </div>
                </div>
                <div class="flex flex-1 flex-col justify-between border-t-2 border-gray-100 bg-gray-50 p-6 sm:p-10 lg:p-6 xl:p-10">
                  <ul role="list" class="space-y-4">
                    <li class="flex items-start">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: outline/check -->
                        <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                      </div>
                      <p class="ml-3 text-base font-medium text-gray-500">Unlimited requests</p>
                    </li>

                    <li class="flex items-start">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: outline/check -->
                        <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                      </div>
                      <p class="ml-3 text-base font-medium text-gray-500">Unlimited brands</p>
                    </li>

                    <li class="flex items-start">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: outline/check -->
                        <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                      </div>
                      <p class="ml-3 text-base font-medium text-gray-500">Unlimited users</p>
                    </li>
                  </ul>
                  <div class="mt-8">
                     <sc-cart-form class="block w-full rounded-lg border border-transparent  text-center text-base font-medium text-indigo-600" price-id="4aac4e20-544e-4528-9fbf-8abf406b095f" form-id="5" mode="live">
                        <sc-cart-form-submit type="primary" size="medium">
                           Get started			
                        </sc-cart-form-submit>
                     </sc-cart-form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-auto mt-10 max-w-lg lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4 lg:mx-0 lg:mt-0 lg:max-w-none">
            <div class="relative z-10 rounded-lg shadow-xl">
              <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-indigo-600" aria-hidden="true"></div>
              <div class="absolute inset-x-0 top-0 translate-y-px transform">
                <div class="flex -translate-y-1/2 transform justify-center">
                  <span class="inline-flex rounded-full bg-indigo-600 px-4 py-1 text-base font-semibold text-white">Most popular</span>
                </div>
              </div>
              <div class="rounded-t-lg bg-white px-6 pt-12 pb-10">
                <div>
                  <h3 class="text-center text-3xl font-semibold tracking-tight text-gray-900 sm:-mx-6" id="tier-growth">Monthly</h3>
                  <div class="mt-4 flex items-center justify-center">
                    <span class="flex items-start px-3 text-6xl tracking-tight text-gray-900 sm:text-6xl">
                      <span class="mt-2 mr-2 text-4xl font-medium tracking-tight">.kr</span>
                      <span class="font-bold">22 999</span>
                    </span>
                    <span class="text-2xl font-medium text-gray-500">/month</span>
                  </div>
                </div>
              </div>
              <div class="rounded-b-lg border-t-2 border-gray-100 bg-gray-50 px-6 pt-10 pb-8 sm:px-10 sm:py-10">
                <ul role="list" class="space-y-4">
                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base font-medium text-gray-500">Unlimited requests</p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base font-medium text-gray-500">Unlimited brands</p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base font-medium text-gray-500">Unlimited users</p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base font-medium text-gray-500">Unlimited stock photos, videos</p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base font-medium text-gray-500">Pause or cancel at any time</p>
                  </li>
                </ul>
                <div class="mt-10">
                  <sc-cart-form class="block w-full rounded-lg border border-transparent  text-center text-base font-medium text-indigo-600" price-id="ef4eeb1a-2e06-4fd1-bde6-1519bb1357b1" form-id="5" mode="live">
                        <sc-cart-form-submit type="primary" size="medium">
                           Get started			
                        </sc-cart-form-submit>
                     </sc-cart-form>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-auto mt-10 max-w-md lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3 lg:m-0 lg:max-w-none">
            <div class="flex h-full flex-col overflow-hidden rounded-lg shadow-lg lg:rounded-none lg:rounded-r-lg">
              <div class="flex flex-1 flex-col">
                <div class="bg-white px-6 py-10">
                  <div>
                    <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-scale">Yearly</h3>
                    <div class="mt-4 flex items-center justify-center">
                      <span class="flex items-start px-3 text-5xl tracking-tight text-gray-900">
                        <span class="mt-2 mr-2 text-4xl font-medium tracking-tight">.kr</span>
                        <span class="font-bold">18 399</span>
                      </span>
                      <span class="text-xl font-medium text-gray-500">/month</span>
                    </div>
                  </div>
                </div>
                <div class="flex flex-1 flex-col justify-between border-t-2 border-gray-100 bg-gray-50 p-6 sm:p-10 lg:p-6 xl:p-10">
                  <ul role="list" class="space-y-4">
                    <li class="flex items-start">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: outline/check -->
                        <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                      </div>
                      <p class="ml-3 text-base font-medium text-gray-500">Unlimited requests</p>
                    </li>

                    <li class="flex items-start">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: outline/check -->
                        <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                      </div>
                      <p class="ml-3 text-base font-medium text-gray-500">Unlimited brands</p>
                    </li>

                    <li class="flex items-start">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: outline/check -->
                        <svg class="h-6 w-6 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                      </div>
                      <p class="ml-3 text-base font-medium text-gray-500">Unlimited users</p>
                    </li>
                  </ul>
                  <div class="mt-8">
                    <div>
                     <sc-cart-form class="block w-full rounded-lg border border-transparent  text-center text-base font-medium text-indigo-600" price-id="9d1b7c5c-5486-454d-a8f3-902c7cfdab7e" form-id="5" mode="live">
                        <sc-cart-form-submit type="primary" size="medium">
                           Get started		
                        </sc-cart-form-submit>
                     </sc-cart-form>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Gallery section -->
    <div id="recent" class="container mx-auto px-4 mb-12"> 
      <div class="px-4 pb-10 pt-12 sm:px-6 lg:px-8 lg:pt-14">
    <div class="text-center">
      <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl">Recent work</h2>
    </div>
  </div>          
      <section class="py-8 px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="hidden md:block md:w-1/2 px-4">
            <div class="h-full w-full bg-cover rounded shadow-md" style="background-image: url('https://cdn.dribbble.com/userupload/4058643/file/original-6debc68b7d83e166bd85d70d5534efa6.jpg?compress=1&resize=1600x1200')"></div>
          </div>
          <div class="md:w-1/2 h-auto px-4">
            <div class="mb-8"><img class="rounded shadow-md" src="https://cdn.dribbble.com/userupload/4093675/file/original-7c46048d79f997ee6096983639a6c323.jpg?compress=1&resize=2048x1536" alt=""></div>
            <div><img class="rounded shadow-md" src="https://cdn.dribbble.com/userupload/4094082/file/original-37a973499dfb128e2d366a3d66cf31a9.jpg?compress=1&resize=2048x1536" alt=""></div>
          </div>
        </div>
      </section>
                
      <section class="py-8 px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="md:w-1/2 px-4 mb-8 md:mb-0"><img class="rounded shadow-md" src="https://cdn.dribbble.com/userupload/4092752/file/original-50a6860a2741e5dcdc59971c2b70a77f.png?compress=1&resize=1504x1128" alt=""></div>
          <div class="md:w-1/2 px-4 mb-8 md:mb-0"><img class="rounded shadow-md" src="https://cdn.dribbble.com/users/9397596/screenshots/20045659/media/e5d2f6661dd2f404ce6db3d3edea2fcc.jpg?compress=1&resize=1600x1200&vertical=top" alt=""></div>
        </div>
      </section>
  <!--Contact section  -->
<div id="contact" class="bg-white">
  <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
    <div class="divide-y-2 divide-gray-200">
      <div class="lg:grid lg:grid-cols-3 lg:gap-8">
        <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl sm:tracking-tight">Get in touch</h2>
        <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:col-span-2 lg:mt-0">
          <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">Address</h3>
            <dl class="mt-2 text-base text-gray-500">
              <div>
                <dd>Spangsbjerg Kirkevej 110, 6700, Esbjerg</dd>
              </div>
              
            </dl>
          </div>
          <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">Contact</h3>
            <dl class="mt-2 text-base text-gray-500">
              <div>
                <dd>info@designforge.com</dd>
              </div>
              <div class="mt-1">
                <dt class="sr-only">Phone number</dt>
                <dd>+45 50 73 3251</dd>
              </div>
            </dl>
          </div>
          
          
          
        </div>
      </div>
      
    </div>
  </div>
</div>
                




		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();