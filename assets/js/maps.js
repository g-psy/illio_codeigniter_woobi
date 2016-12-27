// Google Maps
// function initMap() {
//     var myLatLng = {lat: 37.609813, lng: 127.010897};

//     // Create a map object and specify the DOM element for display.
//     var map = new google.maps.Map(document.getElementById('google_map'), {
//       center: myLatLng,
//       // scrollwheel: false,
//       zoom: 4
//     });

//     // Create a marker and set its position.
//     var marker = new google.maps.Marker({
//       map: map,
//       position: myLatLng,
//       title: '일리오'
//     });
// };

// Daum Maps
var container = document.getElementById('daum_map'); //지도를 담을 영역의 DOM 레퍼런스
var options = { //지도를 생성할 때 필요한 기본 옵션
    center: new daum.maps.LatLng(37.609813, 127.010897), //지도의 중심좌표.
    level: 3 //지도의 레벨(확대, 축소 정도)
};

var map = new daum.maps.Map(container, options); //지도 생성 및 객체 리턴
