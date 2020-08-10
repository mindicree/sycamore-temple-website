<script type="text/javascript">
  let count = 0;
  rBanner = document.getElementById('banner-0');
  rBanner.setAttribute("style", "background-image: img/banners/0.jpg");
  setTimeout(function(){}, 3000)
  setInterval(function() {
    count++;
    if (count > 5) {count = 0}
    rBanner.setAttribute("src", "img/banners/" + count + ".jpg");
  }, 5000)
</script>
