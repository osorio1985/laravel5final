<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen flex flex-col justify-center items-center">
<div class="bg-gray-300 rounded-md  w-2/3 flex flex-col gap-1 p-6">
    @foreach ($categories as $category)
        <div>
            <h2 class="text-3xl">{{ $category->name}}</h2>
            @foreach ($category->items as $item)
            <ul class="list-disc">
                <li> {{ $item->name}}</li>
            </ul>
            @endforeach
        </div>
    @endforeach
</div>
    </div>
   
</body>
</html> 