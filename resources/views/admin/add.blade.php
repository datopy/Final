<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     
     <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
     	@csrf
     	<input type="text" name="title" placeholder="Product Name">
     	<input type="text" name="price" placeholder="Price">
     	<input type="text" name="category_name" placeholder="Category Name">
     	<input type="number" name="category_id" placeholder="Category ID">
     	<textarea name="description" placeholder="Description"></textarea >
          <input type="file" name="image" class="form-control">
     	<button>Save Product</button>
     </form>


</body>
</html>