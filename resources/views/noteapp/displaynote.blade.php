@extends('nav')
@section('main')
    <section>
        {{-- {{$notes}} --}}
        <a href="/noteapp">
            CREATE NOTE
        </a>
       <div class="relative overflow-x-auto">
           <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                   <tr>
                       <th scope="col" class="px-6 py-3">
                           #
                       </th>
                       <th scope="col" class="px-6 py-3">
                           Title
                       </th>
                       <th scope="col" class="px-6 py-3">
                           Content
                       </th>
                       <th scope="col" class="px-6 py-3">
                           Created at
                       </th>
                       <th scope="col" class="px-6 py-3">
                           
                       </th>
                   </tr>
               </thead>
               <tbody>
                @foreach ($notes as $note)
                    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{$note->note_id}}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$note->title}}
                    </th>
                    <td class="px-6 py-4">
                           {{$note->content}}
                           
                        </td>
                        <td class="px-6 py-4">
                           {{$note->created_at}}
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                           <a href="/viewnote/{{$note->note_id}}">
                            <button>View</button>
                            </a>
                           <a href="/editnote/{{$note->note_id}}">
                            <button>Edit</button>
                            </a>
                           <a href="/deletenote/{{$note->note_id}}">
                            <button>Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
               </tbody>
           </table>
       </div>
       
    </section>
@endsection