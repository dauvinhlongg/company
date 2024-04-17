<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        @foreach ($listPosts as $item)
        {{$item->title }}
    @endforeach    
        
    </body>
    </html>
</div>
