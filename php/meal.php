<?php
	
	class Meal
	{
		private $meal;
		function __construct()
        {
        	include 'meals.php';
            $this->meal = $meals;
        }
        function getAllMeals(){
        	$output = '';
        	foreach ($this->meal as $key => $value) {
        	
        	$output.= '
			
			

			<div class="card border-0 col-lg-3 col-md-4 col-sm-12" >

	       
			  
	            
			  <a href="detail.php?id='.$value["id"].'">

			  <img class="card-img-top" src="projectImages/'.$value["image"].'">
	            </a>
	          

	          <div class="gallery-box card-body ">
	            <div class="con1"><a href="detail.php?id='.$value["id"].'">
	                <p  class="card-text">⭐'.$value["rating"].' rating</p>
	                <p  class="card-text">'.$value["title"].'</p>
	                <p class="card-text">some</p>
	              </a>
	            </div>
	            <button class="gallery-button rounded-pill btn-sm " id="'.$value["id"].'" onclick="card(this.id)">add to cart</button>
	            <p card-text gallery-price>'.$value["price"].' SAR</p>
	          </div>
	        </div>
			
			
			
			
			';
        	}
        	return $output;
        }
        function getMealById($id){
        foreach ($this->meal as $key => $value) {
        if ($value["id"]==$id) {
        return $value;
        }	
        }	
        } 

	} 


?>