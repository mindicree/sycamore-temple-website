<script type="text/javascript">
  let count = 0;
  setTimeout(function(){}, 3000)
  setInterval(function() {
    count++;
    if (count > 5) {count = 0}
    document.getElementById('banner').setAttribute("src", "img/banners/" + count + ".jpg");
  }, 3000)
</script>
