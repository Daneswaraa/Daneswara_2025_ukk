<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline" style="font-family: 'Poppins', sans-serif;">
  <flux:navlist.group class="grid gap-2">
    <flux:navlist.item
      icon="home"
      :href="route('dashboard')"
      :current="request()->routeIs('dashboard')"
      wire:navigate
      class="block px-6 py-4 rounded-lg text-gray-900 font-semibold shadow-md transition-transform duration-200 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      style="font-family: 'Poppins', sans-serif;"
    >
      {{ __('Dashboard') }}
    </flux:navlist.item>
  </flux:navlist.group>
</flux:navlist>



    <flux:navlist variant="outline" style="font-family: 'Poppins', sans-serif;">
    <div x-data="{ open: true }" class="grid">
        <!-- Tombol untuk toggle -->
        <button
            @click="open = !open"
            class="flex items-center justify-between px-4 py-2 font-semibold text-white bg-gray-800 hover:bg-gray-700 transition-all duration-200 transform hover:scale-105 hover:shadow-none w-full"
            style="font-family: 'Poppins', sans-serif;"
        >
            <span class="transition-all duration-200 group-hover:text-lg"> {{ __('Daftar Guru & Siswa') }} </span>
            <svg :class="{ 'rotate-180': open }"
                class="w-4 h-4 transform transition-transform"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <!-- Isi Menu -->
        <div x-show="open" x-collapse class="pl-4 mt-2 space-y-1" style="font-family: 'Poppins', sans-serif;">
            <flux:navlist.item icon="user-circle" :href="route('guru')" :current="request()->routeIs('guru')" wire:navigate>
                {{ __('Guru Sija') }}
            </flux:navlist.item>
            <flux:navlist.item icon="user" :href="route('siswa')" :current="request()->routeIs('siswa')" wire:navigate>
                {{ __('Siswa Sija') }}
            </flux:navlist.item>
        </div>
    </div>
</flux:navlist>


    <flux:navlist variant="outline">
    <div x-data="{ open: true }" class="grid">
        <!-- Tombol untuk toggle -->
       <button
    @click="open = !open"
    class="flex items-center justify-between px-4 py-2 font-semibold text-white bg-gray-800 hover:bg-gray-700 hover:scale-105 transition-all duration-200 transform focus:outline-none focus:ring-0 w-full"
>
    <span class="transition-all duration-200">{{ __('PKL') }}</span>
    <svg
        :class="{ 'rotate-180': open }"
        class="w-4 h-4 transform transition-transform text-white"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        viewBox="0 0 24 24"
    >
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
    </svg>
</button>

        <!-- Isi Menu -->
        <div x-show="open" x-collapse class="pl-4 mt-2 space-y-1">
            <flux:navlist.item icon="briefcase" :href="route('industri')" :current="request()->routeIs('industri')" wire:navigate>
                {{ __('Industri') }}
            </flux:navlist.item>
            <flux:navlist.item icon="document-text" :href="route('laporan')" :current="request()->routeIs('laporan')" wire:navigate>
                {{ __('Laporan') }}
            </flux:navlist.item>
            </div>
    </div>
    </flux:navlist>


            <flux:spacer />

            {{-- <flux:navlist variant="outline">
                <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
                {{ __('Repository') }}
                </flux:navlist.item>

                <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire" target="_blank">
                {{ __('Documentation') }}
                </flux:navlist.item>
            </flux:navlist> --}}

            <!-- Desktop User Menu -->
            <flux:dropdown position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
