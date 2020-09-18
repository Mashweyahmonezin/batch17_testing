@extends('frontend.master')
@section('content')
<div class="site-section site-hero inner">
     <div class="container">
     	<h1 class="text-center text-white">Your Shopping Cart</h1>
     </div>
     <div class="container">
     <div class="row mt-5 shop_div">
     	<div class="table-responsive">
     		<table class="table">
     			<thead>
     				<tr>
     					<th></th>
     					<th>Name</th>
     					<th></th>
     					<th>Qty</th>
     					<th></th>
     					<th>Price</th>
     					<th>Total</th>
     				</tr>
     			</thead>
     			<tbody id="shop_table">
     				
     			</tbody>
     		</table>
     	</div>
     </div>
     </div>
</div>
@endsection
