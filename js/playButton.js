var isPlaying = false;

document.getElementById('playButton').onclick=function()
{
   if (isPlaying === false)
   {
      document.getElementById('stream').play();
      $("div.play_button").css({background:'#444444'});
      isPlaying = true;
   }
   else
   {
      document.getElementById('stream').stop();
      $("div.play_button").css({background:'#004444'});
      isPlaying = false;
   }
}
      
