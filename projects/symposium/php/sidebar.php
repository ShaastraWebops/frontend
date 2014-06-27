	<script> 
		$(document).ready(function(){
		$(".sidebar").hide();
		$(".cover").on('mouseover',function(){
		$(".sidebar").show('slide', { direction: 'left' }, 600);
		});
		$(".main-content").on('mouseover',function(){
		$(".sidebar").hide('slide', { direction: 'left' }, 600);
		});
		});
	</script>
	
	<style>
		 .cover{
		  width: 70px;
		  height: 560px;
		  position: fixed;
		  top:55px;left:0px;
		  background-color:#333;
		  }
		 .sidebar{
		  width: 250px;
		  height: 560px;
		  position: fixed;
		  top:55px;left:70px;
		  background-color:#333;
		  border:none;padding:0;
		  }
		  .sidebar>div{
		  width: 250px;
		  height:70px;
		  background-color:#333;
		  font-family: 'Oswald';
		  font-size:125%;
		  color:white;
		  text-align:center;
		  padding-top:20px;
		  }
		  .sidebar>div.active{
		  background-color:white;
		  color:#333;
		  }
		  .sidebar>div.default#home_sidebar:hover{
		  background-color:#27AE61;
		  }
		  .sidebar>div.default#about_sidebar:hover{
		  background-color:rgb(41,128,185);
		  }
		  .sidebar>div.default#schedule_sidebar:hover{
		  background-color:rgb(192,57,43);
		  }
		  .sidebar>div.default#speakers_sidebar:hover{
		  background-color:#89BFC9;
		  }
		  .sidebar>div.default#partners_sidebar:hover{
		  background-color:#20618B;
		  }
		  .sidebar>div.default#register_sidebar:hover{
		  background-color:#EE753E;
		  }
		  .sidebar>div.default#contact_sidebar:hover{
		  background-color:rgb(237,173,21);
		  }
		  .sidebar>div.default#search_sidebar:hover{
		  background-color:#88D6C6;
		  }
	</style>
	<div class="cover">
		<!--Cover-->
		<img style="height:70px;width:70px;" src="../img/Home.png">
		<img style="height:70px;width:70px;" src="../img/Document.png">
		<img style="height:70px;width:70px;" src="../img/Calendar.png">
		<img style="height:70px;width:70px;" src="../img/Comment.png">
		<img style="height:70px;width:70px;" src="../img/User.png">
		<img style="height:70px;width:70px;" src="../img/Tag.png">
		<img style="height:70px;width:70px;" src="../img/Mail3.png">
		<img style="height:70px;width:70px;" src="../img/Search.png">
	</div>
	<div class="sidebar">
		<!--Sidebar content-->
		<div class="default" id="home_sidebar">HOME</div>
		<div class="default" id="about_sidebar">ABOUT</div>
		<div class="default" id="schedule_sidebar">SCHEDULE</div>
		<div class="default" id="speakers_sidebar">SPEAKERS</div>
		<div class="default" id="partners_sidebar">PARTNERS</div>
		<div class="default" id="register_sidebar">REGISTER</div>
		<div class="default" id="contact_sidebar">CONTACT</div>
		<div class="default" id="search_sidebar">SEARCH</div>
	</div>