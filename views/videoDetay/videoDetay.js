
//video-detay alanı veri çekmesi
var query = firebase.database().ref("kullanicilar/basvurular").orderByKey();
var idkey = document.getElementById("id_key").value;

query.once("value")
  .then(function (snapshot) {
    snapshot.forEach(function (childSnapshot) {
      var key = childSnapshot.key;
      var childData = childSnapshot.val();


      if (key == idkey) {
        document.getElementById("oyuncu_adi").value = childData.adSoyad;
        document.getElementById("oyuncunun_videosu").setAttribute("src", "https://www.youtube.com/embed/" + childData.video);
        document.getElementById("oyuncunun_boyu").value = childData.boy;
        document.getElementById("oyuncunun_kilosu").value = childData.kilo;
        document.getElementById("oyuncunun_yasi").value = childData.yas;
        document.getElementById("oyuncunun_ayagi").value = childData.ayak;
        document.getElementById("oyuncunun_mevkisi").value = childData.mevki;
        document.getElementById("oyuncunun_detayi").innerHTML = childData.ozgecmis;
        document.getElementById("oyuncunun_puani").value = childData.yetkilipuani;

        $("#yildiz i").ready(function () { //yıldızların üzerine mouse ile gelinirse
          var index = childData.yetkilipuani; //üzerine gelinenin sayfadaki sırasını al.

          $("#yildiz i").css("color", "#000") //tüm yıldızları siyah yap

          for (i = 0; i < index; i++) { //seçtiğimiz yıldız ve altındakileri döngüye alıyoruz.

            $("#yildiz i:eq(" + i + ")").css("color", "#ffdf00"); //tek tek renklerini değiştiriyoruz.

            }

        })



      } else {

      }

    });
  });