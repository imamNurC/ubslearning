@extends('custom_layout_users.bases.userbase')
@section('content')
<section class="w-full overflow-hidden dark:bg-gray-50">
    <div class="flex flex-col">
        <!-- FullName -->
        <div class="flex flex-col items-center sm:w-[80%] xs:w-[90%] mx-auto mt-8">
            <h1 class="text-center text-gray-800 dark:text-black lg:text-4xl md:text-3xl sm:text-3xl xs:text-xl font-serif">
                {{ $customer->name }}
            </h1>
        </div>

        <div class="xl:w-[80%] lg:w-[90%] md:w-[90%] sm:w-[92%] xs:w-[90%] mx-auto flex flex-col gap-4 items-center relative lg:-top-8 md:-top-6 sm:-top-4 mt-7">
            <!-- Detail -->
            <div class="w-full my-auto py-6 flex flex-col justify-center gap-2">
                <div class="w-full flex sm:flex-row xs:flex-col gap-2 justify-center">
                    <div class="w-full">
                        <dl class="text-gray-900 divide-y divide-gray-200 dark:text-black dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-black md:text-lg dark:text-black">Name</dt>
                                <dd class="text-lg font-semibold">{{ $customer->name }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-black md:text-lg dark:text-black">Username</dt>
                                <dd class="text-lg font-semibold">{{ $customer->username }}</dd>
                            </div>
                        </dl>
                    </div>
                    <div class="w-full">
                        <dl class="text-gray-900 divide-y divide-gray-200 dark:text-black dark:divide-black">
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-black md:text-lg dark:text-black">Phone Number</dt>
                                <dd class="text-lg font-semibold">{{ $customer->phone_number }}</dd>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-black md:text-lg dark:text-black">Email</dt>
                                <dd class="text-lg font-semibold">{{ $customer->email }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection