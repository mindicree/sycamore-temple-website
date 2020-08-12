<script type="text/javascript">
  console.log("mobile-nav-handler loaded successfully");
  let isVisible = false;

  function navToggle () {
    if (!isVisible) {
      document.querySelector("ul").setAttribute("style", "visibility: visible;");
      isVisible = true;
    } else {
      document.querySelector("ul").setAttribute("style", "visibility: hidden;");
      isVisible = false;
    }
  }

  //handles invisible nav when expanding
  setInterval(function() {
    if (window.innerWidth >= 1000) {
      document.querySelector("ul").setAttribute("style", "visibility: visible;");
    } else {
      if (!isVisible) {
        document.querySelector("ul").setAttribute("style", "visibility: hidden;");
      }
    }
  }, 500)
</script>
