<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="../../css/style.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged.php";?>

<?php 
	if(empty($_SESSION['LoginSession'])){
		header("location:../views/login.php");
	}
?>



<div class="app">
	<div class="menu-toggle">
		<div class="hamburger">
			<span></span>
		</div>
	</div>

	<aside class="sidebar">
		<nav class="menu">
			<?php //profile_img();?>
			<p class="profile-name"><?php //user_id_loged();?></p>
			<a href="admin.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="admin/students.php" class="menu-item"><i class="fas fa-user-graduate"></i>Students</a>
			<a href="admin/teachers.php" class="menu-item"><i class="fas fa-chalkboard-teacher"></i>Teachers &nbsp; <span class="pending">15</span></a>
			<a href="admin/quizzes.php" class="menu-item"><i class="fas fa-question-circle"></i>Quizzes</a>
			<a href="admin/admins.php" class="menu-item"><i class="fas fa-user-tie"></i>Admin</a>
			<a href="std_question.php" class="menu-item"><i class="far fa-comments"></i>Chats</a>
			<a href="admin/my_account_admin.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>
		
	</aside>

	<main class="content">

		<div class="admin-content">
			<div class="grid">
				<div class="admin-item1">					
						<i class="fas fa-user-graduate" style="font-size: 50px; padding:25px 0 0 25px;"></i>
                        <div class="admin-title"> &nbsp;  Students<br></div>					
				</div>
				<div class="admin-item2">
                <i class="fas fa-chalkboard-teacher" style="font-size: 50px; padding:25px 0 0 25px;"></i>
					<div class="admin-title">
						 &nbsp;  Teachers<br>
					</div>

				</div>
				<div class="admin-item3">
                <i class="fas fa-user-tie" style="font-size: 50px; padding:25px 0 0 25px;"></i>
					<div class="admin-title">
						 &nbsp;  Admins<br>
					</div>


				</div>
				<div class="admin-item4">
                <i class="fas fa-question-circle" style="font-size: 50px; padding:25px 0 0 25px;"></i>
					<div class="admin-title">
						 &nbsp;  Quizzes<br>
					</div>
				</div> 
			</div>

		</div>
	</main>
</div>

<script src="../../js/script.js"></script>
