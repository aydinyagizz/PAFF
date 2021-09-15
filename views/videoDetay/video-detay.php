<?php require 'header.php'; ?>
<div class="login-box">
    <h2> Video Detay </h2>
    <form>
        <input type="hidden" value="<?php echo $id ?>" id="id_key">

        <div class="user-box">
            <input type="text" id="oyuncu_adi" name="" required="">
            <label>Oyuncu Adı :</label>
        </div>

        <div class="user-box">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe id="oyuncunun_videosu" width="620" height="315" src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <br>
        <!--   <div class="user-box">
            <input type="text" id="<?php echo $id ?>" value="" name="" required="">
            <label> Oyuncu Id: </label>
        </div>
                -->
        <div class="user-box">
            <input type="text" id="oyuncunun_boyu" name="" required="">
            <label>Oyuncunun Boyu:</label>
        </div>
        <div class="user-box">
            <input type="text" id="oyuncunun_kilosu" name="" required="">
            <label>Oyuncunun Kilosu:</label>
        </div>
        <div class="user-box">
            <input type="text" id="oyuncunun_yasi" name="" required="">
            <label>Oyuncunun Yaşı:</label>
        </div>
        <div class="user-box">
            <input type="text" id="oyuncunun_ayagi" name="" required="">
            <label>Oyuncunun Ayağı:</label>
        </div>
        <div class="user-box">
            <input type="text" id="oyuncunun_mevkisi" name="" required="">
            <label>Oyuncunun Mevkisi</label>
        </div>
        <div class="user-box">
            <input type="text-area" id="oyuncunun_detayi" name="" required="">
            <label>Oyuncu Açıklaması:</label>
        </div>
        <div class="user-box">
            <input type="text" id="oyuncunun_puani" name="" required="">
            <label>Oyuncu Geçmiş Puanı:</label>
        </div>
        <label style="color: #03e9f4;">Puanla : </label>
        <br>
        <br>
        <div class="" style="margin-left: center;">
            <div id="yildiz">


                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>

            </div>
        </div>



        <!-- Submit button -->
        <div>
            <a href="#" onclick="yildizhesapla()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                DEĞERLENDİR 
            </a>
        </div>
    </form>
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/9.0.0/firebase-compat.js"></script>
<script src="../views/public/anahtar.js"></script>
<script src="../views/videoDetay/videoDetay.js"></script>
<script src="../views/videoDetay/yildiz.js"></script>

<?php require 'footer.php'; ?>