<x-layout>
    @include('sections.header')

    <main>
        @include('sections.hero')
        <!-- @include('sections.stats') -->
        @include('sections.about')
        @include('sections.services')
        @include('sections.projects')
        @include('sections.skills')
        @include('sections.resume')
        <!-- @include('sections.testimonials') -->
        <!-- @include('sections.ebook') -->
        @include('sections.blog')
        @include('sections.contact')
    </main>

    @include('sections.footer')
</x-layout>