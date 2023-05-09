<div class="row">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
		<div class="container">
			<div class="row">
		

			<div class="col-md-3">
			<div class="card-counter danger">
				<i class="fa fa-th"></i>
				<span class="count-numbers"><?php $query = $this->db->query('SELECT * FROM tblcategories'); echo $query->num_rows();?></span>
				<span class="count-name">Categories</span>
			</div>
			</div>

			<div class="col-md-3">
				<div class="card-counter primary">
					<i class="fa fa-bars"></i>
					<span class="count-numbers"><?php $query = $this->db->query('SELECT * FROM tblproducts'); echo $query->num_rows();?></span>
					<span class="count-name">Products</span>
				</div>
				</div>

			<div class="col-md-3">
			<div class="card-counter info">
				<i class="fa fa-file-text-o"></i>
				<span class="count-numbers"><?php $query = $this->db->query('SELECT * FROM tblorders'); echo $query->num_rows();?></span>
				<span class="count-name">Total Orders</span>
			</div>
			</div>

			<div class="col-md-3">
			<div class="card-counter success">
				<i class="fa fa-dollar"></i>
				<span class="count-numbers">$<?php $query = $this->db->query('SELECT SUM( order_total)as total FROM tblorders')->row(); echo floatval($query->total);?></span>
				<span class="count-name">Earnings</span>
			</div>
			</div>
		</div>
		</div>
			
	

</div>


<style>

.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #888888;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.7;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 29px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    text-transform: capitalize;
    opacity: 0.7;
    display: block;
    font-size: 18px;
  }

</style>