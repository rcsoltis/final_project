 <footer>
     <h3>Question or Comment?</h3>

     <form method="post" id="contact" action="includes/comments/comments.php">
         <label for="firstname">First name:</label><input type="text" id="firstname" name="firstname">

         <label for="lastname">Last name:</label><input type="text" id="firstname" name="lastname">

         <label for="e_mail">E-mail:</label><input type="text" id="e_mail" name="e_mail">

         <label for="comment">Question or Comment?</label><textarea type="text" id="comment" name="comment" rows="6"></textarea><br>

         <!--<label>Role:</label>

         <select size="1" class="select-css" id="role_type" name="role_type">
             <option>Event Role</option>
             <option value="athlete">Athlete</option>
             <option value="volunteer">Volunteer</option>
              <option value="volunteer">Volunteer</option>
         </select><br>-->

         <input class="mysubmit" type="submit" value="Submit">
     </form>
     <div class="section group">
         <aside class="col span_4_of_12">
             <div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                 <blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote>
             </div>
         </aside><br>
         <aside class="col span_4_of_12">
             <a class="twitter-timeline" data-width="340" data-height="500" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
             <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
         </aside>
         <aside class="col span_4_of_12">
             <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original" data-basecolor="#ffff" data-shadow="#f7f3f3" data-textcolor="#000000" data-highcolor="#9d0d0d" data-lowcolor="#06306c" data-mooncolor="#0657b8" data-cloudcolor="#2f2d2d" data-cloudfill="#f7f9fa" data-raincolor="#0569f9" data-snowcolor="#060606">PORTLAND WEATHER</a>
             <script>
                 ! function(d, s, id) {
                     var js, fjs = d.getElementsByTagName(s)[0];
                     if (!d.getElementById(id)) {
                         js = d.createElement(s);
                         js.id = id;
                         js.src = 'https://weatherwidget.io/js/widget.min.js';
                         fjs.parentNode.insertBefore(js, fjs);
                     }
                 }(document, 'script', 'weatherwidget-io-js');

             </script>
             <p>Copyright&copy;<?php echo date("Y");?> Ace in the Hole</p>
             <img src="images/Triathlon_all_3_stages_pictogram.svg" alt="triathlon logo" height="160px" width="160px">
         </aside>
     </div>
 </footer>
