

var file;
var fileButton = document.getElementById('fileButton');
fileButton.addEventListener('change', function (e) {

  file = e.target.files[0];

});


var fotografURL = "Dosya gönderilemedi";
//haber verilerini veritabanına kaydı
function haberkaydet() {
  var haberbasligi = document.getElementById('haber_basligi').value;
  var haberdetayi = document.getElementById('haber_detayi').value;
  var storageRef = firebase.storage().ref();
  //Duyuru görseli ekleme

  var uploader = document.getElementById('uploader');

  var metadata = {
    contentType: 'image/jpeg'
  };

  var uploadTask = storageRef.child('DuyuruFotograflari/' + file.name).put(file, metadata);

  uploadTask.on('state_changed',
    () => {
      uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {

        fotografURL = downloadURL;
        firebase.database().ref('duyurular/').push({
           
          haber_basligi: haberbasligi,
          haber_detayi: haberdetayi,
          haber_fotograf: fotografURL
        });
    
      });



    });
    


}
