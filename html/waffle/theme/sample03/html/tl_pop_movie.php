<div id="movie_bpopup_form" style="display:none;">
    <div class="title"> <span class="button b-close" style="position:absolute; top:50px; right:25px;">
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </span>
        <div style="padding-top:30px;">
            <div class="tl_pop_con" style="background-color:transparent">
                <div class="f_pop_wrap">
                    <h2 class="f_pop_tit"><span></span></h2>
                    <div id="movie_player"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(function() {
	$('#movie_popup').click(function(e) {
		e.preventDefault();
		
		if(!movie_player) init_movie_player();
		
		// Triggering bPopup when click event is fired
	    $('#movie_bpopup_form').bPopup({
			onOpen: function() {
				//console.log(movie_player.playVideo);
				setTimeout(function() {
					movie_player.playVideo();
				}, 1000);
			},
			onClose: function() {
				movie_player.stopVideo();
			}
		});
	});

  // 2. This code loads the IFrame Player API code asynchronously.
 
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
 
  
  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var movie_player;
  function init_movie_player() {
  //function onYouTubeIframeAPIReady() {
	movie_player = new YT.Player('movie_player', {
	  width: '100%',
	  videoId: 'TaCE5sAigGQ'/*,
	  events: {
		'onReady': onPlayerReady,
		'onStateChange': onPlayerStateChange
	  }
	  */
	});
  }
  /*
  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
	event.target.playVideo();
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.PLAYING && !done) {
	  setTimeout(stopVideo, 6000);
	  done = true;
	}
  }
  function stopVideo() {
	movie_player.stopVideo();
  }
  */
  });
</script>
<style>
#movie_bpopup_form .title {position:relative; width:853px; height:500px; margin:auto}
@media screen and (max-width: 853px) {
	#movie_bpopup_form .title { width:100%; min-width:380px}
}
</style>
