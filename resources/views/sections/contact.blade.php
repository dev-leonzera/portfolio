<section id="contact" class="bg-deep-black py-24 md:py-32 px-4 relative">
    <div class="container mx-auto max-w-7xl">
        <div class="grid md:grid-cols-2 gap-16 lg:gap-24 items-start">
            <div class="reveal-left">
                <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-6">{{ __('messages.contact.title') }}</h2>
                <h3 class="text-4xl md:text-6xl font-bold text-white mb-8 tracking-tight font-outfit">{!! __('messages.contact.subtitle') !!}</h3>
                <p class="text-gray-400 text-lg leading-relaxed font-light mb-12">
                    {{ __('messages.contact.description') }}
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 glass flex items-center justify-center rounded-xl mr-6 text-gold-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 uppercase tracking-widest font-bold">{{ __('messages.contact.email') }}</p>
                            <p class="text-white font-medium">leonandrade22@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 glass flex items-center justify-center rounded-xl mr-6 text-gold-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 uppercase tracking-widest font-bold">{{ __('messages.contact.phone') }}</p>
                            <p class="text-white font-medium">(84) 99666-7335</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal-right glass-card p-10" x-data="{ loading: false, success: {{ session('success') ? 'true' : 'false' }}, error: false }">
                <template x-if="success">
                    <div class="mb-6 p-4 rounded-xl bg-green-500/10 border border-green-500/20 text-green-400 text-sm flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        {{ __('messages.contact.success') }}
                    </div>
                </template>

                @if($errors->any())
                    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 text-sm">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" @submit="loading = true">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1">{{ __('messages.contact.name') }}</label>
                            <input type="text" name="name" value="{{ old('name') }}" required class="w-full bg-rich-black border border-white/5 rounded-xl py-4 px-6 text-white focus:outline-none focus:border-gold-accent/50 transition duration-300" placeholder="{{ __('messages.contact.placeholder_name') }}">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1">{{ __('messages.contact.email') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}" required class="w-full bg-rich-black border border-white/5 rounded-xl py-4 px-6 text-white focus:outline-none focus:border-gold-accent/50 transition duration-300" placeholder="{{ __('messages.contact.placeholder_email') }}">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1">{{ __('messages.contact.message') }}</label>
                        <textarea name="message" rows="5" required class="w-full bg-rich-black border border-white/5 rounded-xl py-4 px-6 text-white focus:outline-none focus:border-gold-accent/50 transition duration-300 resize-none" placeholder="{{ __('messages.contact.placeholder_message') }}">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="w-full btn-premium py-5 flex justify-center items-center" :disabled="loading">
                        <span x-show="!loading">{{ __('messages.contact.send') }}</span>
                        <svg x-show="loading" class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
