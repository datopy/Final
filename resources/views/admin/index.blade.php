<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,tr,td,th{
			border: solid 2px black;
			border-collapse: collapse;
			padding: 8px;
		}
	</style>
</head>
<body>

     <table>
     	<tr>
     		<th>#</th>
               <th>Image</th>
     		<th>Title</th>
     		<th>Price</th>
     		<th>Category Name</th>
     		<th>Category ID</th>
            <th>Description</th>
     		<th>Upload Time</th>
            <th>
                <a href="{{ route('add') }}">Add New Product</a>
            </th>
     	</tr>
     	@foreach ($products as $product)
     		<tr>
     			<td>{{ ++$loop->index }}</td>
                    <td>
                       <img src="{{ asset('photos/'.$product->image) }}">    
                    </td>
     			<td>{{ $product->title }}</td>
     			<td>{{ $product->price }}</td>
     			<td>{{ $product->category_name }}</td>
     			<td>{{ $product->category_id }}</td>
                    <td>{{ $product->description }}</td>
     			<td>{{ $product->created_at }}</td>
     			<td>
     			<a href="{{ route('show',['id'=>$product->id]) }}">Show</a>
     			<a href="{{ route('edit',['id'=>$product->id]) }}">Edit</a>
     			<form method="POST" action="{{ route('delete') }}">
     				@csrf
     				<input type="hidden" name="id" value="{{ $product->id }}">
     				<button>Delete</button>
     			</form>
     		    </td>
                   <td>
                        <a href="{{ route('add') }}">Add New Product</a>
                   </td>
     		</tr>
     		
     	@endforeach
     </table>
   


</body>
</html>