<?php require 'header.php'; ?>


<!-- page content -->

<div class="gradient ">
 <div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4 cardDuyuru">
      <div class="card-body">
        <h6 class="card-title mb-3 text-center">Duyuru Resmi</h6><span class="required"></span>
        <div class="d-flex flex-row">
          <input type="file" value="upload" id="fileButton" />
        </div>
      </div>
      <h6 class="information mt-4 text-center">Duyuru detaylarını giriniz</h6>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">

            <input type="text" id="haber_basligi" class="form-control" autocomplete="off" value="" required="required" placeholder="Duyuru Başlığı">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <textarea type="text" id="haber_detayi" class="form-control" aria-label="With textarea" placeholder="Duyuru Detayı"></textarea>
          </div>
        </div>
      </div>

      <div class=" d-flex flex-column text-center px-5 mt-3 mb-3">
      </div>
      <button type="submit" name="urunduzenle" id="duyuruekle" class="btn btn-success" onclick="haberkaydet()">YAYINLA</button>
    </div>
  </div>
</div>


    <script >
        const gradient = document.querySelector(".gradient");

    function onMouseMove(event) {
  gradient.style.backgroundImage = 'radial-gradient(at ' + event.clientX + 'px ' + event.clientY + 'px, rgba(233, 233, 245,0.3) 0, #111112 50%)';
}
document.addEventListener("mousemove", onMouseMove);
</script>



<!-- /page content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/9.0.0/firebase-compat.js"></script>
<script src="../public/anahtar.js"></script>
<script src="../duyurular/duyuru.js"></script>


<?php include 'footer.php'; ?>
<!--başka dosyaları dahil etmeye yarar.-->