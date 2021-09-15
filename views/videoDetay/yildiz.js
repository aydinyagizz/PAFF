
var puan = 0;
var idkey = document.getElementById("id_key").value;
$(function () {

    var kontrol = 0; //kontrol değişkenimiz.tıklandıktan sonra renkler sıfırlanmasın diye
    $("#yildiz i").mouseover(function () { //yıldızların üzerine mouse ile gelinirse

        var index = $(this).index(); //üzerine gelinenin sayfadaki sırasını al.

        $("#yildiz i").css("color", "#fff") //tüm yıldızları siyah yap

        for (i = index; i >= 0; i--) { //seçtiğimiz yıldız ve altındakileri döngüye alıyoruz.

            $("#yildiz i:eq(" + i + ")").css("color", "#ffdf00"); //tek tek renklerini değiştiriyoruz.

        }
    })

    $("#yildiz i").mouseout(function () { //yıldızların üzerinden mouse çekilirse

        if (kontrol == 0) { //kontrol 0 ise

            $("#yildiz i").css("color", "#fff"); //hepsini siyah yap

        }

    })

    $("#yildiz i").click(function () { //yıldıza tıklanırsa

        var index = $(this).index() + 1; //seçilen yıldız sayısını buluyoruz.

        kontrol = 1; //kontrolü 1 yapıyoruz

        puan = index;




    })
})
function yildizhesapla() {


    if (confirm(puan + " puan verdiniz. Onaylıyor musunuz.")) {

        firebase.database().ref('kullanicilar/basvurular/' + idkey).update({

            yetkilipuani: puan

        });
        
    } else {
        $("#yildiz i").css("color", "#000"); //hepsini siyah yap


    }
}