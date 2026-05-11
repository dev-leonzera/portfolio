<x-admin-layout>
    <x-slot name="header">
        Novo Post
    </x-slot>

    <div class="max-w-5xl">
        <div class="glass-card p-10">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="title" class="form-label-premium">Título do Artigo (PT)</label>
                        <input type="text" name="title" id="title" class="form-input-premium" value="{{ old('title') }}" placeholder="Título impactante" required>
                        @error('title')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="title_en" class="form-label-premium">Article Title (EN)</label>
                        <input type="text" name="title_en" id="title_en" class="form-input-premium" value="{{ old('title_en') }}" placeholder="Title in English">
                        @error('title_en')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8">
                    <div>
                        <label for="category_id" class="form-label-premium">Categoria</label>
                        <select name="category_id" id="category_id" class="form-input-premium appearance-none bg-deep-black">
                            <option value="">Sem Categoria</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="space-y-8">
                    <div>
                        <label for="content" class="form-label-premium">Conteúdo (PT)</label>
                        <div class="editor-container dark-editor">
                            <textarea name="content" id="content_editor">{{ old('content') }}</textarea>
                        </div>
                        @error('content')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="content_en" class="form-label-premium">Content (EN)</label>
                        <div class="editor-container dark-editor">
                            <textarea name="content_en" id="content_en_editor">{{ old('content_en') }}</textarea>
                        </div>
                        @error('content_en')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="image" class="form-label-premium">Imagem de Capa</label>
                        <div class="relative group/file">
                            <input type="file" name="image" id="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept="image/*">
                            <div class="w-full bg-white/5 border border-white/5 border-dashed rounded-xl py-6 px-6 text-center group-hover/file:border-gold-accent/30 transition duration-300">
                                <div class="text-gold-accent mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <p class="text-[10px] text-gray-400">Selecionar Capa</p>
                            </div>
                        </div>
                        @error('image')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="published_at" class="form-label-premium">Data de Publicação</label>
                        <input type="datetime-local" name="published_at" id="published_at" class="form-input-premium py-3" value="{{ old('published_at', date('Y-m-d\TH:i')) }}">
                        @error('published_at')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-white/5">
                    <a href="{{ route('admin.posts.index') }}" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit" class="btn-premium py-4 px-10 text-xs">
                        Publicar Artigo
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }
            upload() {
                return this.loader.file.then(file => new Promise((resolve, reject) => {
                    this._initRequest();
                    this._initListeners(resolve, reject, file);
                    this._sendRequest(file);
                }));
            }
            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }
            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.posts.upload') }}', true);
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                xhr.responseType = 'json';
            }
            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${file.name}.`;

                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;
                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }
                    resolve({
                        default: response.location
                    });
                });

                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }
            _sendRequest(file) {
                const data = new FormData();
                data.append('file', file);
                this.xhr.send(data);
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }

        const editorConfig = {
            extraPlugins: [MyCustomUploadAdapterPlugin],
            toolbar: [
                'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|',
                'insertTable', 'imageUpload', 'undo', 'redo', 'codeBlock'
            ]
        };

        ClassicEditor
            .create(document.querySelector('#content_editor'), editorConfig)
            .catch(error => { console.error(error); });

        ClassicEditor
            .create(document.querySelector('#content_en_editor'), editorConfig)
            .catch(error => { console.error(error); });
    </script>
    <style>
        .ck-editor__editable {
            min-height: 400px;
            background-color: #0A0A0A !important;
            color: white !important;
            border-bottom-left-radius: 0.75rem !important;
            border-bottom-right-radius: 0.75rem !important;
        }
        .ck-toolbar {
            background-color: #1A1A1A !important;
            border: 1px solid rgba(255, 255, 255, 0.05) !important;
            border-top-left-radius: 0.75rem !important;
            border-top-right-radius: 0.75rem !important;
        }
        .ck.ck-editor__main>.ck-editor__editable.ck-focused {
            border-color: #FBBF24 !important;
        }
        .ck.ck-reset_all, .ck.ck-reset_all * {
            color: #333 !important;
        }
    </style>
    @endpush
</x-admin-layout>