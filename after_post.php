<?php include 'includes/header_student.inc.php'?>
<style>
/*not necessary*/
@import url('https://fonts.googleapis.com/css?family=Nunito:100,300,400,600,700');
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
body{font-family:Nunito,arial,sans-serif;}
.section{float:left;width:100%;background: #fff;padding:30px 0;}
.promote{border:1px dashed #ddd;display:flex; height:100%;justify-content: center;flex-direction: column;align-items: stretch;}
.col-md-4{padding:15px;}

/*not necessary*/


.profile-card-2 .card-img-block{
    float:left;
    width:100%;
    height:150px;
    overflow:hidden;
}
.profile-card-2 .card-body{
    position:relative;
}
.profile-card-2 .profile {
  border-radius: 50%;
  position: absolute;
  top: -42px;
  left: 15%;
  max-width: 75px;
  border: 3px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.profile-card-2 h5{
    font-weight:600;
    color:#007bff;
}
.profile-card-2 .card-text{
    font-weight:300;
    font-size:15px;
}
.profile-card-2 .icon-block{
    float:left;
    width:100%;
}
.profile-card-2 .icon-block a{
    text-decoration:none;
}
.profile-card-2 i {
  display: inline-block;
    font-size: 16px;
    color: #007bff;
    text-align: center;
    border: 1px solid #007bff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-2 i:hover {
  background-color:#007bff;
  color:#fff;
}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<div class="container w-75">
<h3 class="text-center">On the basis of your location and criteria this is the auto match</h3>

<div class="card">
  <div class="card-body">
    <h2 class="card-title">AICTE</h2>
    <h6 class="card-subtitle mb-2 text-muted">Internship for Big Data</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<?php
include './src/php/dbh.php';
if(isset($_GET['city']))
{
$city=$_GET['city'];
$sql="SELECT * FROM `student_register` WHERE `student_register`.`location_u` = '$city'";
$res=mysqli_query($conn,$sql);
if($res)
{
?>

<div class="section">
    <div class="container">
     
    	<div class="row">
            <div class="col-md-12">
    	    </div>
    	</div>
    	<div class="row">
     
        
        <?php 
        while($row=mysqli_fetch_assoc($res))
              {
  echo'          <div class="col-md-4">
  
              <div class="card profile-card-2">
                        <div class="form-group float-right form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                        </br >
                      <div class="card-img-block" >
                          <img class="img-fluid" src="https://images.pexels.com/photos/877695/pexels-photo-877695.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Card image cap" />
                      </div>
                      <div class="card-body pt-5">
                          <img src="https://randomuser.me/api/portraits/women/81.jpg" alt="profile-image" class="profile"/>
                          <h5 class="card-title">
                          <a href="./user_profile.php">
                          '.$row['first_name'].'
                          </a>
                          </h5>
                          <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry standard dummy text</p>
                          <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Call for Internview</button>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">Hold</button>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">Reject</button>
                          <a href="./chat_profile_student.php" class="btn btn-primary">Message</a>

                      </div>
                      </div>
                  </div>
              
              ';
        }
      }
    }
else{
        $sql="SELECT * FROM `student_register`";
        $res=mysqli_query($conn,$sql);
if($res)
{
  while($row=mysqli_fetch_assoc($res))
  {
echo'          <div class="col-md-4">

  <div class="card profile-card-2">
            <div class="form-group float-right form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            </br >
          <div class="card-img-block" >
              <img class="img-fluid" src="https://images.pexels.com/photos/877695/pexels-photo-877695.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Card image cap" />
          </div>
          <div class="card-body pt-5">
              <img src="https://randomuser.me/api/portraits/women/81.jpg" alt="profile-image" class="profile"/>
              <h5 class="card-title">
              <a href="./user_profile.php">
              '.$row['first_name'].'
              </a>
              </h5>
              <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry standard dummy text</p>
              <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Call for Internview</button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">Hold</button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">Reject</button>
              <a href="./chat_profile_student.php?uid='.$row['uid'].' class="btn btn-primary">Message</a>

          </div>
          </div>
      </div>
  
  ';
}
}
      }
?>
          </div>
    	</div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Information of a candidate</h5>


      <!--   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <h5>Interview Details</h5>
      <textarea name="id4" id="id4" cols="50" rows="10">
        </textarea>
      <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Interview Location</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Interview Location" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Interview Timing</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Interview Timing" title="enter your last name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Documents Required</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Documents Required" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Contact person email</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Contact person email" title="enter your mobile number if any.">
                          </div>
                      </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Information of a candidate</h5>


       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> 
      </div>
      <div class="modal-body">
      <h6>Please Enter the Reason for Keeping the Intern on Hold</h6>
        <textarea name="id4" id="id4" cols="50" rows="10">
        </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Information of a candidate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> 
      </div>
      <div class="modal-body">
      <h6>Please Enter the Reason for Rejecting the candidate</h6>
        <textarea name="id4" id="id4" cols="50" rows="10">
        </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Information of a candidate</h5>


         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h6>Please write the Message Below</h6>
        <textarea name="id4" id="id4" cols="50" rows="10">
        </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
   $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>