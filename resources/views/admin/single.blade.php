<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     
     <div>
          <div>
               <img src="{{ asset('photos/'.$product->image) }}">
          </div>
          <hr>
     	<div>Product Name :: {{ $product->title }}</div>
     	<hr>
     	<div>Price :: {{ $product->price }}</div>
     	<hr>
     	<div>Categorty Name :: {{ $product->category_name }}</div>
     	<hr>
     	<div>Categorty ID :: {{ $product->category_id }}</div>
     	<hr>
     	<div>Description :: {{ $product->description }}</div>
          <hr>     
          <div>Upload Time :: {{ $product->created_at }}</div>
     </div>
     <hr>
     <form method="POST" action="{{ route('comment') }}">
     	@csrf
     	<input type="hidden" name="product_id" value="{{ $product->id }}">
     	<textarea name="comment"></textarea>
     	<button>Comment</button>
     </form>
     <hr>
     @foreach ($comments as $comment)
          <p>{{ $comment->comment }}</p>
          <hr>
     @endforeach


</body>
</html>