@extends('nav')
@section('main')
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        NOTE APP <br>
                        {{$note->content}}
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/createnote" method="POST">
                        @csrf
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="" disabled value={{$note->title}}>
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Content</label>
                            <textarea name="content" id="" cols="4" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" disabled> {{$note->content}}</textarea>
                            
                            <label for="title" class="block mt-2 text-sm font-medium text-gray-900">Created At</label>
                            {{$note->created_at}}
                          
                        </div>
                     
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
