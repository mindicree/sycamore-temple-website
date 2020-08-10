<script type="text/javascript">
  let count = 0;
  let layer = 0;
  setTimeout(function(){}, 3000)
  setInterval(function() {
    count++;
    layer++;
    if (count > 5) {
      count = 0
      rBanner = document.querySelector("#banner-0");
      prevBanner = document.querySelector("#banner-5");
      rBanner.setAttribute("style", "opacity: 1;");
      prevBanner.setAttribute("style", "opacity: 0;");
    } else {
      rBanner = document.querySelector("#banner-"+count);
      prevBanner = document.querySelector("#banner-"+(count-1));
      rBanner.setAttribute("style", "opacity: 1;");
      prevBanner.setAttribute("style", "opacity: 0;");
    }

  }, 5000)
</script>
