<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <title>Barre Code Generator</title>
    </head>
    <body class="bg-gray-200">
    
    <div class="flex items-center justify-center h-screen bg-gray-200 sm:px-6">
        <div class="w-full max-w-sm p-4 bg-white rounded-md shadow-md sm:p-6">
            <div class="flex items-center justify-center">
                <span class="text-xl font-medium text-gray-900">Remove Background in 🐘</span>
            </div>
            <form class="mt-4" method="POST">
                <label for="image" class="block">
                    <span class="text-base font-bold text-gray-700">L'url de votre Image</span>
                    <input type="name" id="image" name="image" autocomplete="image"
                        class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
                        required />
                </label>

               
                <div class="mt-6">
                    <button type="submit" name="submit" id="button"
                        class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Générer</button>
                </div>
    
            </form>
            <div class="flex flex-col justify-center mt-10">
                <?php
                    if (isset($_POST['submit'])) {

                        $image = htmlspecialchars(trim($_POST['image']));
                        $ch = curl_init();

                        curl_setopt($ch, CURLOPT_URL, 'https://api.remove.bg/v1.0/removebg');
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_POST, 1);
                        $post = array(
                            'image_url' =>  $image,
                            'size' => 'auto'
                        );
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

                        $headers = array();
                        $headers[] = 'X-Api-Key: 9x6g55V2cp18XXfEqUrejwJ3';
                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                        $result = curl_exec($ch);
                        curl_close($ch);

                        $fp = fopen("no-bg.png", "wb");
                        fwrite($fp, $result);
                        fclose($fp);
                    ?>
                     <div class="flex justify-center">
                        <img  src="no-bg.png" alt="no-bg" loading="lazy" class="w-60">
                    </div>
                    <a href="no-bg.png" class="m-5 text-xl font-semibold text-center hover:text-purple-600" download> Télécharger </a>
                        
                <?php }?>
      

            </div>

         
        </div>
    </div>
    
    <script src="node_modules/confetti-js/dist/index.min.js"></script>

    <script>
       (()=>{"use strict";function t(t){return+t.replace(/px/,"")}function e(t,e){var i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,n=Math.random()*(e-t)+t;return Math.floor(n*Math.pow(10,i))/Math.pow(10,i)}function i(t){return t[e(0,t.length)]}var n=["#fcf403","#62fc03","#f4fc03","#03e7fc","#03fca5","#a503fc","#fc03ad","#fc03c2"];function o(t,e){var i=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),i.push.apply(i,n)}return i}function s(t){for(var e=1;e<arguments.length;e++){var i=null!=arguments[e]?arguments[e]:{};e%2?o(Object(i),!0).forEach((function(e){a(t,e,i[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(i)):o(Object(i)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(i,e))}))}return t}function a(t,e,i){return e in t?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i,t}function r(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}function c(){return Math.log(window.innerWidth)/Math.log(1920)}var h=function(){function t(n){var o=n.initialPosition,a=n.direction,r=n.confettiRadius,h=n.confettiColors,f=n.emojies;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t);var u=e(.9,1.7,3)*c();this.confettiSpeed={x:u,y:u},this.finalConfettiSpeedX=e(.2,.6,3),this.rotationSpeed=f.length?.01:e(.03,.07,3)*c(),this.dragForceCoefficient=e(5e-4,9e-4,6),this.radius={x:r,y:r},this.initialRadius=r,this.rotationAngle="left"===a?e(0,.2,3):e(-.2,0,3),this.emojiRotationAngle=e(0,2*Math.PI),this.radiusYUpdateDirection="down";var l="left"===a?e(82,15)*Math.PI/180:e(-15,-82)*Math.PI/180;this.absCos=Math.abs(Math.cos(l)),this.absSin=Math.abs(Math.sin(l));var d=e(-150,0),p={x:o.x+("left"===a?-d:d)*this.absCos,y:o.y-d*this.absSin};this.currentPosition=s({},p),this.initialPosition=s({},p),this.color=f.length?null:i(h),this.emoji=f.length?i(f):null,this.createdAt=(new Date).getTime(),this.direction=a}var n,o;return n=t,(o=[{key:"draw",value:function(t){var e=this.currentPosition,i=this.radius,n=this.color,o=this.emoji,s=this.rotationAngle,a=this.emojiRotationAngle,r=window.devicePixelRatio;n?(t.fillStyle=n,t.beginPath(),t.ellipse(e.x*r,e.y*r,i.x*r,i.y*r,s,0,2*Math.PI),t.fill()):o&&(t.font="".concat(i.x,"px serif"),t.save(),t.translate(r*e.x,r*e.y),t.rotate(a),t.textAlign="center",t.fillText(o,0,0),t.restore())}},{key:"updatePosition",value:function(t,e){var i=this.confettiSpeed,n=this.dragForceCoefficient,o=this.finalConfettiSpeedX,s=this.radiusYUpdateDirection,a=this.rotationSpeed,r=this.createdAt,c=this.direction,h=e-r;i.x>o&&(this.confettiSpeed.x-=n*t),this.currentPosition.x+=i.x*("left"===c?-this.absCos:this.absCos)*t,this.currentPosition.y=this.initialPosition.y-i.y*this.absSin*h+.00125*Math.pow(h,2)/2,this.rotationSpeed-=this.emoji?1e-4:1e-5*t,this.rotationSpeed<0&&(this.rotationSpeed=0),this.emoji?this.emojiRotationAngle+=this.rotationSpeed*t%(2*Math.PI):"down"===s?(this.radius.y-=t*a,this.radius.y<=0&&(this.radius.y=0,this.radiusYUpdateDirection="up")):(this.radius.y+=t*a,this.radius.y>=this.initialRadius&&(this.radius.y=this.initialRadius,this.radiusYUpdateDirection="down"))}},{key:"getIsVisibleOnCanvas",value:function(t){return this.currentPosition.y<t+100}}])&&r(n.prototype,o),t}();function f(t){var e=t.confettiRadius,i=void 0===e?t.emojies?80:6:e,o=t.confettiesNumber,s=void 0===o?t.emojies?80:250:o,a=t.confettiColors,r=void 0===a?n:a,c=t.emojies;return{confettiRadius:i,confettiesNumber:s,confettiColors:r,emojies:void 0===c?[]:c}}function u(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}const l=function(){function e(){var t;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,e),this.canvas=((t=document.createElement("canvas")).style.position="fixed",t.style.width="100%",t.style.height="100%",t.style.top="0",t.style.left="0",t.style.zIndex="1000",t.style.pointerEvents="none",document.body.appendChild(t),t),this.canvasContext=this.canvas.getContext("2d"),this.shapes=[],this.lastUpdated=(new Date).getTime(),this.iterationIndex=0,this.loop=this.loop.bind(this),requestAnimationFrame(this.loop)}var i,n;return i=e,(n=[{key:"loop",value:function(){var e,i,n,o,s,a=this;e=this.canvas,i=window.devicePixelRatio,o=t((n=getComputedStyle(e)).getPropertyValue("width")),s=t(n.getPropertyValue("height")),e.setAttribute("width",(o*i).toString()),e.setAttribute("height",(s*i).toString());var r=(new Date).getTime(),c=r-this.lastUpdated,h=this.canvas.offsetHeight;this.shapes.forEach((function(t){t.updatePosition(c,r),t.draw(a.canvasContext)})),this.iterationIndex%100==0&&(this.shapes=this.shapes.filter((function(t){return t.getIsVisibleOnCanvas(h)}))),this.lastUpdated=r,this.iterationIndex++,requestAnimationFrame(this.loop)}},{key:"addConfetti",value:function(){for(var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},e=f(t),i=e.confettiRadius,n=e.confettiesNumber,o=e.confettiColors,s=e.emojies,a=5*window.innerHeight/7,r={x:0,y:a},c={x:window.innerWidth,y:a},u=0;u<n/2;u++)this.shapes.push(new h({initialPosition:r,direction:"right",confettiRadius:i,confettiColors:o,emojies:s})),this.shapes.push(new h({initialPosition:c,direction:"left",confettiRadius:i,confettiColors:o,emojies:s}))}}])&&u(i.prototype,n),e}();var d=[{},{confettiRadius:12,confettiesNumber:100},{emojies:["🌈","⚡️","💥","✨","💫","🌸"]},{emojies:["⚡️","💥","✨","💫"]},{emojies:["🦄"],confettiRadius:100,confettiesNumber:30},{confettiColors:["#ffbe0b","#fb5607","#ff006e","#8338ec","#3a86ff"],confettiRadius:10,confettiesNumber:150},{confettiColors:["#9b5de5","#f15bb5","#fee440","#00bbf9","#00f5d4"],confettiRadius:6,confettiesNumber:300}];window.onload=function(){var t=new l,e=document.getElementById("button");e&&(e.addEventListener("click",(function(){t.addConfetti(i(d))})),setTimeout((function(){t.addConfetti()}),1e3))}})();
    </script>

    </body>
</html>