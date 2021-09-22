
<!DOCTYPE html>
<html>
<title>Funstore</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Glory:wght@100&display=swap" rel="stylesheet">
<style>
body, html {
  height: 100%;
  font-family:  'Glory', sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("/frontend/images/123.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
<body>
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Số điện thoại: 0990880888</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Fun<br>Store</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">143 Phúc Diễn, Bắc Từ Liêm</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Giời thiệu về FunStore</span></h5>
    <p>FunStore là một của hàng chuyên laptop và phụ kiện máy tính chính hãng tại Hà Nội.</p>
    <p>Trong cửa hàng của chúng tôi quý khách có thể lựa chọn hoặc đặt những chiếc laptop mà những của hàng khác không có. Đa dạng sản phẩm, giá cả hợp lý, khuyến mãi cao, đặt những mặt hàng khách hàng yêu cầu đó là một lợi thế lớn đến từ của hàng chúng tôi. Hãy ghé thăm của hàng để có một sản phẩm tốt nhất nha quý khách.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"khách hàng là người trả lương cho chúng ta - Trong mọi tình huống phải tôn trọng khách hàng." Tiêu chí của hàng.</i></p>
      <p>Ẩn danh.</p>
    </div>
    <img src="/frontend/images/unnamed.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Thời gian mở cửa:</strong> Mọi ngày từ 8AM đến 18PM</p>
    <p><strong>Số điện thoại:</strong> 0990880888</p>
    <p><strong>Địa chỉ:</strong> 143 Phúc Diễn, Bắc Từ Liêm</p>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Sản phẩm</span></h5>

    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Laptop</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Phụ kiện</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Laptop Acer</h5>
      <p class="w3-text-grey">Giá rẻ hơn so với các hãng khác cùng cấu hình, trọng lượng nhẹ, thiết kế đơn giản.</p><br>

      <h5>Laptop Asus</h5>
      <p class="w3-text-grey">Thiết kế mỏng, thời lượng pin tốt, tản nhiệt tốt nhờ công nghệ độc quyền, cấu hình máy cao.</p></p><br>

      <h5>Laptop MSI</h5>
      <p class="w3-text-grey">Màn hình lớn, âm thanh chất lượng cao, bàn phím có độ nảy tốt, êm ái và phản hồi nhanh.</p><br>

      <h5>Laptop Alienware</h5>
      <p class="w3-text-grey">Thiết kế tinh tế, đẹp đẽ dễ nhận biết thương hiệu. Khung, viền, vỏ được tạo từ vật liệu cao cấp, cấu hình máy mới nhất, ổn định khi chơi game hoặc làm việc cần đến cấu hình cao.</p><br>

    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>Sony</h5>
      <p class="w3-text-grey">Tai nghe Sony là thương hiệu lớn trên thế giới đi đầu nghành âm thanh, với thiết kế tinh tế, đơn giản, chất lượng âm thanh đỉnh cao.</p><br>

      <h5>Razer</h5>
      <p class="w3-text-grey">Với Razer chuột, bàn phím, ghế,... chất lượng rất tốt từ thiết kến đến chức năng hơn so với các hãng khác</p><br>

      <h5>Logitech</h5>
      <p class="w3-text-grey">Một hãng rất nổi tiếng trên thế giới về đồ công nghệ. Sản phẩm chất lượng cao, giá cả hợp lý.</p><br>

      <h5>Leopold</h5>
      <p class="w3-text-grey">Chủ yếu với bàn phím, thiết kế đơn giản, chất lượng rất cao từ swich cho đến keycasp.</p><br>

    </div>

  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Cảm ơn quý khách đã ghé thăm của hàng</span></h5>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by Phạm Văn Hoàng</p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
