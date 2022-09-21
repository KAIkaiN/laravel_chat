<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="bg-orange-50">
        <div class="w-11/12 max-w-screen-md m-auto">
            {{--フォーム--}}
            <div class="bg-white rounded-md mt-5 p-3">
                <form action="/" method="POST">
                    @csrf
                    <div class="flex">
                        <p class="font-bold">お名前</p>
                        <input class="border rounded px-2 ml-2" type="text" name="">
                    </div>
                    <div class="flex mt-2">
                        <p class="font-bold">タイトル</p>
                        <input class="border rounded px-2 ml-2 flex-auto" type="text" name="">
                    </div>
                    <div class="flex flex-col mt-2">
                        <p class="font-bold">コメント</p>
                        <textarea class="border rounded px-2" name=""></textarea>
                    </div>
                    <div class="flex justify-end mt-2">
                        <input class="my-2 px-2 py-1 rounded bg-blue-300 text-blue-900 font-bold link-hover cursor-pointer" type="submit" value="投稿">
                    </div>
                </form>
            </div>

            {{-- 投稿 --}}
            @foreach ( $threads as $thread )
                <div class="bg-white rounded-md mt-1 mb-1 p-3">
                    {{-- スレッド --}}
                    <div>
                        <p class="mb-2 text-xs">{{$thread->created_at}} ＠{{$thread->user_name}}</p>
                        <p class="mb-2 text-xl font-bold">{{$thread->message_title}}</p>
                        <p class="mb-2">{{$thread->message}}</p>
                    </div>
                    {{-- 削除ボタン --}}
                    <form class="flex justify-end mt-5" action="/" method="POST">
                        @csrf
                        <input class="border rounded px-2 flex-auto" type="text" name="reply_message">
                        <input class="px-2 py-1 ml-2 rounded bg-green-600 text-white font-bold link-hover cursor-pointer" type="submit" value="返信">
                        <input class="px-2 py-1 ml-2 rounded bg-red-500 text-white font-bold link-hover cursor-pointer" type="submit" value="削除">
                    </form>
                    {{-- 返信 --}}
                    <hr class="mt-2 m-auto">
                    <div class="flex justify-end">
                        <div class="w-11/12">
                            @foreach ($thread->replies as $reply)
                                <p class="mt-2 text-xs">{{$reply->created_at}} ＠{{$reply->user_name}}</p>
                                <p class="my-2 text-sm">{{$reply->message}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
