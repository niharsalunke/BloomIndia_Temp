<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:700);

$color1: #EE4B5E;
$color2: #342643;
$color3: #1FA9D6;

*, *:before, *:after {
  box-sizing: border-box;
}
html {
    height: 100%;
}
body {
    
    background-size: cover;
    font-family: 'Raleway', sans-serif;
    background-color: $color2; 
    height: 100%;
}

.text-wrapper {
    height: 100%;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
}

.title {
    font-size: 6em;
    font-weight: 700;
    color: $color1;
}

.subtitle {
    font-size: 40px;
    font-weight: 700;
    color: $color3;
}
    
}


</style>

<div class="text-wrapper">
    <div class="title" data-content="404">
        404
    </div>

    <div class="subtitle">
        Oops, the page you're looking for doesn't exist.
    </div>

    <div class="buttons">
        <a class="button" href="https://www.bloomindia.in/">Go to homepage</a>
    </div>
</div>