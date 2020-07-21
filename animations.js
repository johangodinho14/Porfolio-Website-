// ---- Vars for typing animation
var textProgress    = 0;
var text            = 
'Hey there! \n Welcome to my Portfolio';
var speed           = 35;

// ---- Vars for star animation
var width            = 0;
var height           = 0;

var canvas         = document.querySelector('canvas');
var c              = canvas.getContext('2d');

var numberofStars  = 300;
var starPos          = [];
var frame            = 0;
var frameRate      = 50;
var maxStarSize    = 4;

// ---- Var for Scroll animation
var hasScrolled      = false;
// ---- Functions ----

//Dropdown Menu Handler
function dropdownHandler(){
   var dropdownButton = document.getElementById('dropdown-button');
   var closeDropdown = document.getElementById('close-dropdown-button');
   dropdownButton.onclick = function(){
       document.getElementById('dropdown-content').style.display    = 'block';
       document.getElementById('dropdown-content').style.animation  = 'backgroundSpinAnimation ease 0.9s';
       dropdownButton.style.display = 'none';
       closeDropdown.style.display = 'block';
       closeDropdown.style.animation = "spinAnimation ease 1s";
   }
   closeDropdown.onclick      = function(){
       document.getElementById('dropdown-content').style.animation = 'backgroundReverseSpinAnimation ease 0.5s';
       setTimeout(function(){document.getElementById('dropdown-content').style.display = 'none';},500);
       closeDropdown.style.display = 'none';
       dropdownButton.style.display = 'block';
   }
}
//Star animation
var generateStars = function(){
    starPos = [];
    for(i=0;i<numberofStars;i++){
      var x,y
      x = (Math.floor(Math.random()*innerWidth+10));
      y = (Math.floor(Math.random()*innerHeight+10));
      starPos.push({x:x,y:y});
    };
}
var drawStars    = function(){
    c.beginPath();
    c.fillStyle = "white";
    c.shadowBlur = 6;
    c.shadowColor = "white"
    for(i=0;i<numberofStars;i++){
      var starSize= Math.floor(Math.random()*maxStarSize);
          var ref = starPos[i];
          c.rect(ref.x,ref.y,starSize-0.7,starSize-0.7);  
    }
    c.fill();
    c.closePath();
}
var starAnimationLoop = function(){
   requestAnimationFrame(starAnimationLoop);
  
    //Scaling the screen
    if(width !== innerWidth || height !== innerHeight){
      width = canvas.width = innerWidth;
      height= canvas.height= innerHeight;
      frame = 0;
      
      generateStars();        
    }
   
    //Rendering the animation based on the frame rate
    if(frame++%frameRate===0){ 
        c.clearRect(0,0,width,height);
        drawStars();
    }
}
//Typing animation
var typingAnimation   = function(){
        if(textProgress < text.length){
            setTimeout(function(){requestAnimationFrame(typingAnimation)}, speed);
            if(text.charAt(textProgress) === '\n')document.getElementById('animation-text').innerHTML += '</br>';
            document.getElementById('animation-text').innerHTML += text.charAt(textProgress);
            textProgress ++;
        };
}
//Hide dropdown menu
var hideDropDown     = function(){
    document.getElementById('dropdown-content').style.display = 'none';
    document.getElementById('close-dropdown-button').style.display = 'none';
    document.getElementById('dropdown-button').style.display  = 'block';
}


// ---- Event Handlers ----

//Star and typing animation on load
window.addEventListener("load", function(){
    typingAnimation();
    starAnimationLoop();
    dropdownHandler();
});
//Scroll animation for About page
window.addEventListener("scroll",function(){
    var target = document.getElementById('aboutMe');
    if(target.getBoundingClientRect().top <= 0 && hasScrolled === false){   
        //About-me background animation vars
        var sun    = document.getElementById('sun');

        //Martix animation vars
        var HTML   = document.getElementById('statusBarHTML');
        var CSS    = document.getElementById('statusBarCSS');
        var JS     = document.getElementById('statusBarJS');
        var PHP    = document.getElementById('statusBarPHP');
        var Node   = document.getElementById('statusBarNode');
        var SQL    = document.getElementById('statusBarSQL');

        //About-me page animation 
        target.classList.add('animatedBackgroundAboutMe');
        sun.classList.add('sunAnim');
        // Matrix Animation
        HTML.classList.add('statusBarHTMLAnim');
        CSS.classList.add('statusBarCSSAnim');
        JS.classList.add('statusBarJSAnim');
        PHP.classList.add('statusBarPHPAnim');
        Node.classList.add('statusBarNodeAnim');
        SQL.classList.add('statusBarSQLAnim');
        
        hasScrolled = true;
    }
});      

