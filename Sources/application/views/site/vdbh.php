<script src="//code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="js/videopopup.js"></script>
	<link rel="stylesheet" href="css/videopopup.css">
<div id="vidBox">
  <div id="videCont">
    <video autoplay id="demo" loop controls>
      <source src="1.webm" type="video/webm">
      <source src="1.mp4" type="video/mp4">
    </video>
   </div>
</div>
<a href="javascript:void(0)" id="video-trigger">Open</a>
$(function () {
 $('#vidBox').VideoPopUp({
  opener: "video-trigger"
  idvideo: "demo"
  });
});
$('#vidBox').VideoPopUp({
  backgroundColor: "#000000"
});
$('#vidBox').VideoPopUp({
  maxweight: "640"
});