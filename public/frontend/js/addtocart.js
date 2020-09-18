$(document).ready(function(){
	 update_cart_count();
	show_cart();
	$('.btn').click(function(){
		
		var id=$(this).data('id');
		var name=$(this).data('name');
		var price=$(this).data('price');
		
		var product={
			id:id,
			name:name,
			price:price,
			quantity:1
		};
		add_to_cart(product);
		update_cart_count();

	})
	function add_to_cart(product){
		var mycart=localStorage.getItem('mycart');
		console.log(mycart);
		if(!mycart){
			mycart='{"item_list":[]}';

		}
		var mycart_obj=JSON.parse(mycart);
		var has_id=false;
		$.each(mycart_obj.item_list,function(i,v){
			if(v.id==product.id){
				has_id=true;
				v.quantity++;
			}
		})

		if(!has_id){
			mycart_obj.item_list.push(product);
		}

		console.log(mycart_obj);

		localStorage.setItem('mycart',JSON.stringify(mycart_obj))
	}
	function update_cart_count(){
		var mycart=localStorage.getItem('mycart');

		if(mycart){
			var mycart_obj=JSON.parse(mycart);

			if(mycart_obj.item_list.length) {
				var total=0;
				$.each(mycart_obj.item_list,function(i,v){
					total+=v.quantity;
				})
				$(".noti").html(total);
			}
		}
	}
	function show_cart()
  {
    var mycart = localStorage.getItem('mycart');
    
    if(mycart)
    {
      var mycart_obj = JSON.parse(mycart);
 
      if(mycart_obj.item_list.length){
       
        var data = '';
        
        var total=0;
       
        $.each(mycart_obj.item_list,function(i,v){
        	if(v){
          var id=v.id;
          var name = v.name;
          var price = v.price;
          
          var qty = v.quantity;
          var subtotal = qty*price;
          total+=parseInt(subtotal);

          data += `<tr>
          				<td>
          					<button class="btn btn-outline-danger remove btn-sm" data-id=$id style="border-radius: 50%"> 
          						<i class="icofont-close-line"></i> 
          					</button> 
          				</td>
          				<td> 
          					<p> ${name} </p>
          					
          				</td>
          				<td>
          					<button class="btn btn-outline-secondary plus_btn" data-id=${v.id}> 
          						<i class="icofont-plus"></i> 
          					</button>
          				</td>
          				<td>
          					<p> ${qty} </p>
          				</td>
          				<td>
          					<button class="btn btn-outline-secondary minus_btn" data-id=${v.id}> 
          						<i class="icofont-minus"></i>
          					</button>
          				</td>
          				<td>
          					<p class="text-danger"> 
          						${price} Ks
          					</p>
          					<p class="font-weight-lighter"> 
          					<del> 25,000000Ks </del> </p>
          				</td>
          				<td>
          					${subtotal} Ks
          				</td>
          			</tr>`;
          		}
         // html+=`<tr><td>${j++}</td><td>${name}</td><td><img src="${image}" width="300px" height="200px"></td><td><i class="fas fa-plus-circle qtyplus" data-id=${id}></i>${qty}<i class="fas fa-minus-circle qtyminus" data-id=${id} data-i=${i}></i></td><td>${price}</td><td>${subtotal}</td><td><button class="danger" data-id=${i}>Delete</button></td></tr>`;
       });
        
        data+=`<tr><td colspan=6>
        				Totla
        			</td>
        			<td>
        				${total}Ks
        			</td>`;

        $('#shop_table').html(data);
      	$('#alltotal').html(total);
      }
      else{
      	    $('#shop_table').html('');

      }
    }
    
  }


})