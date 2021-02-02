<?php

function component($productname,$productprice,$productimg,$producttext,$productid){



	$element="
	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
		<form  method=\"post\">
			<div class=\"card shadow\">
				<div>
					<img src=\"$productimg\" alt=\"image1\" class=\"mg-fluid card-img-top\">
				</div>
					<div class=\"card-body\">
						<h5 class=\"card-title\">$productname</h5>
						<p class=\"card-text\">
							$producttext
						</p>
						<h5>
						<span class=\"price\">$productprice din</span>
						</h5>
						<button type=\"submit\" class=\"btn btn-danger my-3\" name=\"add\">Dodaj u korpu<i class=\"fas fa-shopping-cart\"></i></button>
						<input type=\"hidden\" name=\"product_id\" value=\"$productid\">
					</div>
			</div>
		</form>
	</div>";
	
								
		
	
	
	echo $element;
	
}

function cartElement($productimg,$productname,$productprice,$producttext,$productid){
	$element="<form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
				<div class=\"border rounded\">
					<div class=\"row bg-white\">
						<div class=\"col-md-5\">
							<img src=$productimg alt=\"image1\" class=\"img-fluid\">
						</div>
						<div class=\"col-md-7\">
							<h5 class=\"pt-2\">$productname</h5>
							<small class=\"text-secondary\">$producttext</small>
							<h5 class=\"pt-2\">$productprice din</h5>
							<button type=\"submit\" class=\"btn btn-primary\">Sacuvaj za kasnije</button>
							<button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Ukloni</button>
						</div>
						<div class=\"col-md-5\">
							<div>
								<button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
								<input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
								<button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
							</div>
						</div>
					</div>
				</div>
			</form> ";
			
			
	echo $element;
	
	
	
	
	
	
}







?>