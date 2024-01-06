<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Images</title>
    <style>
        body{
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1{
            color: #333;
        }

        #cat-images-container{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        img{
            width: 200px;
            height: 150px;
            object-fit: cover;
            margin: 10px;
        }

        button{
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Cat Images</h1>

<div id="cat-images-container">
    @if(isset($catImages) && is_array($catImages) && count($catImages) > 0)
        @foreach($catImages as $catImage)
            <img src="{{ $catImage['url'] }}" alt="Cat Image">
        @endforeach
    @else
        <p>No cat images available.</p>
    @endif
</div>

<button id="load-more-btn">Load More</button>

<script>
    const loadMoreBtn = document.getElementById('load-more-btn');

    loadMoreBtn.addEventListener('click', () => {
        location.reload(); //Reload page
    });
</script>

</body>
</html>
