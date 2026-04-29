<nav x-data="{ open: false }" class="glass border-b border-white/5 sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold text-white uppercase tracking-tighter">
                        Admin<span class="text-gold-accent">.</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-6 sm:-my-px sm:ms-10 sm:flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="text-[10px] uppercase tracking-widest font-bold {{ request()->routeIs('admin.dashboard') ? 'text-gold-accent' : 'text-gray-400 hover:text-white' }} transition-colors duration-300">
                        {{ __('Painel') }}
                    </a>
                    <a href="{{ route('admin.skills.index') }}" class="text-[10px] uppercase tracking-widest font-bold {{ request()->routeIs('admin.skills.*') ? 'text-gold-accent' : 'text-gray-400 hover:text-white' }} transition-colors duration-300">
                        {{ __('Habilidades') }}
                    </a>
                    <a href="{{ route('admin.projects.index') }}" class="text-[10px] uppercase tracking-widest font-bold {{ request()->routeIs('admin.projects.*') ? 'text-gold-accent' : 'text-gray-400 hover:text-white' }} transition-colors duration-300">
                        {{ __('Projetos') }}
                    </a>
                    <a href="{{ route('admin.experiences.index') }}" class="text-[10px] uppercase tracking-widest font-bold {{ request()->routeIs('admin.experiences.*') ? 'text-gold-accent' : 'text-gray-400 hover:text-white' }} transition-colors duration-300">
                        {{ __('Experiências') }}
                    </a>
                    <a href="{{ route('admin.educations.index') }}" class="text-[10px] uppercase tracking-widest font-bold {{ request()->routeIs('admin.educations.*') ? 'text-gold-accent' : 'text-gray-400 hover:text-white' }} transition-colors duration-300">
                        {{ __('Educação') }}
                    </a>
                    <a href="{{ route('admin.posts.index') }}" class="text-[10px] uppercase tracking-widest font-bold {{ request()->routeIs('admin.posts.*') ? 'text-gold-accent' : 'text-gray-400 hover:text-white' }} transition-colors duration-300">
                        {{ __('Blog') }}
                    </a>
                    <a href="{{ route('admin.contacts.index') }}" class="text-[10px] uppercase tracking-widest font-bold {{ request()->routeIs('admin.contacts.*') ? 'text-gold-accent' : 'text-gray-400 hover:text-white' }} transition-colors duration-300">
                        {{ __('Mensagens') }}
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                    <div @click="open = ! open">
                        <button class="inline-flex items-center px-4 py-2 border border-white/10 text-xs font-bold uppercase tracking-widest rounded-xl text-gray-300 bg-white/5 hover:bg-white/10 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-2 text-gold-accent">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule_evenodd />
                                </svg>
                            </div>
                        </button>
                    </div>

                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 z-50 mt-2 w-48 rounded-xl shadow-2xl glass border border-white/10 overflow-hidden"
                         style="display: none;"
                         @click="open = false">
                        
                        <a href="{{ route('admin.profile.edit') }}" class="block w-full px-4 py-3 text-left text-xs font-bold uppercase tracking-widest text-gray-300 hover:bg-white/5 hover:text-gold-accent transition duration-150">
                            {{ __('Perfil') }}
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full px-4 py-3 text-left text-xs font-bold uppercase tracking-widest text-gray-300 hover:bg-white/5 hover:text-gold-accent transition duration-150">
                                {{ __('Sair') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-xl text-gray-400 hover:text-white hover:bg-white/5 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden glass-card border-none rounded-none">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('admin.dashboard') }}" class="block w-full ps-3 pe-4 py-3 border-l-4 {{ request()->routeIs('admin.dashboard') ? 'border-gold-accent text-gold-accent bg-white/5' : 'border-transparent text-gray-400 hover:text-white hover:bg-white/5' }} text-xs font-bold uppercase tracking-widest">
                {{ __('Painel') }}
            </a>
            <a href="{{ route('admin.skills.index') }}" class="block w-full ps-3 pe-4 py-3 border-l-4 {{ request()->routeIs('admin.skills.*') ? 'border-gold-accent text-gold-accent bg-white/5' : 'border-transparent text-gray-400 hover:text-white hover:bg-white/5' }} text-xs font-bold uppercase tracking-widest">
                {{ __('Habilidades') }}
            </a>
            <a href="{{ route('admin.projects.index') }}" class="block w-full ps-3 pe-4 py-3 border-l-4 {{ request()->routeIs('admin.projects.*') ? 'border-gold-accent text-gold-accent bg-white/5' : 'border-transparent text-gray-400 hover:text-white hover:bg-white/5' }} text-xs font-bold uppercase tracking-widest">
                {{ __('Projetos') }}
            </a>
            <!-- ... outros links ... -->
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-white/10">
            <div class="px-4">
                <div class="font-bold text-sm text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-xs text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <a href="{{ route('admin.profile.edit') }}" class="block w-full ps-3 pe-4 py-3 text-xs font-bold uppercase tracking-widest text-gray-400 hover:text-white hover:bg-white/5">
                    {{ __('Perfil') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full ps-3 pe-4 py-3 text-left text-xs font-bold uppercase tracking-widest text-gray-400 hover:text-white hover:bg-white/5">
                        {{ __('Sair') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>