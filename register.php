<div class="wrapper animated fadeInDown">
<div class="panel overflow-hidden">
<div class="bg-teal-500 padding-top-25 no-padding-bottom font-size-20 color-white text-center text-uppercase">
<i class="ion-person-add margin-right-5"></i> Create a new account</div>
<form id="checkform" method="post"action="controller/register.php">
<div class="box-body padding-md">
<div class="row">
<div class="form-group col-lg-6">
<label for="firstname" class="control-label">Firstname</label>
<input type="text"name="fname" id="fname"class="form-control
input-lg"placeholder="Firstname" required="require"/>
</div>	
<div class="form-group col-lg-6">
   <label for="lastname" class="control-label">Lastname</label>
 <input type="text" name="lname" id="lname" class="form-control input-lg"
 placeholder="Lastname" required="required" />
 </div>
 <div class="from-group">
 <label for="username" class="control-label">Email</label> 
 <input	type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" required="required" />
 </div>
 <div class="form-group"> 
   <label for="password" class="control-label">Password</label>
   <input type="password" name="password" id="password" class="form-control
   input-lg" placeholder="Password" onchange="checkLength()"/>
   </div>  
   <div class="form-group"> <label for="username"class="control-label">Phone </label> 
   <input type="text" name="phone" id="phone" class="form-control input-lg"placeholder="Phone" required="required" />
   </div>
   <div class="row">
   <div class="form-group col-lg-6">
   <label for="firstname" class="control-label">Birth date</label>
   <input type="text" name="bdate" id="bdate" class="form-control input-lg" placeholder="DD/MM/YYYY" required="required" />
   </div>
   <div class="form-group col-lg-6">
   <label for="lastname" class="control-label">Gender</label>
   <select name="gender" id="gender" class="form-control input-lg" required="required"> 
   <option value="">Select Gender</option>
   <option value="male">Male</option>
   <option value="female">Female</option>
   </select>
   </div>
   </div> 
   <!-- <button type="submit" class="btn btn-dark bg-green-500 padding-10 btn-block color-white">create account</button> -->
   <button type="submit" class="btn btn-dark bg-light-green-500 padding-10 block color-white">create account</button> 
   <a href="index.php" class="btn btn-dark bg-light-green-500 padding-10 btn-block color-white">Cancel</a>
   </div>
   </form>
   </div>
   </div>
   <script type="text/javascript">
   function checkLength(){
   var textbox = document.getElementById("password");
   if(textbox.value.length <= 6){
   } 
   else{
     alert("password at least 6 character.");
    textbox.value = "";
    }
    }
    </script>
