<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

     <form method="POST" action="{{ route('update') }}" enctype="multipart/form-data">
     	@csrf
     	<input type="hidden" name="id" value="{{ $product->id }}">
          <input type="file" name="image" value="{{ asset('photos/'.$product->image) }}">
     	<input type="text" name="title" placeholder="Product Name" value="{{ $product->title }}">
     	<input type="text" name="price" placeholder="Price" value="{{ $product->price }}">
     	<input type="text" name="category_name" placeholder="Category Name" value="{{ $product->category_name }}">
     	<input type="number" name="category_id" placeholder="Category ID" value="{{ $product->category_id }}">
     	<textarea name="description" placeholder="Description">{{ $product->description }}"</textarea>
     	<button>Save Changes</button>
     </form>


</body>
</html>