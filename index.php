 <video id="video" style="background-color:black;" width="320" height="240" controls autoplay loop>
Unsupported Browser
</video> 
<br>
<br>
Enter a direct video link here: <input id="link" type="text"></input><button onclick="submitLink()" type="button">Submit</button>

<script>
 function submitLink(){

var video = document.getElementById('video');
var source = document.createElement('source');

source.setAttribute('src', document.getElementById('link').value);

video.appendChild(source);
video.play();

   
 }
</script>