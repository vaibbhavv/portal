
<!DOCTYPE html>

<html>
<head>
	<title>
		registration page
		 	</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style1.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="bg">
  <div class=""></div>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-3 col-sm-3 col-xs-12"></div>
  			<div class="col-md-6 col-sm-6 col-xs-12">

              <form class="form-container " method="post" autocomplete="nope" id="myform">
                <input style="display:none">
              	<h1 style="padding-bottom: 10px;text-transform:  uppercase;text-align: center; border-bottom: 2px solid black;">Patient Portal</h1>
 
      
      	     <label style="padding-top: 10px;font-weight: bold;">Name :</label>
      	     <div class="form-row">
      	     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="finame" placeholder="First Name" autocomplete="nope" name="first" >
      <span id ="show_error0" ></span>
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="lname" placeholder="Last Name" autocomplete="nope" name="last">
       <span id ="show_error1" ></span>
    </div>

    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="fname" style="font-weight: bold; ">Father Name :</label>
    <input type="text" class="form-control"  id="fname" placeholder="Full Name" autocomplete="nope" name="father"
    value="">
    <span  id ="show_error2" ></span></div>
    <div class="form-group col-md-6">
       <label for="email" style="font-weight: bolder;">Email :
       </label>
    <input type="text" class="form-control" id="email" placeholder="Ex : xy@gmail.com" autocomplete="nope" name="email"  >
    <span id ="show_error4" ></span>
  </div> 
  </div>
   <div class="form-group">
    
    <label for="number" style="font-weight: bold;">Mobile No :</label>
    
    <input type="text" class="form-control" id="number" placeholder="Ex : 98******79 ,don't use 0 or +91" autocomplete="nope" name="mobile">
    <span  id ="show_error3" ></span>
  </div>
   
  
  <div class="form-group">
    <label for="inputAddress2"  style="font-weight: bold;">Address : </label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" autocomplete="nope" name="address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity"  style="font-weight: bold;">City :</label>
      <input type="text" class="form-control" id="inputCity" autocomplete="nope" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState"  style="font-weight: bold;">State</label>
      <select id="inputState" class="form-control" name="state" >
        <option selected style="font-weight: bold;" >Choose...</option>
        <option>Assam</option>
        <option>Rajasthan</option>
        <option>Uttar Pradesh</option>
        <option>Uttarakhand</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip"  style="font-weight: bold;">Zip</label>
      <input type="text" class="form-control" id="inputZip" autocomplete="nope" name="zip">
    </div>
  </div>
   <div class="form-group">

   
<label  style="font-weight: bold;">Appointment With : </label><label class="radio-inline">
      <input type="radio" name="optradio" id="appoint" value="Doctor">Doctor
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Department" >Department
    </label>
  </div>

   <div class="form-group">
    
    <label  style="font-weight: bold;">Symptoms :</label>
    
    <input type="text" class="form-control" id="symptoms" placeholder="Mention all the symptoms (Ex : fever,cough..)" autocomplete="nope" name="symp">
    
  </div>

 

 
  
  
  <input type="button" class=" btn-success btn-block" id="onsubmit" value="submit" autocomplete="off" name="submit">
    </form>
  			</div>	
  		<div class="col-md-3 col-sm-3 col-xs-12"></div>		
  		
  	</div>
  	
  </div>
  <div><br>
     
     <h1 class="text-center" style="border-bottom: 2px solid black;padding-top: 10px; padding-bottom: 10px" >Display Data</h1>
    
   
     <table class="table table-striped table-bordered text-center thead-dark ">
       <thead class="thead-dark"> 
        
         <th >First</th>
         <th >LAst</th>
         <th >Father Name</th>
         <th >Email</th>
         <th >Mobile</th>
         <th >Address</th>
         <th >City</th>
         <th >State</th>
         <th >Zip</th>
          <th >Appointment </th>
           <th >Symptoms</th>

       </thead>
       <tbody style="font-weight:bold;">
         <tr>
      <td id="data1"></td>
      <td id="data2"></td>
      <td id="data3"></td>
      <td id="data4"></td>
      <td id="data5"></td>
      <td id="data6"> </td>
      <td id="data7"></td>
      <td id="data8"></td>
      <td id="data9"></td>
      <td id="data10"></td>
      <td id="data11"></td>

         </tr>
       </tbody>
     </table>

  </div>




 
  	<script type="text/javascript">
  
 $(document).ready(function(){
   $('#onsubmit').click(function(){

      var finame=$('#finame').val();
      var lname=$('#lname').val();
      var fname= $('#fname').val();
      var number=$('#number').val();
      var email=$('#email').val();
      var address=$('#inputAddress2').val();
      var city=$('#inputCity').val();
      var state=$('#inputState').val();
      var zip=$('#inputZip').val();
      var appoint=$("input[name='optradio']:checked").val();
      var symptoms=$('#symptoms').val();
      var alpha= /^[a-zA-Z ]+$/;
      var num = /^[1-9]{1}[0-9]{9}$/;
      var emailpattern=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
      var datastring='finame='+finame+'&lname='+lname+'&fname='+fname+'&number='+number+'&email='+email+'&address='+address+'&city='+city+'&zip='+zip+'&appoint='+appoint+'&symptoms='+symptoms+'&state='+state;
       var a=true;
     
         if (!alpha.test(finame)){
        $('#show_error0').html('Invalid first name');
        $('#show_error0').css('color','red');
         a=false;
}
      
        if (!alpha.test(lname)){
        $('#show_error1').html('Invalid last name');
        $('#show_error1').css('color','red');
         a=false;
}

      

           if (!alpha.test(fname)){
        $('#show_error2').html('Enter the valid name');
        $('#show_error2').css('color','red');
         a=false;
}
     if (!num.test(number)) {
     	 $('#show_error3').html('Enter the valid Number');
        $('#show_error3').css('color','red');
        a= false;
     }
    
  

     if (!emailpattern.test(email)) {
     	$('#show_error4').html('Enter the valid email');
     	$('#show_error4').css('color','red');
     	a=false;
     }

     if ((!($('#workPermitYesRadio').prop('checked'))) && (!($('#workPermitNoRadio').prop('checked')))) {

     }
          if(a==true){
            $.ajax({

               url:'ajaxsubmit.php',
               type:'POST',
               data :datastring,
               success :function(response){
                console.log(response);
               }
             

            });
            $('#data1').html(finame); 
            $('#data2').html(lname); 
            $('#data3').html(fname); 
            $('#data4').html(email); 
            $('#data5').html(number); 
            $('#data6').html(address); 
            $('#data7').html(city); 
            $('#data8').html(state); 
            $('#data9').html(zip); 
            $('#data10').html(appoint); 
            $('#data11').html(symptoms); 
          }


   });

    $('#finame').focus(function(){
      $('#show_error0').html('');
    });

    $('#lname').focus(function(){
      $('#show_error1').html('');
    });

     $('#fname').focus(function(){
      $('#show_error2').html('');
    });

      $('#number').focus(function(){
      $('#show_error3').html('');
    });
       
        $('#email').focus(function(){
      $('#show_error4').html('');
    });

       });
         
       
 
  
// style="color:red;"><?php echo @$name_error; ?>//


  
  </script>
</body>
</html>
