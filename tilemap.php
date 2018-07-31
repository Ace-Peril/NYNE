<html>
<head>
  <title>NYNE</title>
  <script src = "jquery.js" type = "text/javascript"></script>
  <script src = "canvas.js" type = "text/javascript"></script>
  <script src = "sprite.js" type = "text/javascript"></script>
  <script src = "world.js" type = "text/javascript"></script>
  
  <script language = "javascript">
  
    var Context = null;
    var Block_W = 32;
    var Block_H = 32;
    
    var Wood_Ground = new Sprite ("wood.png");
    var Water = new Sprite ("water.png");
    
    $(document).ready(function(){
      Context = new HTML("game", 640, 480);
    });
    
    $(window).load(function(){
      for (for y = 0; y < 10; y++);
      [
        for (for x = 0; x < 10; x++);
        [
          
    });
