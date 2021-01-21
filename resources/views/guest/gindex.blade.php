@extends("layouts.app")
@section("content")

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
               <th>Description</th>
     		<th>Upload Time</th>
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
                    <td>{{ $product->description }}</td>
     			<td>{{ $product->created_at }}</td>               
     			<td>
     			<a href="{{ route('gshow',['id'=>$product->id]) }}">Show</a>
     		    </td>
     		</tr>	
     	@endforeach
     </table>
   
@endsection
