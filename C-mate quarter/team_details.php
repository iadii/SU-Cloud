<?php
	require_once('funs.php');
	session_start();
	check_session();
	$email = $_SESSION['email'];
	$row = array();
	$row = get_member_data($email);
	$id = $row['id'];
	$name = $row['name'];
	$role = $row['role'];
	$pic = $row['pic'];
	$last_login = $row['last_login'];
	$last_login = date('jS M Y H:i', strtotime($last_login));
	$total_members = get_all_status();
	$core_members = get_vip_status();
	$total_sessions = total_sessions();
	$completed_sessions = completed_sessions();
	
	starter($id,$name,$role,$pic,$last_login,$total_members,$core_members,$total_sessions,$completed_sessions);

?>
	  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style sheet -->
    <link rel="stylesheet" href="team_details.css">

    <!-- Google Fonts -->
    
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- FOnt Awesome -->
    
	<script src="https://use.fontawesome.com/c250a4b18e.js"></script>

    <title>Our Team page</title>
    <style>
        .teams{
            Display: flex;
            justify-content:space-between;
        }
        .team{
            margin: 20px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="section-title">
            <h1>Meet The Team</h1>
        </div>

        


			 <div class="column teams">
                <div class="team">
                    <div class="team-img">
                        <img src="img/adii.png" alt="Team Image">
                    </div>
                    <div class="team-content">
                        <h2>Kumar Aditya Mishra</h2>
                        <h3>Developer</h3>
                        <p>S.Id - 2022623669
</p>
                        <h4>2022623669.kumar@pg.sharda.ac.in</h4>
                    </div>
                   
                </div>
                <div class="team">
                    <div class="team-img">
                        <img src="img/shubham.png" alt="Team Image">
                    </div>
                    <div class="team-content">
                        <h2>Shubham</h2>
                        <h3>Developer</h3>
                        <p>S.Id - 2022608839
</p>
                        <h4>2022608839.shubham@pg.sharda.ac.in</h4>
                    </div>
                    
                </div>
                <div class="team">
                    <div class="team-img">
                        <img src="img/himanshu.png" alt="Team Image">
                    </div>
                    <div class="team-content">
                        <h2>Sirshude Himanshu</h2>
                        <h3>Developer</h3>
                        <p>S.Id - 2022575433
</p>
                        <h4>2022575433.himanshu@pg.sharda.ac.in</h4>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>

    
</body>
</html>
<?php
	at_bottom();