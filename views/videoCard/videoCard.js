//Firebase Bağlantısı Kur
var database = firebase.database();
const dbRef = firebase.database().ref();
var count = 0;
var ref = firebase.database().ref("kullanicilar/basvurular").orderByKey();

//#card
var mainContainer = document.getElementById("mainContainer");
var temp = document.getElementById("template");
temp.remove();

var childData;
/*
ref.once("value", function (snapshot) {
  snapshot.forEach(function (val) {
    var card = document.createElement("div");

    card = temp;

    let site = "";
    site = "https://img.youtube.com/vi/" + val.val().video + "/0.jpg";

    //Alınan değerleri kartın ilgili kısımlarına yazdırmak için:
    card
      .getElementsByTagName("a")[1]
      .setAttribute("href", "/PAFF/video-detay/" + val.key);
    card.getElementsByTagName("span")[0].innerHTML = val.val().adSoyad;
    card.getElementsByTagName("strong")[0].innerHTML = val.val().mevki;
    card.getElementsByTagName("strong")[1].innerText = val.val().ayak;
    card.getElementsByTagName("div")[2].innerHTML = val.val().ozgecmis;
    card.getElementsByTagName("img")[0].setAttribute("src", site);

    temp.setAttribute("data-category", val.val().mevki + " " + val.val().ayak);
    //Varolan card referansını kopyalayarak yeni bir child eklemek için
    mainContainer.appendChild(card.cloneNode(true));
  });
});
*/
var $filterCheckboxes = $('input[type="checkbox"]');

$filterCheckboxes.on("change", function () {
  var selectedFilters = {};

  $filterCheckboxes.filter(":checked").each(function () {
    if (!selectedFilters.hasOwnProperty(this.name)) {
      selectedFilters[this.name] = [];
    }

    selectedFilters[this.name].push(this.value);
  });

  var $filteredResults = $(".temp");

  $.each(selectedFilters, function (name, filterValues) {
    $filteredResults = $filteredResults.filter(function () {
      var matched = false,
        currentFilterValues = $(this).data("category").split(" ");

      $.each(currentFilterValues, function (_, currentFilterValue) {
        if ($.inArray(currentFilterValue, filterValues) != -1) {
          matched = true;
          return false;
        }
      });

      return matched;
    });
  });

  $(".temp").hide().filter($filteredResults).show();
});

var lastkey = "";

appendData();

var counter = 0;
$(window).scroll(function () {
  if ($(window).scrollTop() == $(document).height() -  $(window).height()  && counter < 1 ) {

    ref.startAt(lastkey).limitToFirst(5).once("value", function (snapshot) {
      snapshot.forEach(function (val) {
        var card = document.createElement("div");
        if (lastkey == val.key) {
        } else {
          card = temp;

          let site = "";
          site = "https://img.youtube.com/vi/" + val.val().video + "/0.jpg";

          //Alınan değerleri kartın ilgili kısımlarına yazdırmak için:
          card 
            .setAttribute("href", "/PAFF/video-detay/" + val.key);
          card.getElementsByTagName("span")[0].innerHTML = val.val().adSoyad;
          card.getElementsByTagName("strong")[0].innerHTML = val.val().mevki;
          card.getElementsByTagName("strong")[1].innerText = val.val().ayak;
          card.getElementsByTagName("div")[2].innerHTML = val.val().ozgecmis;
          card.getElementsByTagName("img")[0].setAttribute("src", site);
          lastkey = val.key;
          console.log(lastkey);
          temp.setAttribute(
            "data-category",
            val.val().mevki + " " + val.val().ayak
          );
          //Varolan card referansını kopyalayarak yeni bir child eklemek için
          mainContainer.appendChild(card.cloneNode(true));
        }
      });
    });
  }
});

function appendData() {
  ref.limitToFirst(5).once("value", function (snapshot) {
    snapshot.forEach(function (val) {
      var card = document.createElement("div");

      card = temp;

      let site = "";
      site = "https://img.youtube.com/vi/" + val.val().video + "/0.jpg";

      //Alınan değerleri kartın ilgili kısımlarına yazdırmak için:
      card
        .getElementsByTagName("a")[1]
        .setAttribute("href", "/PAFF/video-detay/" + val.key);
      card.getElementsByTagName("span")[0].innerHTML = val.val().adSoyad;
      card.getElementsByTagName("strong")[0].innerHTML = val.val().mevki;
      card.getElementsByTagName("strong")[1].innerText = val.val().ayak;
      card.getElementsByTagName("div")[2].innerHTML = val.val().ozgecmis;
      card.getElementsByTagName("img")[0].setAttribute("src", site);
      lastkey = val.key;

      temp.setAttribute(
        "data-category",
        val.val().mevki + " " + val.val().ayak
      );
      //Varolan card referansını kopyalayarak yeni bir child eklemek için
      mainContainer.appendChild(card.cloneNode(true));
    });
  });

  counter++;

  if (counter == 1){

  }
  
}
